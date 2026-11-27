<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

/**
 * JSON API for blog automation (consumed by the EssenTechs MCP server).
 * All routes are protected by the VerifyBlogApiToken middleware.
 */
class BlogApiController extends Controller
{
    private const IMAGE_DIR = 'admin/blog/image';
    private const MAX_IMAGE_BYTES = 5 * 1024 * 1024;
    private const IMAGE_MIMES = ['image/jpeg' => 'jpg', 'image/png' => 'png', 'image/gif' => 'gif', 'image/webp' => 'webp'];
    public const CATEGORIES = ['general', 'ac', 'microwave', 'refrigerator', 'washing-machine', 'water-purifier'];
    public const SCHEMA_TYPES = ['Article', 'TechArticle', 'HowTo', 'BlogPosting'];

    /** Optional SEO fields (same as the admin blog form). */
    private function seoRules(bool $update): array
    {
        $s = $update ? 'sometimes|' : '';

        return [
            Blog::IMAGE_ALT => $s . 'nullable|string|max:255',
            Blog::CATEGORY => [...($update ? ['sometimes'] : []), 'nullable', Rule::in(self::CATEGORIES)],
            Blog::TAGS => $s . 'nullable|string|max:255',
            Blog::AUTHOR_NAME => $s . 'nullable|string|max:150',
            Blog::FOCUS_KEYWORD => $s . 'nullable|string|max:255',
            Blog::SECONDARY_KEYWORDS => $s . 'nullable|string|max:2000',
            Blog::CANONICAL_URL => $s . 'nullable|url|max:255',
            Blog::OG_TITLE => $s . 'nullable|string|max:255',
            Blog::OG_DESCRIPTION => $s . 'nullable|string|max:1000',
            Blog::SCHEMA_TYPE => [...($update ? ['sometimes'] : []), 'nullable', Rule::in(self::SCHEMA_TYPES)],
            Blog::IS_FEATURED => $s . 'nullable|boolean',
        ];
    }

    // GET /api/blog-automation/blogs?q=&status=&page=
    public function index(Request $request): JsonResponse
    {
        $request->validate([
            'q' => 'nullable|string|max:200',
            'status' => 'nullable|in:draft,published,archived',
            'per_page' => 'nullable|integer|min:1|max:100',
        ]);

        $q = $request->input('q');

        $blogs = Blog::query()
            ->when($q, fn ($query) => $query->where(fn ($w) => $w
                ->where(Blog::TITLE, 'like', "%{$q}%")
                ->orWhere(Blog::SLUG, 'like', "%{$q}%")))
            ->when($request->input('status'), fn ($query, $status) => $query->where(Blog::STATUS, $status))
            ->latest(Blog::CREATED_AT)
            ->paginate((int) $request->input('per_page', 20));

        return response()->json([
            'data' => $blogs->getCollection()->map(fn (Blog $b) => $this->summary($b)),
            'meta' => [
                'current_page' => $blogs->currentPage(),
                'last_page' => $blogs->lastPage(),
                'total' => $blogs->total(),
            ],
        ]);
    }

    // GET /api/blog-automation/blogs/{id}
    public function show(int $id): JsonResponse
    {
        $blog = Blog::findOrFail($id);

        return response()->json(['data' => $this->full($blog)]);
    }

