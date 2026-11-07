<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class OfferController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->input('q');
        $status = $request->input('status');

        // Auto-sync expired status
        Offer::where('status', 'active')->get()->each->checkAndSyncStatus();

        $offers = Offer::query()
            ->when($q, fn($query) =>
                $query->where('title', 'like', "%{$q}%")
                      ->orWhere('applicable_service', 'like', "%{$q}%")
                      ->orWhere('discount', 'like', "%{$q}%")
            )
            ->when($status, fn($query) =>
                $query->where('status', $status)
            )
            ->orderBy('priority', 'desc')
            ->latest()
            ->paginate(15)
            ->withQueryString();

        return view('admin.offers.index', compact('offers', 'q', 'status'));
    }

    public function create()
    {
        return view('admin.offers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:offers,slug',
            'description' => 'required|string',
            'discount' => 'nullable|string|max:100',
            'applicable_service' => 'nullable|string|max:150',
            'applicable_brand' => 'nullable|string|max:150',
            'location' => 'nullable|string|max:255',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'status' => 'required|in:draft,scheduled,active,expired,archived',
            'priority' => 'nullable|integer',
            'cta_text' => 'nullable|string|max:100',
            'cta_url' => 'nullable|string|max:255',
            'seo_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'focus_keyword' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
            'image_alt' => 'nullable|string|max:255',
        ]);

        $slug = !empty($validated['slug']) ? Str::slug($validated['slug']) : Str::slug($validated['title']);
        $validated['slug'] = $slug;

        // Auto-generate SEO if left empty
        if (empty($validated['seo_title'])) {
            $validated['seo_title'] = $validated['title'] . ' in Kochi | EssenTechs Offers';
        }
        if (empty($validated['meta_description'])) {
            $validated['meta_description'] = Str::limit(strip_tags($validated['description']), 155);
        }
        $validated['canonical_url'] = url('/offers/' . $slug);
        $validated['created_by'] = Auth::id();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'offer_' . time() . '.' . $file->extension();
            $validated['image'] = $file->storeAs('offers', $filename, 'public');
        }

        Offer::create($validated);

        return redirect()->route('admin.offers.index')->with('success', 'Offer created successfully.');
    }

    public function edit(Offer $offer)
    {
        return view('admin.offers.edit', compact('offer'));
    }

    public function update(Request $request, Offer $offer)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:offers,slug,' . $offer->id,
            'description' => 'required|string',
            'discount' => 'nullable|string|max:100',
            'applicable_service' => 'nullable|string|max:150',
            'applicable_brand' => 'nullable|string|max:150',
            'location' => 'nullable|string|max:255',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'status' => 'required|in:draft,scheduled,active,expired,archived',
            'priority' => 'nullable|integer',
            'cta_text' => 'nullable|string|max:100',
            'cta_url' => 'nullable|string|max:255',
            'seo_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'focus_keyword' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
            'image_alt' => 'nullable|string|max:255',
        ]);

        $validated['slug'] = Str::slug($validated['slug']);
        $validated['canonical_url'] = url('/offers/' . $validated['slug']);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'offer_' . time() . '.' . $file->extension();
            $validated['image'] = $file->storeAs('offers', $filename, 'public');
        }

        $offer->update($validated);
        $offer->checkAndSyncStatus();

        return redirect()->route('admin.offers.index')->with('success', 'Offer updated successfully.');
    }

    public function destroy(Offer $offer)
    {
        $offer->delete();
        return redirect()->route('admin.offers.index')->with('success', 'Offer removed successfully.');
    }
}
