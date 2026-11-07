<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    // GET /admin/blogs (list with optional search)
    public function index(Request $request)
    {
        $q = $request->input('q');
        $status = $request->input('status');
        $category = $request->input('category');

        $blogs = Blog::query()
            ->when($q, fn($query) =>
                $query->where(Blog::TITLE, 'like', "%{$q}%")
                      ->orWhere(Blog::SLUG, 'like', "%{$q}%")
                      ->orWhere(Blog::FOCUS_KEYWORD, 'like', "%{$q}%")
            )
            ->when($status, fn($query) =>
                $query->where(Blog::STATUS, $status)
            )
            ->when($category, fn($query) =>
                $query->where(Blog::CATEGORY, $category)
            )
            ->latest(Blog::CREATED_AT)
            ->paginate(15)
            ->withQueryString();

        return view('admin.blogs.index', compact('blogs', 'q', 'status', 'category'));
    }

    // GET /admin/blogs/{blog} (details)
    public function show(Blog $blog)
    {
        return view('admin.blogs.show', compact('blog'));
    }

    // GET /admin/blogs/create (create form)
    public function create()
    {
        return view('admin.blogs.create');
    }

    // POST /admin/blogs (store)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:blogs,slug',
            'short_description' => 'nullable|string',
            'content' => 'required|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'image_alt' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:100',
            'tags' => 'nullable|string|max:255',
            'author_name' => 'nullable|string|max:150',
            'status' => 'required|in:draft,published,archived,scheduled',
            'published_at' => 'nullable|date',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'focus_keyword' => 'nullable|string|max:255',
            'secondary_keywords' => 'nullable|string',
            'canonical_url' => 'nullable|string|max:255',
            'og_title' => 'nullable|string|max:255',
            'og_description' => 'nullable|string',
            'schema_type' => 'nullable|string|max:50',
            'is_featured' => 'nullable|boolean',
        ]);

        $validated['created_by'] = Auth::id() ?? 1;
        $validated['updated_by'] = Auth::id() ?? 1;

        // Automated Slug
        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        } else {
            $validated['slug'] = Str::slug($validated['slug']);
        }

        // Automated SEO metadata fallback
        if (empty($validated['meta_title'])) {
            $validated['meta_title'] = $validated['title'] . ' | EssenTechs Kochi';
        }
        if (empty($validated['meta_description'])) {
            $validated['meta_description'] = !empty($validated['short_description'])
                ? Str::limit(strip_tags($validated['short_description']), 155)
                : Str::limit(strip_tags($validated['content']), 155);
        }
        if (empty($validated['canonical_url'])) {
            $validated['canonical_url'] = url('/blog/' . $validated['slug']);
        }
        if (empty($validated['og_title'])) {
            $validated['og_title'] = $validated['meta_title'];
        }
        if (empty($validated['og_description'])) {
            $validated['og_description'] = $validated['meta_description'];
        }
        if (empty($validated['schema_type'])) {
            $validated['schema_type'] = 'Article';
        }
        if (empty($validated['image_alt'])) {
            $validated['image_alt'] = $validated['title'] . ' - EssenTechs Kerala';
        }
        if ($validated['status'] === 'published' && empty($validated['published_at'])) {
            $validated['published_at'] = now();
        }

        try {
            DB::beginTransaction();

            if ($request->hasFile('featured_image')) {
                $file = $request->file('featured_image');
                $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $newName = Str::slug($originalName) . '_' . time() . '.' . $file->extension();
                $validated['featured_image'] = $file->storeAs('admin/blog/image', $newName, 'public');
            }

            $blog = Blog::create($validated);
            DB::commit();

            // Check for SEO warnings to inform admin
            $warnings = [];
            if (strlen($validated['meta_title']) < 30) {
                $warnings[] = 'SEO title is under 30 characters. Recommended: 50-60 characters.';
            }
            if (strlen($validated['meta_description']) < 80) {
                $warnings[] = 'Meta description is under 80 characters. Recommended: 120-155 characters.';
            }
            if (empty($validated['focus_keyword'])) {
                $warnings[] = 'No focus keyword set for tracking organic intent.';
            }

            $message = 'Blog published successfully!';
            if (!empty($warnings)) {
                $message .= ' SEO Tips: ' . implode(' | ', $warnings);
            }

            return redirect()->route('admin.blogs.index')->with('success', $message);
        } catch (\Throwable $e) {
            DB::rollBack();
            Log::error('Failed to create blog: ' . $e->getMessage(), ['exception' => $e]);
            return back()->withInput()->withErrors(['error' => 'Failed to create blog: ' . $e->getMessage()]);
        }
    }

    // GET /admin/blogs/{blog}/edit (edit form)
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    // PUT/PATCH /admin/blogs/{blog} (update)
    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blogs,slug,' . $blog->id,
            'short_description' => 'nullable|string',
            'content' => 'required|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'image_alt' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:100',
            'tags' => 'nullable|string|max:255',
            'author_name' => 'nullable|string|max:150',
            'status' => 'required|in:draft,published,archived,scheduled',
            'published_at' => 'nullable|date',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'focus_keyword' => 'nullable|string|max:255',
            'secondary_keywords' => 'nullable|string',
            'canonical_url' => 'nullable|string|max:255',
            'og_title' => 'nullable|string|max:255',
            'og_description' => 'nullable|string',
            'schema_type' => 'nullable|string|max:50',
            'is_featured' => 'nullable|boolean',
        ]);

        $validated['updated_by'] = Auth::id() ?? 1;
        $validated['slug'] = Str::slug($validated['slug']);

        if (empty($validated['meta_title'])) {
            $validated['meta_title'] = $validated['title'] . ' | EssenTechs Kochi';
        }
        if (empty($validated['meta_description'])) {
            $validated['meta_description'] = !empty($validated['short_description'])
                ? Str::limit(strip_tags($validated['short_description']), 155)
                : Str::limit(strip_tags($validated['content']), 155);
        }
        if (empty($validated['canonical_url'])) {
            $validated['canonical_url'] = url('/blog/' . $validated['slug']);
        }

        try {
            DB::beginTransaction();

            if ($request->hasFile('featured_image')) {
                $file = $request->file('featured_image');
                $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $newName = Str::slug($originalName) . '_' . time() . '.' . $file->extension();
                $validated['featured_image'] = $file->storeAs('admin/blog/image', $newName, 'public');
            }

            $blog->update($validated);
            DB::commit();

            return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully.');
        } catch (\Throwable $e) {
            DB::rollBack();
            Log::error('Failed to update blog: ' . $e->getMessage(), ['exception' => $e]);
            return back()->withInput()->withErrors(['error' => 'Failed to update blog: ' . $e->getMessage()]);
        }
    }

    // DELETE /admin/blogs/{blog} (delete)
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
