<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Page;
use App\Models\Menu;
use App\Models\Section;
use Exception;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $query = Page::query();
        $menus = Menu::pluck('title', 'id');

        if ($request->filled('q')) {
            $query->where('title', 'like', '%' . $request->q . '%')
                ->orWhere('slug', 'like', '%' . $request->q . '%');
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $pages = $query->orderBy('id', 'desc')->paginate(10);

        return view('admin.pages.index', compact('pages','menus'));
    }

    public function create()
    {
        $menus = Menu::pluck('title', 'id');
        $sections = Section::pluck('name', 'id');
        return view('admin.pages.create', compact('menus', 'sections'));
    }

    public function store(Request $request)
    {
      
        try{
            $data = $request->validate([
                'menu_id' => 'required|exists:menus,id',
                'title' => 'required|string|max:255',
                'slug' => 'nullable|string|max:255|unique:pages,slug',
                'content' => 'nullable|string',
                'meta_title' => 'nullable|string|max:255',
                'meta_description' => 'nullable|string',
                'short_descrption' =>'required|string',
                'schema' => 'nullable|json',
                'status' => 'required|in:draft,published,archived',
                'sections' => 'array',
                'sections.*' => 'exists:sections,id',
                'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);
       
            $data['slug'] = $data['slug'] ?? Str::slug($data['title']);
            if ($request->hasFile('banner_image')) {
                $file = $request->file('banner_image');
                $originalName = $file->getClientOriginalName();
                $timestamp = (int) (microtime(true) * 10000);
                $extension = $file->extension();
                $newName = pathinfo($originalName, PATHINFO_FILENAME) . '_' . $timestamp . '.' . $extension;
                $data['banner_image'] = $file->storeAs('admin/banner/image', $newName, 'public');
            }
            $page = Page::create($data);
    
            // Handle PageSection mapping manually
            if (!empty($data['sections'])) {
    
                foreach ($data['sections'] as $sectionId) {
                    $page->pageSections()->create([
                        'section_id' => $sectionId,
                        'is_active' => 1,
                    ]);
                }
            }
    
            return redirect()->route('admin.pages.index')->with('success', 'Page created successfully.');
        }catch(Exception $e){
            
        }   
        
    }

    public function update(Request $request, Page $page)
    {
        $data = $request->validate([
            'menu_id' => 'required|exists:menus,id',
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:pages,slug,' . $page->id,
            'content' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'short_descrption' =>'required',
            'schema' => 'nullable|json',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'status' => 'required|in:draft,published,archived',
            'sections' => 'array',
            'sections.*' => 'exists:sections,id',
        ]);
          
        $data['slug'] = $data['slug'] ?? Str::slug($data['title']);

        // Handle banner image upload
        if ($request->hasFile('banner_image')) {
            if ($page->banner_image && Storage::disk('public')->exists($page->banner_image)) {
                Storage::disk('public')->delete($page->banner_image);
            }
            $file = $request->file('banner_image');
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '_' . time() . '.' . $file->extension();
            $data['banner_image'] = $file->storeAs('admin/banner/image', $filename, 'public');
        }

        $page->update($data);
       
        // Update sections via PageSection
        $page->pageSections()->delete(); // remove old
        if (!empty($data['sections'])) {
            foreach ($data['sections'] as $sectionId) {
                $page->pageSections()->create([
                    'section_id' => $sectionId,
                    'is_active' => 1,
                ]);
            }
        }

        return redirect()->route('admin.pages.index')->with('success', 'Page updated successfully.');
    }



    public function edit(Page $page)
    {
        $menus = Menu::pluck('title', key: 'id');
        $sections = Section::pluck('name', 'id');
        return view('admin.pages.edit', compact('page', 'menus', 'sections'));
    }



    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('admin.pages.index')->with('success', 'Page deleted successfully.');
    }
    public function show(Page $page)
    {
        // Eager load sections (belongsToMany)
        $page->load('sections');

        return view('admin.pages.show', compact('page'));
    }
}
