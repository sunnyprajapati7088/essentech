<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Menu;
use App\Models\Page;

class PageController extends Controller
{
    public function welcome()
    {

        $menus = Menu::with(['children.page', 'page'])
        ->whereNull('parent_id')   // only top-level menus
        ->where('status', 1)       // only active menus
        ->orderBy('order', 'asc')
        ->take(5)                  // limit first 5 menus
        ->get();

        return view('welcome', compact('menus'));
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function contact()
    {
        return view('contact');
    }

    public function terms()
    {
        return view('terms');
    }

    public function blog()
    {
        $blogs = Blog::orderBy('created_at', 'desc')
            ->take(10)
            ->get();
        return view('blogs', compact('blogs'));
    }

    public function blogDetails($slug)
    {
        // Find blog by slug
        $blog = Blog::where('slug', $slug)->firstOrFail();

        // Related blogs: fetch 3 latest blogs excluding current one
        $related_blogs = Blog::where('id', '!=', $blog->id)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get(['title', 'slug']);
        return view('blog-details', [
            'title' => $blog->title,
            'meta_description' => $blog->meta_description,
            'meta_keywords' => $blog->meta_keywords,
            'image' => $blog->featured_image,
            'content' => $blog->content,
            'related_blogs' => $related_blogs,
        ]);
    }

    public function detailsPage($menu_slug, $page_slug)
    {

        // 1. Find Menu
        $menu = Menu::where('slug', $menu_slug)->firstOrFail();

        // 2. Find Page under this Menu
        $page = Page::where('menu_id', $menu->id)
                    ->where('slug', $page_slug)
                    ->with(['sections' => function ($q) {
                        $q->orderBy('pivot_order')->wherePivot('is_active', 1);
                    }, 'sections.pageSections.sectionContents'])
                    ->firstOrFail();

        // 3. Return view
        return view('dynamic-details-page', compact('page', 'menu'));
    }

    public function landingPage()
    {
        return view('landing-page');
    }
}
