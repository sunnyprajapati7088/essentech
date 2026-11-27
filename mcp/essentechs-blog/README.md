# EssenTechs Blog MCP

An MCP server that lets Claude research, write and manage blog posts on essentechs.com.
Claude writes each article itself and saves it through this server as a **draft**. Nothing goes live until you approve it and `publish_blog` is called.

## Tools
| Tool | What it does |
|---|---|
| `get_site_context` | Services, internal links, brands, area and writing guidelines |
| `list_blogs` / `get_blog` | Browse existing posts (to avoid duplicates) |
| `create_blog_draft` | Save a new post as a draft (optional featured image from a file path or URL) |
| `update_blog` | Edit title, content, SEO fields or slug |
| `set_featured_image` | Upload a featured image |
| `publish_blog` / `unpublish_blog` | Make a post live, or take it down (draft/archived) |

Prompt: `write_blog_post(topic, keywords)` runs the full research → draft → review flow.
There is no delete tool on purpose. Delete posts from the admin panel.

## Setup

### 1. Website (server where essentechs.com runs)
Deploy the Laravel changes, then add to the site's `.env`:
```
BLOG_API_TOKEN=<64-char random string>   # php -r "echo bin2hex(random_bytes(32));"
BLOG_API_USER_ID=1                        # admin user that AI posts are attributed to (optional)
```
Then run `php artisan config:clear` (and `php artisan storage:link` if `public/storage` doesn't exist).

### 2. Your computer
```
cd mcp/essentechs-blog && npm install
setx ESSENTECHS_API_TOKEN "<same token>"
```
Restart Claude. The server is registered in the project `.mcp.json` as `essentechs-blog`.
To test against a local site, also set `ESSENTECHS_API_URL=http://127.0.0.1:8000`.

## Remote mode (any AI app by URL, via ngrok)
The server can also run over HTTP so web AI apps can connect by URL:
```
node --env-file=.env.local server.js --http     # listens on MCP_HTTP_PORT (3333)
ngrok http 3333
```
Or run `./start-remote.ps1` to start the local site, the MCP and ngrok, and print the URL.
Connect URL: `https://<ngrok-domain>/mcp/<MCP_ACCESS_KEY>`. The key in the URL is the password, so don't share it.
Only the MCP server is exposed; the Laravel site stays on 127.0.0.1.

`.env.local` (git-ignored):
```
ESSENTECHS_API_URL=http://127.0.0.1:8000      # or https://essentechs.com
ESSENTECHS_API_TOKEN=<BLOG_API_TOKEN of that site>
MCP_ACCESS_KEY=<random 48 chars>
MCP_HTTP_PORT=3333
```

## API (Laravel)
`/api/blog-automation/blogs` (GET list, POST create), `/api/blog-automation/blogs/{id}` (GET, PATCH).
Auth: `Authorization: Bearer <BLOG_API_TOKEN>`. Rate limit: 60 requests/min.
