<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Section;
use App\Models\PageSection;
use Illuminate\Http\Request;

class PageSectionController extends Controller
{
    public function index()
    {
        $pageSections = PageSection::with(['page', 'section'])->get();
        return view('admin.page_sections.index', compact('pageSections'));
    }

    public function create()
    {
        $pages = Page::all();
        $sections = Section::all();
        return view('admin.page_sections.create', compact('pages', 'sections'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'page_id' => 'required|exists:pages,id',
            'section_id' => 'required|exists:sections,id',
            'order' => 'nullable|integer',
            'is_repeatable' => 'boolean',
            'is_common' => 'boolean',
        ]);

        PageSection::create($request->all());

        return redirect()->route('page-sections.index')->with('success', 'Page Section added successfully.');
    }

    public function edit(PageSection $pageSection)
    {
        $pages = Page::all();
        $sections = Section::all();
        return view('admin.page_sections.edit', compact('pageSection', 'pages', 'sections'));
    }

    public function update(Request $request, PageSection $pageSection)
    {
        $request->validate([
            'page_id' => 'required|exists:pages,id',
            'section_id' => 'required|exists:sections,id',
            'order' => 'nullable|integer',
            'is_repeatable' => 'boolean',
            'is_common' => 'boolean',
        ]);

        $pageSection->update($request->all());

        return redirect()->route('page-sections.index')->with('success', 'Page Section updated successfully.');
    }

    public function destroy(PageSection $pageSection)
    {
        $pageSection->delete();
        return redirect()->route('page-sections.index')->with('success', 'Page Section deleted successfully.');
    }
}
