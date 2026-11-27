#!/usr/bin/env node
/**
 * EssenTechs Blog MCP server
 *
 * Lets an AI assistant (Claude) research, write, and manage blog posts on
 * essentechs.com through the Laravel blog-automation API.
 *
 * Env:
 *   ESSENTECHS_API_URL   e.g. https://essentechs.com   (no trailing /api)
 *   ESSENTECHS_API_TOKEN same value as BLOG_API_TOKEN in the site's .env
 *
 * Modes:
 *   node server.js          stdio (Claude Code / Claude Desktop launch it locally)
 *   node server.js --http   HTTP (remote AI apps connect by URL, e.g. through ngrok)
 *     MCP_HTTP_PORT   default 3333
 *     MCP_ACCESS_KEY  required, min 24 chars. URL: http://host:port/mcp/<MCP_ACCESS_KEY>
 *                     (or POST /mcp with "Authorization: Bearer <MCP_ACCESS_KEY>")
 */
import { McpServer } from "@modelcontextprotocol/sdk/server/mcp.js";
import { StdioServerTransport } from "@modelcontextprotocol/sdk/server/stdio.js";
import { StreamableHTTPServerTransport } from "@modelcontextprotocol/sdk/server/streamableHttp.js";
import http from "node:http";
import { timingSafeEqual, webcrypto } from "node:crypto";

// Node 18 (Ubuntu 24.04's default) has no global Web Crypto; the MCP SDK needs it.
if (!globalThis.crypto) globalThis.crypto = webcrypto;
import { z } from "zod";
import { readFile } from "node:fs/promises";
import path from "node:path";

const BASE_URL = (process.env.ESSENTECHS_API_URL || "https://essentechs.com").replace(/\/+$/, "");
const TOKEN = process.env.ESSENTECHS_API_TOKEN || "";
const API = `${BASE_URL}/api/blog-automation`;
const MAX_IMAGE_BYTES = 5 * 1024 * 1024;

