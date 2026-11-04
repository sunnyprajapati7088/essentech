<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdLandingPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdLandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = AdLandingPage::query();

        if ($request->filled('q')) {
            $q = $request->q;
            $query->where(function ($sub) use ($q) {
                $sub->where('title', 'like', "%{$q}%")
                    ->orWhere('slug', 'like', "%{$q}%")
                    ->orWhere('hero_title', 'like', "%{$q}%");
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $pages = $query->orderBy('id', 'desc')->paginate(15)->withQueryString();

        $stats = [
            'total' => AdLandingPage::count(),
            'published' => AdLandingPage::where('status', 'published')->count(),
            'draft' => AdLandingPage::where('status', 'draft')->count(),
        ];

        return view('admin.landing_pages.index', compact('pages', 'stats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Provide smart defaults
        $page = new AdLandingPage([
            'status' => 'published',
            'theme_color' => '#FF800F',
            'hero_badge' => 'ESSENTECHS · DOORSTEP SERVICE',
            'hero_title' => 'Washing Machine Service Centre',
            'hero_subtitle' => 'Professional repair and service at your doorstep.',
            'primary_cta_text' => 'Book Washing Machine Service',
            'primary_phone' => '+91 97467 00889',
            'whatsapp_number' => '919746700889',
            'show_brands' => true,
            'brands_heading' => 'BRANDS WE SERVE',
            'brands_list' => "LG, VOLTAS, SAMSUNG, HAIER, BLUE STAR, CARRIER, IFB, LLYOD, HITACHI, O GENERAL, MITSUBISHI ELECTRIC",
            'brands_bg_color' => '#001064',
            'brands_text_color' => '#FFFFFF',
            'show_trust_badges' => true,
            'trust_badges' => [
                ['icon' => 'bi bi-check-circle-fill', 'text' => 'On-site inspection'],
                ['icon' => 'bi bi-gear-wide-connected', 'text' => 'Experienced technicians'],
                ['icon' => 'bi bi-clock-history', 'text' => "We'll arrive in 30 minutes"],
                ['icon' => 'bi bi-shield-check', 'text' => 'Service warranty on eligible repairs'],
            ],
            'show_service_card' => true,
            'card_badge' => 'WASHING MACHINE',
            'card_title' => 'Washing Machine Repair',
            'card_description' => 'Front-load and top-load washing machine repairs, installation and PCB servicing.',
            'card_features' => "Installation of new units\nDrum & motor repair\nWater leakage fixing\nPCB repair & replacement\nNoise & vibration issues",
            'card_learn_more_text' => 'Learn More',
            'card_learn_more_link' => '#learn-more',
            'card_book_now_text' => 'Book Now',
            'modal_title' => 'Book Washing Machine Service',
            'modal_subtitle' => 'Fill in your details and contact us on WhatsApp.',
            'service_options' => "Washing Machine Repair\nWashing Machine Service\nWashing Machine Installation\nWashing Machine Inspection",
            'problem_options' => "Machine Not Starting\nWater Not Filling\nWater Not Draining\nNot Spinning\nExcessive Vibration\nWater Leakage\nDoor / Lid Problem\nOther Problem",
            'whatsapp_custom_message' => 'Hello Essen Techs, I want to book Washing Machine Repair Service.',
            'show_floating_button' => true,
            'floating_button_type' => 'both',
            'robots' => 'index, follow, max-snippet:-1, max-video-preview:-1, max-image-preview:large',
            'og_type' => 'article',
            'twitter_card' => 'summary_large_image',
            'schema_type' => 'Service',
        ]);

        return view('admin.landing_pages.create', compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:ad_landing_pages,slug',
            'status' => 'required|in:published,draft',
            'theme_color' => 'nullable|string|max:30',

            // Hero
            'hero_badge' => 'nullable|string|max:255',
            'hero_title' => 'required|string|max:255',
            'hero_subtitle' => 'nullable|string',
            'hero_image' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
            'hero_image_alt' => 'nullable|string|max:255',
            'primary_cta_text' => 'nullable|string|max:100',
            'primary_phone' => 'nullable|string|max:50',
            'whatsapp_number' => 'nullable|string|max:50',

            // Brands
            'show_brands' => 'nullable|boolean',
            'brands_heading' => 'nullable|string|max:100',
            'brands_list' => 'nullable|string',
            'brands_bg_color' => 'nullable|string|max:30',
            'brands_text_color' => 'nullable|string|max:30',

            // Trust Badges
            'show_trust_badges' => 'nullable|boolean',
            'trust_badge_texts' => 'nullable|array',
            'trust_badge_icons' => 'nullable|array',

            // Card
            'show_service_card' => 'nullable|boolean',
            'card_badge' => 'nullable|string|max:100',
            'card_title' => 'nullable|string|max:255',
            'card_description' => 'nullable|string',
            'card_image' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
            'card_image_alt' => 'nullable|string|max:255',
            'card_features' => 'nullable|string',
            'card_learn_more_text' => 'nullable|string|max:100',
            'card_learn_more_link' => 'nullable|string|max:255',
            'card_book_now_text' => 'nullable|string|max:100',

            // Modal
            'modal_title' => 'nullable|string|max:255',
            'modal_subtitle' => 'nullable|string|max:255',
            'service_options' => 'nullable|string',
            'problem_options' => 'nullable|string',
            'whatsapp_custom_message' => 'nullable|string',

            // Floating Button
            'show_floating_button' => 'nullable|boolean',
            'floating_button_type' => 'nullable|string|in:whatsapp,call,both',

            // SEO Suite
            'focus_keyword' => 'nullable|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'canonical_url' => 'nullable|string|max:255',
            'robots' => 'nullable|string|max:255',
            'og_title' => 'nullable|string|max:255',
            'og_description' => 'nullable|string',
            'og_image' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
            'og_type' => 'nullable|string|max:50',
            'twitter_title' => 'nullable|string|max:255',
            'twitter_description' => 'nullable|string',
            'twitter_image' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
            'twitter_card' => 'nullable|string|max:50',
            'schema_type' => 'nullable|string|max:50',
            'custom_schema' => 'nullable|string',

            // Scripts
            'header_scripts' => 'nullable|string',
            'body_scripts' => 'nullable|string',
            'custom_css' => 'nullable|string',
        ]);

        $data = $request->except(['hero_image', 'card_image', 'og_image', 'twitter_image', 'trust_badge_texts', 'trust_badge_icons']);

        // Format slug
        $data['slug'] = Str::slug($request->slug ?: $request->title);

        // Booleans
        $data['show_brands'] = $request->has('show_brands');
        $data['show_trust_badges'] = $request->has('show_trust_badges');
        $data['show_service_card'] = $request->has('show_service_card');
        $data['show_floating_button'] = $request->has('show_floating_button');

        // Handle Trust Badges array
        if ($request->has('trust_badge_texts')) {
            $badges = [];
            $texts = $request->input('trust_badge_texts', []);
            $icons = $request->input('trust_badge_icons', []);
            foreach ($texts as $index => $text) {
                if (!empty(trim($text))) {
                    $badges[] = [
                        'text' => trim($text),
                        'icon' => $icons[$index] ?? 'bi bi-check-circle-fill',
                    ];
                }
            }
            $data['trust_badges'] = $badges;
        }

        // File uploads
        if ($request->hasFile('hero_image')) {
            $data['hero_image'] = $request->file('hero_image')->store('landing_pages', 'public');
        }
        if ($request->hasFile('card_image')) {
            $data['card_image'] = $request->file('card_image')->store('landing_pages', 'public');
        }
        if ($request->hasFile('og_image')) {
            $data['og_image'] = $request->file('og_image')->store('landing_pages', 'public');
        }
        if ($request->hasFile('twitter_image')) {
            $data['twitter_image'] = $request->file('twitter_image')->store('landing_pages', 'public');
        }

        $page = AdLandingPage::create($data);

        return redirect()->route('admin.landing-pages.index')
            ->with('success', "Landing page '{$page->title}' created successfully!");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdLandingPage $landing_page)
    {
        return view('admin.landing_pages.edit', ['page' => $landing_page]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AdLandingPage $landing_page)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:ad_landing_pages,slug,' . $landing_page->id,
            'status' => 'required|in:published,draft',
            'theme_color' => 'nullable|string|max:30',

            // Hero
            'hero_badge' => 'nullable|string|max:255',
            'hero_title' => 'required|string|max:255',
            'hero_subtitle' => 'nullable|string',
            'hero_image' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
            'hero_image_alt' => 'nullable|string|max:255',
            'primary_cta_text' => 'nullable|string|max:100',
            'primary_phone' => 'nullable|string|max:50',
            'whatsapp_number' => 'nullable|string|max:50',

            // Brands
            'show_brands' => 'nullable|boolean',
            'brands_heading' => 'nullable|string|max:100',
            'brands_list' => 'nullable|string',
            'brands_bg_color' => 'nullable|string|max:30',
            'brands_text_color' => 'nullable|string|max:30',

            // Trust Badges
            'show_trust_badges' => 'nullable|boolean',
            'trust_badge_texts' => 'nullable|array',
            'trust_badge_icons' => 'nullable|array',

            // Card
            'show_service_card' => 'nullable|boolean',
            'card_badge' => 'nullable|string|max:100',
            'card_title' => 'nullable|string|max:255',
            'card_description' => 'nullable|string',
            'card_image' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
            'card_image_alt' => 'nullable|string|max:255',
            'card_features' => 'nullable|string',
            'card_learn_more_text' => 'nullable|string|max:100',
            'card_learn_more_link' => 'nullable|string|max:255',
            'card_book_now_text' => 'nullable|string|max:100',

            // Modal
            'modal_title' => 'nullable|string|max:255',
            'modal_subtitle' => 'nullable|string|max:255',
            'service_options' => 'nullable|string',
            'problem_options' => 'nullable|string',
            'whatsapp_custom_message' => 'nullable|string',

            // Floating Button
            'show_floating_button' => 'nullable|boolean',
            'floating_button_type' => 'nullable|string|in:whatsapp,call,both',

            // SEO Suite
            'focus_keyword' => 'nullable|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'canonical_url' => 'nullable|string|max:255',
            'robots' => 'nullable|string|max:255',
            'og_title' => 'nullable|string|max:255',
            'og_description' => 'nullable|string',
            'og_image' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
            'og_type' => 'nullable|string|max:50',
            'twitter_title' => 'nullable|string|max:255',
            'twitter_description' => 'nullable|string',
            'twitter_image' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
            'twitter_card' => 'nullable|string|max:50',
            'schema_type' => 'nullable|string|max:50',
            'custom_schema' => 'nullable|string',

            // Scripts
            'header_scripts' => 'nullable|string',
            'body_scripts' => 'nullable|string',
            'custom_css' => 'nullable|string',
        ]);

        $data = $request->except(['hero_image', 'card_image', 'og_image', 'twitter_image', 'trust_badge_texts', 'trust_badge_icons']);

        $data['slug'] = Str::slug($request->slug ?: $request->title);

        $data['show_brands'] = $request->has('show_brands');
        $data['show_trust_badges'] = $request->has('show_trust_badges');
        $data['show_service_card'] = $request->has('show_service_card');
        $data['show_floating_button'] = $request->has('show_floating_button');

        // Handle Trust Badges
        if ($request->has('trust_badge_texts')) {
            $badges = [];
            $texts = $request->input('trust_badge_texts', []);
            $icons = $request->input('trust_badge_icons', []);
            foreach ($texts as $index => $text) {
                if (!empty(trim($text))) {
                    $badges[] = [
                        'text' => trim($text),
                        'icon' => $icons[$index] ?? 'bi bi-check-circle-fill',
                    ];
                }
            }
            $data['trust_badges'] = $badges;
        }

        // File uploads
        if ($request->hasFile('hero_image')) {
            if ($landing_page->hero_image && !str_starts_with($landing_page->hero_image, 'http') && Storage::disk('public')->exists($landing_page->hero_image)) {
                Storage::disk('public')->delete($landing_page->hero_image);
            }
            $data['hero_image'] = $request->file('hero_image')->store('landing_pages', 'public');
        }

        if ($request->hasFile('card_image')) {
            if ($landing_page->card_image && !str_starts_with($landing_page->card_image, 'http') && Storage::disk('public')->exists($landing_page->card_image)) {
                Storage::disk('public')->delete($landing_page->card_image);
            }
            $data['card_image'] = $request->file('card_image')->store('landing_pages', 'public');
        }

        if ($request->hasFile('og_image')) {
            if ($landing_page->og_image && !str_starts_with($landing_page->og_image, 'http') && Storage::disk('public')->exists($landing_page->og_image)) {
                Storage::disk('public')->delete($landing_page->og_image);
            }
            $data['og_image'] = $request->file('og_image')->store('landing_pages', 'public');
        }

        if ($request->hasFile('twitter_image')) {
            if ($landing_page->twitter_image && !str_starts_with($landing_page->twitter_image, 'http') && Storage::disk('public')->exists($landing_page->twitter_image)) {
                Storage::disk('public')->delete($landing_page->twitter_image);
            }
            $data['twitter_image'] = $request->file('twitter_image')->store('landing_pages', 'public');
        }

        $landing_page->update($data);

        return redirect()->route('admin.landing-pages.index')
            ->with('success', "Landing page '{$landing_page->title}' updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdLandingPage $landing_page)
    {
        $title = $landing_page->title;

        // Cleanup files
        if ($landing_page->hero_image && !str_starts_with($landing_page->hero_image, 'http')) {
            Storage::disk('public')->delete($landing_page->hero_image);
        }
        if ($landing_page->card_image && !str_starts_with($landing_page->card_image, 'http')) {
            Storage::disk('public')->delete($landing_page->card_image);
        }
        if ($landing_page->og_image && !str_starts_with($landing_page->og_image, 'http')) {
            Storage::disk('public')->delete($landing_page->og_image);
        }

        $landing_page->delete();

        return redirect()->route('admin.landing-pages.index')
            ->with('success', "Landing page '{$title}' deleted successfully!");
    }

    /**
     * 1-Click duplicate an existing landing page.
     */
    public function duplicate(AdLandingPage $landing_page)
    {
        $clone = $landing_page->replicate();
        $clone->title = $landing_page->title . ' (Copy)';
        
        $baseSlug = $landing_page->slug . '-copy';
        $slug = $baseSlug;
        $counter = 1;
        while (AdLandingPage::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }
        $clone->slug = $slug;
        $clone->status = 'draft';
        $clone->save();

        return redirect()->route('admin.landing-pages.edit', $clone->id)
            ->with('success', "Landing page duplicated as '{$clone->title}'. You can now customize it!");
    }
}
