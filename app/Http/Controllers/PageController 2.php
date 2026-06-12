<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{

    public function blogs()
    {
        try {
            $blogs = Blog::where('status', 'published')
                ->latest('published_at')
                ->paginate(10);
$mostViewed = Blog::where('status', 'published')
                ->orderBy('views_count', 'desc')
                ->take(5)
                ->get();
            return view('blog', compact('blogs'));
        } catch (\Exception $e) {
            return view('blog', ['blogs' => collect([])])->with('error', 'Unable to load blogs. Please try again later.');
        }
    }

    public function blogDetails($slug)
    {
        try {
            $blog = Blog::where('slug', $slug)
                ->where('status', 'published')
                ->firstOrFail();

            $blog->increment('views_count');

            // Add to recently viewed (limit to 5)
            $recentlyViewed = Session::get('recently_viewed', []);
            if (!in_array($blog->id, $recentlyViewed)) {
                array_unshift($recentlyViewed, $blog->id);
                $recentlyViewed = array_slice($recentlyViewed, 0, 5);
                Session::put('recently_viewed', $recentlyViewed);
            }

            $recentBlogs = Blog::where('status', 'published')
                ->latest('published_at')
                ->take(5)
                ->get();

            $mostViewed = Blog::where('status', 'published')
                ->orderBy('views_count', 'desc')
                ->take(5)
                ->get();

            $recentlyViewedIds = Session::get('recently_viewed', []);
            $recentlyViewed = Blog::whereIn('id', $recentlyViewedIds)
                ->where('status', 'published')
                ->get();

            return view('blog-details', compact('blog', 'recentBlogs', 'mostViewed', 'recentlyViewed'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            Log::warning('Blog not found: ' . $slug, ['exception' => $e]);
            abort(404, 'Blog not found or not published.');
        } catch (\Exception $e) {
            Log::error('Failed to load blog: ' . $e->getMessage(), ['exception' => $e]);
            abort(500, 'An error occurred while loading the blog. Please try again later.');
        }
    }
}