// ---------------------------------------------------------------------------
// Business context the AI uses when writing posts
// ---------------------------------------------------------------------------
const SITE_CONTEXT = {
  business: "EssenTechs: home appliance repair and service company",
  website: "https://essentechs.com",
  phone: "+91 97467 00889",
  email: "info@essentechs.com",
  address: "Civil Line Kakkanad - Kunneparambu Road, Office No. KRA-52, Kochi, Kerala 682021",
  region: "Kochi / Ernakulam district, Kerala, India",
  service_areas: [
    "Kakkanad", "Edapally", "Aluva", "Palarivattom", "Vyttila", "Kalamassery", "Thrikkakara",
    "Kaloor", "Fort Kochi", "Tripunithura",
  ],
  services: [
    { name: "AC repair & service (split, inverter, gas refill, jet cleaning)", url: "/ac-service-repair-kochi", category: "ac" },
    { name: "Washing machine repair (front load, top load, semi-automatic)", url: "/washing-machine-repair-service-kochi", category: "washing-machine" },
    { name: "Refrigerator repair (single/double door, side-by-side, gas charging)", url: "/refrigerator-repair-service-kochi", category: "refrigerator" },
    { name: "Microwave oven repair (solo, grill, convection)", url: "/microwave-oven-repair-kochi", category: "microwave" },
    { name: "RO & water purifier service", url: "/water-purifier", category: "water-purifier" },
    { name: "Appliance installation & uninstallation", url: "/service/installation-uninstallation", category: "general" },
    { name: "AMC (Annual Maintenance Contract)", url: "/service/amc", category: "general" },
  ],
  other_pages: { contact: "/contact", brands: "/brands", offers: "/offers", all_services: "/services", blog: "/blog" },
  blog_fields: {
    category: ["general", "ac", "microwave", "refrigerator", "washing-machine", "water-purifier"],
    schema_type: ["Article", "TechArticle", "HowTo", "BlogPosting"],
    author_name_default: "EssenTechs Technical Team",
  },
  brands: [
    "Samsung", "LG", "Whirlpool", "IFB", "Bosch", "Haier", "Godrej", "Panasonic", "Voltas", "Daikin",
    "Hitachi", "Blue Star", "Carrier", "Lloyd", "Bajaj", "Videocon", "Onida", "Toshiba", "Sharp", "Siemens",
  ],
  brand_page_pattern: "/brands/{brand-slug} e.g. /brands/samsung",
  writing_guidelines: [
    "Audience: homeowners in Kochi/Ernakulam, Kerala. Be practical, friendly, trustworthy.",
    "Pick the matching category and a schema_type (HowTo for step-by-step fixes, TechArticle for technical guides, else Article). Set focus_keyword, a few secondary_keywords, tags and image_alt.",
    "Write 800-1500 words of original, accurate, genuinely useful content. No keyword stuffing.",
    "content must be clean HTML only: <h2>, <h3>, <p>, <ul>/<ol>/<li>, <strong>, <em>, <a>, <table>. No <h1> (the page adds the title), no <html>/<body>/<script>/<style>, no inline styles.",
    "Include 2-4 internal links to relevant service pages (relative URLs from 'services'), plus /contact for booking.",
    "Mention local areas (service_areas) and local context naturally (Kerala humidity, monsoon, coastal salt air, power fluctuations) where relevant.",
    "End with a short call to action to book EssenTechs service. Don't repeat the phone number more than once; the page template already adds a 'Call Now' block.",
    "Safety tips must be correct; tell readers to call a technician for gas, electrical or compressor work.",
    "meta_title: at most 60 characters. meta_description: 140-160 characters. short_description: 1-2 sentences for the blog card.",
    "Never invent prices, warranties, certifications, reviews or statistics. If you mention cost, keep it general.",
    "Check list_blogs first so you don't write a duplicate topic.",
  ],
  ad_landing_pages: {
    what: "Google Ads landing pages served at https://essentechs.com/{slug}. Published pages also appear automatically in the site navbar and footer.",
    sections: "Hero (badge, title, subtitle, image, CTA button) -> brands marquee -> trust badges -> service card (badge, title, description, features, image) -> WhatsApp booking modal (service + problem dropdowns) -> floating WhatsApp/call button.",
    guidelines: [
      "One service per page (e.g. AC repair, washing machine repair) and optionally one area. Keep the message tightly matched to the ad keyword.",
      "slug: short, lowercase, keyword-based, e.g. 'ac-repair-kakkanad'. It must not clash with existing site pages.",
      "hero_title: under 60 chars, includes the service (+ area). hero_subtitle: 1-2 sentences of benefits.",
      "primary_cta_text / modal_title: action-oriented, e.g. 'Book AC Service'.",
      "brands_list: comma-separated brands relevant to THIS appliance.",
      "trust_badges: 3-4 short items with Bootstrap icons, e.g. {text:'Experienced technicians', icon:'bi bi-gear-wide-connected'}. Only claim things the business actually offers; ask the user if unsure (e.g. arrival time, warranty).",
      "card_features, service_options, problem_options: one item per line. service_options and problem_options MUST match the appliance; the defaults are for washing machines.",
      "whatsapp_custom_message: e.g. 'Hello Essen Techs, I want to book AC Repair Service.'",
      "Fill SEO: focus_keyword, meta_title (<=60 chars), meta_description (140-160 chars), meta_keywords.",
      "Never invent prices, discounts, ratings or guarantees. Tracking scripts / custom CSS can only be added in the admin panel.",
      "Create as draft, show the user the admin_preview_url, and publish only after approval.",
    ],
  },
};

// ---------------------------------------------------------------------------
// HTTP helper
// ---------------------------------------------------------------------------
async function api(method, pathPart, body) {
  if (!TOKEN) {
    throw new Error("ESSENTECHS_API_TOKEN is not set. Add it to the MCP server env (same value as BLOG_API_TOKEN on the website).");
  }
  const res = await fetch(`${API}${pathPart}`, {
    method,
    headers: {
      Authorization: `Bearer ${TOKEN}`,
      Accept: "application/json",
      ...(body ? { "Content-Type": "application/json" } : {}),
    },
    body: body ? JSON.stringify(body) : undefined,
  });
  const text = await res.text();
  let json;
  try {
    json = text ? JSON.parse(text) : {};
  } catch {
    throw new Error(`HTTP ${res.status} from ${pathPart}: non-JSON response (${text.slice(0, 200)})`);
  }
  if (!res.ok) {
    const details = json.errors ? ` ${JSON.stringify(json.errors)}` : "";
    throw new Error(`HTTP ${res.status}: ${json.message || "Request failed"}${details}`);
  }
  return json;
}

