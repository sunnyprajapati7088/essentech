<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Concerns\StoresBase64Images;
use App\Http\Controllers\Controller;
use App\Models\AdLandingPage;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/**
 * JSON API for Ad Landing Pages (consumed by the EssenTechs MCP server).
 * Protected by VerifyBlogApiToken. Script/CSS/custom-schema fields are
 * deliberately NOT writable here: they render raw on the page, so they
 * stay admin-panel only.
 */
class AdLandingPageApiController extends Controller
{
    use StoresBase64Images;

    private const IMAGE_DIR = 'landing_pages';
    private const IMAGE_FIELDS = ['hero_image', 'card_image', 'og_image'];

    /** Fields that are NOT NULL in the DB (have defaults): never write null to them. */
    private const NOT_NULL = [
        'title', 'slug', 'status', 'theme_color', 'hero_badge', 'hero_title', 'primary_cta_text', 'primary_phone',
        'whatsapp_number', 'show_brands', 'brands_heading', 'brands_bg_color', 'brands_text_color',
        'show_trust_badges', 'show_service_card', 'card_badge', 'card_title', 'card_learn_more_text',
        'card_book_now_text', 'modal_title', 'modal_subtitle', 'show_floating_button', 'floating_button_type',
        'robots', 'og_type', 'twitter_card', 'schema_type',
    ];

    // GET /api/blog-automation/ad-pages
    public function index(Request $request): JsonResponse
    {
        $request->validate([
            'q' => 'nullable|string|max:200',
            'status' => 'nullable|in:published,draft',
        ]);
        $q = $request->input('q');

        $pages = AdLandingPage::query()
            ->when($q, fn ($query) => $query->where(fn ($w) => $w
                ->where('title', 'like', "%{$q}%")
                ->orWhere('slug', 'like', "%{$q}%")
                ->orWhere('hero_title', 'like', "%{$q}%")))
            ->when($request->input('status'), fn ($query, $s) => $query->where('status', $s))
            ->orderByDesc('id')
            ->get();

        return response()->json(['data' => $pages->map(fn ($p) => $this->summary($p))]);
    }

    // GET /api/blog-automation/ad-pages/{id}
    public function show(int $id): JsonResponse
    {
        return response()->json(['data' => $this->full(AdLandingPage::findOrFail($id))]);
    }

    // POST /api/blog-automation/ad-pages
    public function store(Request $request): JsonResponse
    {
        $data = $request->validate($this->rules(false));

        $page = new AdLandingPage();
        $page->fill($this->writable($data));
        $page->slug = $this->checkedSlug($data['slug'] ?? $data['title']);
        $page->status = $data['status'] ?? 'draft';
        $this->applyImages($page, $data);
        $page->save();

        return response()->json(['data' => $this->full($page->fresh())], 201);
    }

    // PATCH /api/blog-automation/ad-pages/{id}
    public function update(Request $request, int $id): JsonResponse
    {
        $page = AdLandingPage::findOrFail($id);
        $data = $request->validate($this->rules(true));

        $page->fill($this->writable($data));
        if (array_key_exists('slug', $data)) {
            $page->slug = $this->checkedSlug($data['slug'], $page->id);
        }
        $this->applyImages($page, $data);
        $page->save();

        return response()->json(['data' => $this->full($page->fresh())]);
    }

    // POST /api/blog-automation/ad-pages/{id}/duplicate
    public function duplicate(Request $request, int $id): JsonResponse
    {
        $data = $request->validate([
            'title' => 'nullable|string|max:255',
            'slug' => 'nullable|string|max:255',
        ]);
        $source = AdLandingPage::findOrFail($id);

        $clone = $source->replicate();
        $clone->title = $data['title'] ?? ($source->title . ' (Copy)');
        $clone->slug = $this->checkedSlug($data['slug'] ?? ($source->slug . '-copy'), null, true);
        $clone->status = 'draft';
        $clone->save();

        return response()->json(['data' => $this->full($clone->fresh())], 201);
    }

    // ---------------------------------------------------------------------

