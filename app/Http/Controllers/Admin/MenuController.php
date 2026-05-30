<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::with('parent')->orderBy('order')->get();
        return view('admin.menus.index', compact('menus'));
    }

    public function create()
    {
        $parents = Menu::whereNull('parent_id')->pluck('title', 'id');
        return view('admin.menus.create', compact('parents'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            // 'url' => 'nullable|string|max:255',
            // 'parent_id' => 'nullable|exists:menus,id',
            'order' => 'integer',
            'is_active' => 'boolean',
        ]);
        $data['slug'] = Str::slug($data['title']);

        Menu::create([
            // Intentionally left blank as per recent edits
            'title' => $data['title'],
            'slug' => $data['slug'],
            'order' => $data['order'] ?? 0,
            'is_active' => $data['is_active'] ?? false,
            'parent_id' => null, // or set to a default value if needed
            'url' => null, // or set to a default value if needed
            'type' => 'link', // or set to a default value if needed
            'status' => 1, // or set to a default value if needed
        ]);

        return redirect()->route('admin.menus.index')->with('success', 'Menu created successfully.');
    }

    public function edit(Menu $menu)
    {
        $parents = Menu::whereNull('parent_id')->where('id', '!=', $menu->id)->pluck('title', 'id');
        return view('admin.menus.edit', compact('menu', 'parents'));
    }

    public function update(Request $request, Menu $menu)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',

            'order' => 'integer',
            'is_active' => 'boolean',
        ]);

        $menu->update($data);

        return redirect()->route('admin.menus.index')->with('success', 'Menu updated successfully.');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('admin.menus.index')->with('success', 'Menu deleted successfully.');
    }
}
