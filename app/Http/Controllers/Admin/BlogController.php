<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    // GET /admin/blogs (list with optional search)
    public function index(Request $request)
    {
        $q = $request->input('q');
        $status = $request->input('status');

        $blogs = Blog::query()
            ->when($q, fn($query) =>
                $query->where(Blog::TITLE, 'like', "%{$q}%")
                      ->orWhere(Blog::SLUG, 'like', "%{$q}%")
            )
            ->when($status, fn($query) =>
                $query->where(Blog::STATUS, $status)
            )
            ->latest(Blog::CREATED_AT)
            ->paginate(15)
            ->withQueryString();

        return view('admin.blogs.index', compact('blogs', 'q', 'status'));
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
    public function store(StoreBlogRequest $request)
    {
        $data = $request->validated();
        $data[Blog::CREATED_BY] = Auth::id();
        $data[Blog::UPDATED_BY] = Auth::id();

        // Generate slug if not provided
        if (empty($data[Blog::SLUG])) {
            $data[Blog::SLUG] = Str::slug($data[Blog::TITLE]);
        }
        try {
            DB::beginTransaction();

            if ($request->hasFile(Blog::FEATURED_IMAGE)) {
                $file = $request->file(Blog::FEATURED_IMAGE);
                $originalName = $file->getClientOriginalName();
                $timestamp = (int) (microtime(true) * 10000);
                $extension = $file->extension();
                $newName = pathinfo($originalName, PATHINFO_FILENAME) . '_' . $timestamp . '.' . $extension;
                $data[Blog::FEATURED_IMAGE] = $file->storeAs('admin/blog/image', $newName, 'public');
            }
            $t = Blog::create($data);
            DB::commit();
            return redirect()
                ->route('admin.blogs.index')
                ->with('success', 'Blog created successfully.');
        } catch (\Throwable $e) {

            DB::rollBack();
            Log::error('Failed to create blog: ' . $e->getMessage(), ['exception' => $e]);
            return back()
                ->withInput()
                ->withErrors(['error' => 'Failed to create blog. Please try again or contact support.']);
        }
    }

    // GET /admin/blogs/{blog}/edit (edit form)
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    // PUT/PATCH /admin/blogs/{blog} (update)
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $data = $request->validated();
        $data[Blog::UPDATED_BY] = Auth::id();

        // Generate slug if changed
        if (empty($data[Blog::SLUG]) || $data[Blog::SLUG] !== $blog->slug) {
            $data[Blog::SLUG] = Str::slug($data[Blog::TITLE]);
        }



        try {
            DB::beginTransaction();

            if ($request->hasFile(Blog::FEATURED_IMAGE)) {
                if ($blog->featured_image && Storage::disk('public')->exists($blog->featured_image)) {
                    Storage::disk('public')->delete($blog->featured_image);
                }
                $file = $request->file(Blog::FEATURED_IMAGE);
                $originalName = $file->getClientOriginalName();
                $timestamp = (int) (microtime(true) * 10000);
                $extension = $file->extension();
                $newName = pathinfo($originalName, PATHINFO_FILENAME) . '_' . $timestamp . '.' . $extension;
                $data[Blog::FEATURED_IMAGE] = $file->storeAs('admin/blog/image', $newName, 'public');
            }
            $blog->update($data);

            DB::commit();
            return redirect()
                ->route('admin.blogs.index')
                ->with('success', 'Blog updated successfully.');
        } catch (\Throwable $e) {
            DB::rollBack();
            Log::error('Failed to update blog: ' . $e->getMessage(), ['exception' => $e]);
            return back()
                ->withInput()
                ->withErrors(['error' => 'Failed to update blog. Please try again or contact support.']);
        }
    }

    // DELETE /admin/blogs/{blog} (delete)
    public function destroy(Blog $blog)
    {
        try {
            DB::beginTransaction();

            if ($blog->featured_image && Storage::disk('public')->exists($blog->featured_image)) {
                Storage::disk('public')->delete($blog->featured_image);
            }

            if ($blog->og_image && Storage::disk('public')->exists($blog->og_image)) {
                Storage::disk('public')->delete($blog->og_image);
            }

            $blog->delete();

            DB::commit();
            return redirect()
                ->route('admin.blogs.index')
                ->with('success', 'Blog deleted successfully.');
        } catch (\Throwable $e) {
            DB::rollBack();
            Log::error('Failed to delete blog: ' . $e->getMessage(), ['exception' => $e]);
            return back()
                ->withErrors(['error' => 'Failed to delete blog. Please try again or contact support.']);
        }
    }
}