    private function rules(bool $update): array
    {
        $req = $update ? 'sometimes|required' : 'required';
        $opt = $update ? 'sometimes|nullable' : 'nullable';
        $color = 'regex:/^#[0-9a-fA-F]{3,8}$/';

        return [
            'title' => "$req|string|max:255",
            'slug' => "$opt|string|max:255",
            'status' => "$opt|in:published,draft",
            'theme_color' => "$opt|string|$color",
            // Hero
            'hero_badge' => "$opt|string|max:255",
            'hero_title' => "$req|string|max:255",
            'hero_subtitle' => "$opt|string|max:2000",
            'hero_image_alt' => "$opt|string|max:255",
            'primary_cta_text' => "$opt|string|max:100",
            'primary_phone' => "$opt|string|max:50|regex:/^[0-9+\\s()-]+$/",
            'whatsapp_number' => "$opt|string|max:20|regex:/^[0-9]+$/",
            // Brands
            'show_brands' => "$opt|boolean",
            'brands_heading' => "$opt|string|max:100",
            'brands_list' => "$opt|string|max:2000",
            'brands_bg_color' => "$opt|string|$color",
            'brands_text_color' => "$opt|string|$color",
            // Trust badges
            'show_trust_badges' => "$opt|boolean",
            'trust_badges' => "$opt|array|max:8",
            'trust_badges.*.text' => 'required|string|max:120',
            'trust_badges.*.icon' => ['nullable', 'string', 'max:60', 'regex:/^bi bi-[a-z0-9-]+$/'],
            // Service card
            'show_service_card' => "$opt|boolean",
            'card_badge' => "$opt|string|max:100",
            'card_title' => "$opt|string|max:255",
            'card_description' => "$opt|string|max:2000",
            'card_image_alt' => "$opt|string|max:255",
            'card_features' => "$opt|string|max:2000",
            'card_learn_more_text' => "$opt|string|max:100",
            'card_learn_more_link' => "$opt|string|max:255",
            'card_book_now_text' => "$opt|string|max:100",
            // Booking modal
            'modal_title' => "$opt|string|max:255",
            'modal_subtitle' => "$opt|string|max:255",
            'service_options' => "$opt|string|max:2000",
            'problem_options' => "$opt|string|max:2000",
            'whatsapp_custom_message' => "$opt|string|max:500",
            // Floating button
            'show_floating_button' => "$opt|boolean",
            'floating_button_type' => "$opt|in:whatsapp,call,both",
            // SEO
            'focus_keyword' => "$opt|string|max:255",
            'meta_title' => "$opt|string|max:255",
            'meta_description' => "$opt|string|max:1000",
            'meta_keywords' => "$opt|string|max:1000",
            'canonical_url' => "$opt|url|max:255",
            'robots' => "$opt|string|max:255",
            'og_title' => "$opt|string|max:255",
            'og_description' => "$opt|string|max:1000",
            'og_type' => "$opt|string|max:50",
            'twitter_title' => "$opt|string|max:255",
            'twitter_description' => "$opt|string|max:1000",
            'twitter_card' => "$opt|in:summary,summary_large_image",
            'schema_type' => "$opt|in:Service,LocalBusiness",
            // Images (base64 from the MCP server)
            'hero_image_base64' => 'nullable|string',
            'card_image_base64' => 'nullable|string',
            'og_image_base64' => 'nullable|string',
            'image_filename' => 'nullable|string|max:200',
        ];
    }

    /** Only model fields, minus nulls for NOT NULL columns (so DB defaults apply). */
    private function writable(array $data): array
    {
        $fields = collect($data)
            ->except(['slug', 'hero_image_base64', 'card_image_base64', 'og_image_base64', 'image_filename'])
            ->only((new AdLandingPage())->getFillable())
            ->except(['header_scripts', 'body_scripts', 'custom_css', 'custom_schema', ...self::IMAGE_FIELDS])
            ->reject(fn ($v, $k) => $v === null && in_array($k, self::NOT_NULL, true));

        if ($fields->has('trust_badges')) {
            $fields['trust_badges'] = collect($fields['trust_badges'] ?? [])
                ->map(fn ($b) => ['text' => trim($b['text']), 'icon' => $b['icon'] ?? 'bi bi-check-circle-fill'])
                ->values()->all();
        }

        return $fields->all();
    }

    private function applyImages(AdLandingPage $page, array $data): void
    {
        foreach (self::IMAGE_FIELDS as $field) {
            if (! empty($data[$field . '_base64'])) {
                $old = $page->{$field};
                $page->{$field} = $this->storeBase64Image(
                    $data[$field . '_base64'],
                    ($data['image_filename'] ?? $page->slug ?? 'ad') . '-' . $field,
                    self::IMAGE_DIR
                );
                $this->deletePublicFile($old);
            }
        }
    }

    /**
     * Landing pages are served from the catch-all /{slug} route, so a slug that matches
     * an existing site path (e.g. "blog", "contact") would never be reachable.
     */
    private function checkedSlug(string $source, ?int $ignoreId = null, bool $autoSuffix = false): string
    {
        $slug = Str::slug($source);
        abort_if($slug === '', 422, 'Slug is empty.');

        $reserved = collect(Route::getRoutes()->getRoutes())
            ->map(fn ($r) => explode('/', trim($r->uri(), '/'))[0])
            ->filter(fn ($seg) => $seg !== '' && ! str_contains($seg, '{'))
            ->unique()->all();
        abort_if(in_array($slug, $reserved, true), 422, "Slug '{$slug}' is already used by another page on the site. Choose a different slug.");

        $exists = fn ($s) => AdLandingPage::where('slug', $s)
            ->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))
            ->exists();

        if ($autoSuffix) {
            $base = $slug;
            for ($i = 1; $exists($slug); $i++) {
                $slug = $base . '-' . $i;
            }
        } else {
            abort_if($exists($slug), 422, "An ad landing page with slug '{$slug}' already exists.");
        }

        return $slug;
    }

    private function summary(AdLandingPage $p): array
    {
        return [
            'id' => $p->id,
            'title' => $p->title,
            'slug' => $p->slug,
            'status' => $p->status,
            'hero_title' => $p->hero_title,
            'public_url' => url($p->slug),
            'admin_edit_url' => route('admin.landing-pages.edit', $p->id),
            'admin_preview_url' => route('admin.landing-pages.preview', $p->id),
            'updated_at' => optional($p->updated_at)->toIso8601String(),
        ];
    }

    private function full(AdLandingPage $p): array
    {
        $data = collect($p->only($p->getFillable()))
            ->except(['header_scripts', 'body_scripts', 'custom_css', 'custom_schema'])
            ->all();

        return $this->summary($p) + $data + [
            'hero_image_url' => $p->hero_image_url,
            'card_image_url' => $p->card_image_url,
            'og_image_url' => $p->effective_og_image_url,
            'has_custom_scripts' => (bool) ($p->header_scripts || $p->body_scripts || $p->custom_css),
        ];
    }
}