async function loadImage(imagePath, imageUrl) {
  let buf;
  let name;
  if (imagePath) {
    buf = await readFile(imagePath);
    name = path.basename(imagePath);
  } else if (imageUrl) {
    const u = new URL(imageUrl);
    if (u.protocol !== "https:" && u.protocol !== "http:") throw new Error("image_url must be http(s)");
    const res = await fetch(u);
    if (!res.ok) throw new Error(`Could not download image: HTTP ${res.status}`);
    buf = Buffer.from(await res.arrayBuffer());
    name = path.basename(u.pathname) || "image";
  } else {
    return null;
  }
  if (buf.length > MAX_IMAGE_BYTES) throw new Error("Image is larger than 5MB.");
  return { image_base64: buf.toString("base64"), image_filename: name };
}

const ok = (data) => ({ content: [{ type: "text", text: JSON.stringify(data, null, 2) }] });
const fail = (err) => ({ isError: true, content: [{ type: "text", text: `Error: ${err.message || err}` }] });
const wrap = (fn) => async (args) => {
  try {
    return ok(await fn(args));
  } catch (e) {
    return fail(e);
  }
};

// ---------------------------------------------------------------------------
// Server
// ---------------------------------------------------------------------------
function buildServer() {
const server = new McpServer({ name: "essentechs-blog", version: "1.1.0" });

const seoArgs = {
  category: z.enum(["general", "ac", "microwave", "refrigerator", "washing-machine", "water-purifier"]).optional(),
  schema_type: z.enum(["Article", "TechArticle", "HowTo", "BlogPosting"]).optional(),
  focus_keyword: z.string().max(255).optional().describe("Main SEO keyword, e.g. 'ac repair kochi'"),
  secondary_keywords: z.string().max(2000).optional().describe("Comma-separated related keywords"),
  tags: z.string().max(255).optional().describe("Comma-separated tags"),
  image_alt: z.string().max(255).optional().describe("Alt text for the featured image"),
  author_name: z.string().max(150).optional().describe("Defaults to 'EssenTechs Technical Team'"),
  og_title: z.string().max(255).optional().describe("Social share title (defaults to meta title)"),
  og_description: z.string().max(1000).optional(),
  canonical_url: z.string().url().max(255).optional().describe("Only set if the canonical differs from the blog URL"),
  is_featured: z.boolean().optional().describe("Highlight on the blog page"),
};

const imageArgs = {
  featured_image_path: z.string().optional().describe("Absolute path to a local JPG/PNG/GIF/WebP image (max 5MB)"),
  featured_image_url: z.string().url().optional().describe("Public http(s) URL of an image to download and use (max 5MB). Only use images you have the rights to."),
};

server.registerTool(
  "get_site_context",
  {
    title: "Get EssenTechs site context",
    description: "Business info, services, internal links, brands and writing guidelines. Call this before writing a blog post.",
    inputSchema: {},
  },
  wrap(async () => SITE_CONTEXT)
);

server.registerTool(
  "list_blogs",
  {
    title: "List blog posts",
    description: "List existing blog posts (newest first). Use to avoid duplicate topics or find a post's id.",
    inputSchema: {
      q: z.string().optional().describe("Search in title/slug"),
      status: z.enum(["draft", "published", "archived"]).optional(),
      page: z.number().int().min(1).optional(),
      per_page: z.number().int().min(1).max(100).optional(),
    },
  },
  wrap(async ({ q, status, page, per_page }) => {
    const p = new URLSearchParams();
    if (q) p.set("q", q);
    if (status) p.set("status", status);
    if (page) p.set("page", String(page));
    if (per_page) p.set("per_page", String(per_page));
    return api("GET", `/blogs?${p}`);
  })
);

server.registerTool(
  "get_blog",
  {
    title: "Get blog post",
    description: "Get one blog post including full HTML content and SEO fields.",
    inputSchema: { id: z.number().int() },
  },
  wrap(async ({ id }) => api("GET", `/blogs/${id}`))
);

server.registerTool(
  "create_blog_draft",
  {
    title: "Create blog draft",
    description:
      "Create a new blog post as a DRAFT (not visible on the public site). Write the full article yourself following get_site_context guidelines. Review it with the user, then call publish_blog.",
    inputSchema: {
      title: z.string().min(5).max(500),
      content_html: z.string().min(200).describe("Article body as clean HTML (h2/h3/p/ul/ol/li/strong/a). No h1."),
      short_description: z.string().max(2000).optional().describe("1-2 sentence summary for the blog listing card"),
      meta_title: z.string().max(255).optional().describe("SEO title, at most 60 chars"),
      meta_description: z.string().max(1000).optional().describe("SEO description, 140-160 chars"),
      slug: z.string().max(255).optional().describe("URL slug; generated from title if omitted"),
      ...seoArgs,
      ...imageArgs,
    },
  },
  wrap(async ({ content_html, featured_image_path, featured_image_url, ...fields }) => {
    const image = await loadImage(featured_image_path, featured_image_url);
    const res = await api("POST", "/blogs", {
      ...fields,
      content: content_html,
      status: "draft",
      ...(image || {}),
    });
    return {
      ...res,
      note: "Saved as draft. It is not visible publicly until publish_blog is called." +
        (image ? "" : " No featured image yet: add one with set_featured_image or in the admin panel before publishing."),
      admin_edit_url: `${BASE_URL}/admin/blogs/${res.data.id}/edit`,
    };
  })
);

server.registerTool(
  "update_blog",
  {
    title: "Update blog post",
    description: "Update fields of an existing blog post. Only the fields you pass are changed. Does not change status (use publish_blog / unpublish_blog).",
    inputSchema: {
      id: z.number().int(),
      title: z.string().min(5).max(500).optional(),
      content_html: z.string().min(200).optional(),
      short_description: z.string().max(2000).optional(),
      meta_title: z.string().max(255).optional(),
      meta_description: z.string().max(1000).optional(),
      slug: z.string().max(255).optional().describe("Changing the slug changes the public URL; avoid on published posts"),
      ...seoArgs,
    },
  },
  wrap(async ({ id, content_html, ...rest }) => {
    const body = Object.fromEntries(Object.entries({ ...rest, content: content_html }).filter(([, v]) => v !== undefined));
    if (Object.keys(body).length === 0) throw new Error("Nothing to update.");
    return api("PATCH", `/blogs/${id}`, body);
  })
);

server.registerTool(
  "set_featured_image",
  {
    title: "Set featured image",
    description: "Upload and set the featured image of a blog post from a local file path or an image URL.",
    inputSchema: { id: z.number().int(), ...imageArgs },
  },
  wrap(async ({ id, featured_image_path, featured_image_url }) => {
    const image = await loadImage(featured_image_path, featured_image_url);
    if (!image) throw new Error("Provide featured_image_path or featured_image_url.");
    return api("PATCH", `/blogs/${id}`, image);
  })
);

server.registerTool(
  "publish_blog",
  {
    title: "Publish blog post",
    description: "Make a blog post live on essentechs.com. Only call after the user has reviewed and approved the post.",
    inputSchema: { id: z.number().int() },
    annotations: { destructiveHint: false, openWorldHint: true },
  },
  wrap(async ({ id }) => {
    const res = await api("PATCH", `/blogs/${id}`, { status: "published" });
    return { ...res, live_url: res.data.public_url };
  })
);

server.registerTool(
  "unpublish_blog",
  {
    title: "Unpublish blog post",
    description: "Take a blog post off the public site by setting it back to draft, or to archived.",
    inputSchema: { id: z.number().int(), status: z.enum(["draft", "archived"]).default("draft") },
  },
  wrap(async ({ id, status }) => api("PATCH", `/blogs/${id}`, { status }))
);

server.registerPrompt(
  "write_blog_post",
  {
    title: "Write an EssenTechs blog post",
    description: "Research and draft an SEO blog post for essentechs.com",
    argsSchema: {
      topic: z.string().describe("Topic, e.g. 'Why your AC leaks water during Kerala monsoon'"),
      keywords: z.string().optional().describe("Comma-separated target keywords"),
    },
  },
  ({ topic, keywords }) => ({
    messages: [
      {
        role: "user",
        content: {
          type: "text",
          text:
            `Write a blog post for essentechs.com about: "${topic}".` +
            (keywords ? ` Target keywords: ${keywords}.` : "") +
            `\n\nSteps:\n1. Call get_site_context and follow its writing_guidelines.\n` +
            `2. Call list_blogs with a relevant search to make sure this isn't a duplicate.\n` +
            `3. Write the full article (title, HTML content, short_description, meta_title, meta_description).\n` +
            `4. Save it with create_blog_draft.\n` +
            `5. Show me the title, meta fields and a summary and wait for my approval before calling publish_blog.`,
        },
      },
    ],
  })
);


  // -------------------------------------------------------------------------
  // Ad Landing Pages
  // -------------------------------------------------------------------------
  const hex = z.string().regex(/^#[0-9a-fA-F]{3,8}$/);
  const adFields = {
    title: z.string().max(255).optional().describe("Internal name, e.g. 'Google Ads - AC Repair Kakkanad'"),
    slug: z.string().max(255).optional().describe("Public URL path: essentechs.com/{slug}. Generated from title if omitted on create."),
    theme_color: hex.optional().describe("Accent colour, default #FF800F"),
    hero_badge: z.string().max(255).optional(),
    hero_title: z.string().max(255).optional(),
    hero_subtitle: z.string().max(2000).optional(),
    hero_image_alt: z.string().max(255).optional(),
    primary_cta_text: z.string().max(100).optional(),
    primary_phone: z.string().max(50).optional().describe("Default +91 97467 00889"),
    whatsapp_number: z.string().regex(/^[0-9]+$/).max(20).optional().describe("Digits only with country code, default 919746700889"),
    show_brands: z.boolean().optional(),
    brands_heading: z.string().max(100).optional(),
    brands_list: z.string().max(2000).optional().describe("Comma-separated brand names"),
    brands_bg_color: hex.optional(),
    brands_text_color: hex.optional(),
    show_trust_badges: z.boolean().optional(),
    trust_badges: z
      .array(z.object({ text: z.string().max(120), icon: z.string().regex(/^bi bi-[a-z0-9-]+$/).optional() }))
      .max(8)
      .optional()
      .describe("Replaces all badges. icon is a Bootstrap Icons class, e.g. 'bi bi-shield-check'"),
    show_service_card: z.boolean().optional(),
    card_badge: z.string().max(100).optional(),
    card_title: z.string().max(255).optional(),
    card_description: z.string().max(2000).optional(),
    card_image_alt: z.string().max(255).optional(),
    card_features: z.string().max(2000).optional().describe("One feature per line"),
    card_learn_more_text: z.string().max(100).optional(),
    card_learn_more_link: z.string().max(255).optional().describe("e.g. /ac-service-repair-kochi"),
    card_book_now_text: z.string().max(100).optional(),
    modal_title: z.string().max(255).optional(),
    modal_subtitle: z.string().max(255).optional(),
    service_options: z.string().max(2000).optional().describe("Booking form service dropdown, one per line"),
    problem_options: z.string().max(2000).optional().describe("Booking form problem dropdown, one per line"),
    whatsapp_custom_message: z.string().max(500).optional(),
    show_floating_button: z.boolean().optional(),
    floating_button_type: z.enum(["whatsapp", "call", "both"]).optional(),
    focus_keyword: z.string().max(255).optional(),
    meta_title: z.string().max(255).optional(),
    meta_description: z.string().max(1000).optional(),
    meta_keywords: z.string().max(1000).optional(),
    canonical_url: z.string().url().max(255).optional(),
    robots: z.string().max(255).optional(),
    og_title: z.string().max(255).optional(),
    og_description: z.string().max(1000).optional(),
    twitter_title: z.string().max(255).optional(),
    twitter_description: z.string().max(1000).optional(),
    twitter_card: z.enum(["summary", "summary_large_image"]).optional(),
    schema_type: z.enum(["Service", "LocalBusiness"]).optional(),
  };

  const withAdLinks = (res) => ({
    ...res,
    preview_note: "Open admin_preview_url while logged in to the admin panel to preview a draft.",
  });

  server.registerTool(
    "list_ad_pages",
    {
      title: "List ad landing pages",
      description: "List Google Ads landing pages (newest first) with their public and admin URLs.",
      inputSchema: { q: z.string().optional(), status: z.enum(["published", "draft"]).optional() },
    },
    wrap(async ({ q, status }) => {
      const p = new URLSearchParams();
      if (q) p.set("q", q);
      if (status) p.set("status", status);
      return api("GET", `/ad-pages?${p}`);
    })
  );

  server.registerTool(
    "get_ad_page",
    {
      title: "Get ad landing page",
      description: "Get all editable fields of one ad landing page.",
      inputSchema: { id: z.number().int() },
    },
    wrap(async ({ id }) => api("GET", `/ad-pages/${id}`))
  );

  server.registerTool(
    "create_ad_page_draft",
    {
      title: "Create ad landing page (draft)",
      description:
        "Create a new Google Ads landing page as a DRAFT. Read get_site_context.ad_landing_pages first. Fill hero, brands, trust badges, service card, booking options and SEO for the specific appliance. Unset fields use washing-machine defaults, so set them all for other appliances.",
      inputSchema: {
        ...adFields,
        title: z.string().max(255),
        hero_title: z.string().max(255),
        hero_image_path: z.string().optional().describe("Absolute path to a local hero image (max 5MB)"),
        hero_image_url: z.string().url().optional().describe("Public hero image URL you have the rights to use"),
      },
    },
    wrap(async ({ hero_image_path, hero_image_url, ...fields }) => {
      const img = await loadImage(hero_image_path, hero_image_url);
      const body = { ...fields, status: "draft" };
      if (img) {
        body.hero_image_base64 = img.image_base64;
        body.image_filename = img.image_filename;
      }
      return withAdLinks(await api("POST", "/ad-pages", body));
    })
  );

  server.registerTool(
    "update_ad_page",
    {
      title: "Update ad landing page",
      description: "Change fields of an ad landing page. Only passed fields change. Status is changed with publish_ad_page / unpublish_ad_page.",
      inputSchema: { id: z.number().int(), ...adFields },
    },
    wrap(async ({ id, ...fields }) => {
      const body = Object.fromEntries(Object.entries(fields).filter(([, v]) => v !== undefined));
      if (Object.keys(body).length === 0) throw new Error("Nothing to update.");
      return withAdLinks(await api("PATCH", `/ad-pages/${id}`, body));
    })
  );

  server.registerTool(
    "set_ad_page_image",
    {
      title: "Set ad landing page image",
      description: "Upload the hero image, service card image, or social share (og) image of an ad landing page.",
      inputSchema: {
        id: z.number().int(),
        which: z.enum(["hero", "card", "og"]),
        image_path: z.string().optional().describe("Absolute path to a local JPG/PNG/GIF/WebP (max 5MB)"),
        image_url: z.string().url().optional().describe("Public http(s) image URL you have the rights to use"),
      },
    },
    wrap(async ({ id, which, image_path, image_url }) => {
      const img = await loadImage(image_path, image_url);
      if (!img) throw new Error("Provide image_path or image_url.");
      return api("PATCH", `/ad-pages/${id}`, { [`${which}_image_base64`]: img.image_base64, image_filename: img.image_filename });
    })
  );

  server.registerTool(
    "duplicate_ad_page",
    {
      title: "Duplicate ad landing page",
      description: "Copy an existing ad landing page as a new draft (fastest way to make a similar page for another area or service), then edit it with update_ad_page.",
      inputSchema: { id: z.number().int(), title: z.string().max(255).optional(), slug: z.string().max(255).optional() },
    },
    wrap(async ({ id, title, slug }) => withAdLinks(await api("POST", `/ad-pages/${id}/duplicate`, { title, slug })))
  );

  server.registerTool(
    "publish_ad_page",
    {
      title: "Publish ad landing page",
      description: "Make an ad landing page live at essentechs.com/{slug} (it also appears in the navbar/footer). Only after the user approved it.",
      inputSchema: { id: z.number().int() },
      annotations: { destructiveHint: false, openWorldHint: true },
    },
    wrap(async ({ id }) => {
      const res = await api("PATCH", `/ad-pages/${id}`, { status: "published" });
      return { ...res, live_url: res.data.public_url };
    })
  );

  server.registerTool(
    "unpublish_ad_page",
    {
      title: "Unpublish ad landing page",
      description: "Take an ad landing page offline (set to draft). Warning: Google Ads still pointing to it will land on a 404.",
      inputSchema: { id: z.number().int() },
    },
    wrap(async ({ id }) => api("PATCH", `/ad-pages/${id}`, { status: "draft" }))
  );

  server.registerPrompt(
    "create_ad_landing_page",
    {
      title: "Create a Google Ads landing page",
      description: "Draft a conversion-focused ad landing page for one service (and optional area)",
      argsSchema: {
        service: z.string().describe("e.g. 'AC repair', 'Refrigerator repair'"),
        area: z.string().optional().describe("e.g. 'Kakkanad'"),
        keyword: z.string().optional().describe("Main Google Ads keyword"),
      },
    },
    ({ service, area, keyword }) => ({
      messages: [
        {
          role: "user",
          content: {
            type: "text",
            text:
              `Create a Google Ads landing page for "${service}"${area ? ` in ${area}` : ""}.` +
              (keyword ? ` Main keyword: ${keyword}.` : "") +
              `\n\nSteps:\n1. Call get_site_context and follow ad_landing_pages.guidelines.\n` +
              `2. Call list_ad_pages to check for an existing page for this service/area (duplicate_ad_page it if one is close).\n` +
              `3. Create it with create_ad_page_draft, filling every section for this appliance.\n` +
              `4. Show me the slug, hero text, trust badges, SEO fields and the admin_preview_url, and wait for my approval before publish_ad_page.`,
          },
        },
      ],
    })
  );

return server;
}

// ---------------------------------------------------------------------------
// Transports
// ---------------------------------------------------------------------------
function keyMatches(given, expected) {
  const a = Buffer.from(given || "");
  const b = Buffer.from(expected);
  return a.length === b.length && timingSafeEqual(a, b);
}

async function startHttp() {
  const port = Number(process.env.MCP_HTTP_PORT || 3333);
  const key = process.env.MCP_ACCESS_KEY || "";
  if (key.length < 24) {
    console.error("MCP_ACCESS_KEY must be set (min 24 chars) in --http mode.");
    process.exit(1);
  }

  const httpServer = http.createServer(async (req, res) => {
    const url = new URL(req.url, "http://localhost");
    const json = (status, obj) => {
      res.writeHead(status, { "Content-Type": "application/json" });
      res.end(JSON.stringify(obj));
    };

    if (url.pathname === "/" || url.pathname === "/health") {
      return json(200, { name: "essentechs-blog MCP", status: "ok" });
    }

    const pathKey = url.pathname.startsWith("/mcp/") ? decodeURIComponent(url.pathname.slice(5)) : null;
    const bearer = (req.headers.authorization || "").replace(/^Bearer\s+/i, "");
    const authorized =
      (pathKey !== null && keyMatches(pathKey, key)) || (url.pathname === "/mcp" && keyMatches(bearer, key));
    if (!authorized) {
      console.error(`[http] 401 ${req.method} ${url.pathname.slice(0, 8)}…`);
      return json(401, { error: "Unauthorized" });
    }

    if (req.method !== "POST") {
      // Stateless server: no SSE stream / session to resume.
      res.writeHead(405, { Allow: "POST" });
      return res.end();
    }

    let body = "";
    for await (const chunk of req) {
      body += chunk;
      if (body.length > 15 * 1024 * 1024) return json(413, { error: "Request too large" });
    }

    let parsed;
    try {
      parsed = JSON.parse(body);
    } catch {
      return json(400, { jsonrpc: "2.0", error: { code: -32700, message: "Parse error" }, id: null });
    }

    const server = buildServer();
    const transport = new StreamableHTTPServerTransport({ sessionIdGenerator: undefined, enableJsonResponse: true });
    res.on("close", () => {
      transport.close();
      server.close();
    });
    try {
      await server.connect(transport);
      await transport.handleRequest(req, res, parsed);
    } catch (e) {
      console.error("[http] error", e);
      if (!res.headersSent) json(500, { jsonrpc: "2.0", error: { code: -32603, message: "Internal error" }, id: null });
    }
  });

  httpServer.listen(port, () => {
    console.error(`essentechs-blog MCP (HTTP) on http://localhost:${port}/mcp/<MCP_ACCESS_KEY> → ${API}`);
  });
}

if (process.argv.includes("--http")) {
  await startHttp();
} else {
  await buildServer().connect(new StdioServerTransport());
  console.error(`essentechs-blog MCP running → ${API}`);
}