    // POST /api/blog-automation/blogs
    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            Blog::TITLE => 'required|string|max:500',
            Blog::SLUG => 'nullable|string|max:255',
            Blog::SHORT_DESCRIPTION => 'nullable|string|max:2000',
            Blog::CONTENT => 'required|string',
            Blog::STATUS => 'nullable|in:draft,published,archived',
            Blog::PUBLISHED_AT => 'nullable|date',
            Blog::META_TITLE => 'nullable|string|max:255',
            Blog::META_DESCRIPTION => 'nullable|string|max:1000',
            'image_base64' => 'nullable|string',
            'image_filename' => 'nullable|string|max:200',
        ] + $this->seoRules(false));

        $authorId = $this->authorId();

        $blog = new Blog();
        $blog->fill($this->blogFields($data));
        $blog->{Blog::SLUG} = $this->uniqueSlug($data[Blog::SLUG] ?? $data[Blog::TITLE]);
        $blog->{Blog::STATUS} = $data[Blog::STATUS] ?? 'draft';
        $blog->{Blog::CATEGORY} = $data[Blog::CATEGORY] ?? 'general';
        $blog->{Blog::SCHEMA_TYPE} = $data[Blog::SCHEMA_TYPE] ?? 'Article';
        $blog->{Blog::AUTHOR_NAME} = $data[Blog::AUTHOR_NAME] ?? 'EssenTechs Technical Team';
        $blog->{Blog::CREATED_BY} = $authorId;
        $blog->{Blog::UPDATED_BY} = $authorId;

        if ($blog->{Blog::STATUS} === 'published' && empty($blog->{Blog::PUBLISHED_AT})) {
            $blog->{Blog::PUBLISHED_AT} = now();
        }

        if (! empty($data['image_base64'])) {
            $blog->{Blog::FEATURED_IMAGE} = $this->storeImage($data['image_base64'], $data['image_filename'] ?? $blog->{Blog::SLUG});
        }

        $blog->save();

        return response()->json(['data' => $this->full($blog)], 201);
    }

    // PATCH /api/blog-automation/blogs/{id}
    public function update(Request $request, int $id): JsonResponse
    {
        $blog = Blog::findOrFail($id);

        $data = $request->validate([
            Blog::TITLE => 'sometimes|required|string|max:500',
            Blog::SLUG => ['sometimes', 'required', 'string', 'max:255'],
            Blog::SHORT_DESCRIPTION => 'sometimes|nullable|string|max:2000',
            Blog::CONTENT => 'sometimes|required|string',
            Blog::STATUS => ['sometimes', 'required', Rule::in(['draft', 'published', 'archived'])],
            Blog::PUBLISHED_AT => 'sometimes|nullable|date',
            Blog::META_TITLE => 'sometimes|nullable|string|max:255',
            Blog::META_DESCRIPTION => 'sometimes|nullable|string|max:1000',
            'image_base64' => 'nullable|string',
            'image_filename' => 'nullable|string|max:200',
        ] + $this->seoRules(true));

        $blog->fill($this->blogFields($data));

        if (array_key_exists(Blog::SLUG, $data)) {
            $blog->{Blog::SLUG} = $this->uniqueSlug($data[Blog::SLUG], $blog->id);
        }

        if (($data[Blog::STATUS] ?? null) === 'published' && empty($blog->{Blog::PUBLISHED_AT})) {
            $blog->{Blog::PUBLISHED_AT} = now();
        }

        if (! empty($data['image_base64'])) {
            $old = $blog->{Blog::FEATURED_IMAGE};
            $blog->{Blog::FEATURED_IMAGE} = $this->storeImage($data['image_base64'], $data['image_filename'] ?? $blog->{Blog::SLUG});
            if ($old && Storage::disk('public')->exists($old)) {
                Storage::disk('public')->delete($old);
            }
        }

        $blog->{Blog::UPDATED_BY} = $this->authorId();
        $blog->save();

        return response()->json(['data' => $this->full($blog)]);
    }

    // ---------------------------------------------------------------------

    private function blogFields(array $data): array
    {
        return collect($data)->only([
            Blog::TITLE,
            Blog::SHORT_DESCRIPTION,
            Blog::CONTENT,
            Blog::STATUS,
            Blog::PUBLISHED_AT,
            Blog::META_TITLE,
            Blog::META_DESCRIPTION,
            Blog::IMAGE_ALT,
            Blog::CATEGORY,
            Blog::TAGS,
            Blog::AUTHOR_NAME,
            Blog::FOCUS_KEYWORD,
            Blog::SECONDARY_KEYWORDS,
            Blog::CANONICAL_URL,
            Blog::OG_TITLE,
            Blog::OG_DESCRIPTION,
            Blog::SCHEMA_TYPE,
            Blog::IS_FEATURED,
        ])->all();
    }

    private function authorId(): int
    {
        $configured = config('services.blog_api.user_id');
        if ($configured && User::whereKey($configured)->exists()) {
            return (int) $configured;
        }

        $first = User::query()->orderBy('id')->value('id');
        abort_if(! $first, 422, 'No admin user exists. Create one or set BLOG_API_USER_ID.');

        return (int) $first;
    }

    private function uniqueSlug(string $source, ?int $ignoreId = null): string
    {
        $base = Str::slug($source) ?: 'blog';
        $slug = $base;
        $i = 2;

        while (Blog::withTrashed()
            ->where(Blog::SLUG, $slug)
            ->when($ignoreId, fn ($q) => $q->where(Blog::ID, '!=', $ignoreId))
            ->exists()) {
            $slug = $base . '-' . $i++;
        }

        return $slug;
    }

    private function storeImage(string $base64, string $name): string
    {
        if (str_contains($base64, ',') && str_starts_with($base64, 'data:')) {
            $base64 = substr($base64, strpos($base64, ',') + 1);
        }

        $binary = base64_decode($base64, true);
        abort_if($binary === false, 422, 'image_base64 is not valid base64.');
        abort_if(strlen($binary) > self::MAX_IMAGE_BYTES, 422, 'Image is larger than 5MB.');

        $mime = (new \finfo(FILEINFO_MIME_TYPE))->buffer($binary);
        abort_unless(isset(self::IMAGE_MIMES[$mime]), 422, 'Image must be JPEG, PNG, GIF or WebP.');

        $filename = Str::slug(pathinfo($name, PATHINFO_FILENAME)) ?: 'blog';
        $filename .= '_' . (int) (microtime(true) * 10000) . '.' . self::IMAGE_MIMES[$mime];
        $path = self::IMAGE_DIR . '/' . $filename;

        Storage::disk('public')->put($path, $binary);

        return $path;
    }

    private function summary(Blog $b): array
    {
        return [
            'id' => $b->id,
            'title' => $b->title,
            'slug' => $b->slug,
            'status' => $b->status,
            'category' => $b->category,
            'short_description' => $b->short_description,
            'featured_image_url' => $b->featured_image ? asset('storage/' . $b->featured_image) : null,
            'published_at' => optional($b->published_at)->toIso8601String(),
            'created_at' => optional($b->created_at)->toIso8601String(),
            'public_url' => route('blog.details', $b->slug),
        ];
    }

    private function full(Blog $b): array
    {
        return $this->summary($b) + [
            'content' => $b->content,
            'meta_title' => $b->meta_title,
            'meta_description' => $b->meta_description,
            'image_alt' => $b->image_alt,
            'tags' => $b->tags,
            'author_name' => $b->author_name,
            'focus_keyword' => $b->focus_keyword,
            'secondary_keywords' => $b->secondary_keywords,
            'canonical_url' => $b->canonical_url,
            'og_title' => $b->og_title,
            'og_description' => $b->og_description,
            'schema_type' => $b->schema_type,
            'is_featured' => (bool) $b->is_featured,
            'views_count' => $b->views_count,
            'updated_at' => optional($b->updated_at)->toIso8601String(),
        ];
    }
}
