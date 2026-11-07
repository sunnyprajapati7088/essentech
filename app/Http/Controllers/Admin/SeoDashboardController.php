<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Offer;
use Illuminate\Http\Request;

class SeoDashboardController extends Controller
{
    public function index()
    {
        // 1. Blog Metrics
        $totalBlogs = Blog::count();
        $publishedBlogs = Blog::where('status', 'published')->count();
        $draftBlogs = Blog::where('status', 'draft')->count();
        $scheduledBlogs = Blog::where('status', 'scheduled')->count();

        // 2. Offer Metrics
        Offer::where('status', 'active')->get()->each->checkAndSyncStatus();
        $totalOffers = Offer::count();
        $activeOffers = Offer::active()->count();
        $expiredOffers = Offer::where('status', 'expired')->count();
        $draftOffers = Offer::where('status', 'draft')->count();

        // 3. Service & Brand Pages Counts
        $coreServicesCount = 5; // AC, Microwave, Refrigerator, Washing Machine, Water Purifier
        $acBrandsCount = count(\App\Services\ApplianceCatalogService::getAcBrands());
        $fridgeBrandsCount = count(\App\Services\ApplianceCatalogService::getRefrigeratorBrands());
        $washerBrandsCount = count(\App\Services\ApplianceCatalogService::getWashingMachineBrands());
        $microwaveBrandsCount = count(\App\Services\ApplianceCatalogService::getMicrowaveBrands());
        $brandPagesCount = $acBrandsCount + $fridgeBrandsCount + $washerBrandsCount + $microwaveBrandsCount;
        $coreStaticPages = 7; // Home, About, Contact, Services, Gallery, Terms, Brands

        $totalIndexableUrls = $coreStaticPages + $coreServicesCount + $brandPagesCount + $publishedBlogs + $activeOffers + 1; // +1 for /offers

        // 4. SEO Audit Warnings
        $blogsMissingMetaTitle = Blog::whereNull('meta_title')->orWhere('meta_title', '')->count();
        $blogsMissingMetaDesc = Blog::whereNull('meta_description')->orWhere('meta_description', '')->count();
        $blogsMissingImage = Blog::whereNull('featured_image')->orWhere('featured_image', '')->count();
        $offersMissingDiscount = Offer::whereNull('discount')->orWhere('discount', '')->count();

        // 5. Keyword Mapping Matrix
        $keywordMap = [
            [
                'keyword' => 'appliance repair in Kochi',
                'intent' => 'Transactional / Local',
                'url' => url('/'),
                'page' => 'Homepage',
                'status' => 'Optimized'
            ],
            [
                'keyword' => 'AC repair in Kochi',
                'intent' => 'Commercial / Transactional',
                'url' => url('/ac'),
                'page' => 'AC Service Hub',
                'status' => 'Optimized'
            ],
            [
                'keyword' => 'Samsung AC repair in Kochi',
                'intent' => 'Commercial / Brand',
                'url' => url('/ac/samsung'),
                'page' => 'Samsung AC Repair',
                'status' => 'Optimized'
            ],
            [
                'keyword' => 'Hitachi AC repair in Kochi',
                'intent' => 'Commercial / Brand',
                'url' => url('/ac/hitachi'),
                'page' => 'Hitachi AC Repair',
                'status' => 'Optimized'
            ],
            [
                'keyword' => 'microwave oven repair in Kochi',
                'intent' => 'Commercial / Transactional',
                'url' => url('/microwave-oven'),
                'page' => 'Microwave Oven Hub',
                'status' => 'Optimized'
            ],
            [
                'keyword' => 'Samsung microwave repair in Kochi',
                'intent' => 'Commercial / Brand',
                'url' => url('/microwave-oven/samsung'),
                'page' => 'Samsung Microwave Service',
                'status' => 'Optimized'
            ],
            [
                'keyword' => 'refrigerator repair in Kochi',
                'intent' => 'Commercial / Transactional',
                'url' => url('/refrigerator'),
                'page' => 'Refrigerator Service Hub',
                'status' => 'Optimized'
            ],
            [
                'keyword' => 'washing machine repair in Kochi',
                'intent' => 'Commercial / Transactional',
                'url' => url('/washing-machine'),
                'page' => 'Washing Machine Service Hub',
                'status' => 'Optimized'
            ],
            [
                'keyword' => 'RO service in Kochi',
                'intent' => 'Commercial / Transactional',
                'url' => url('/water-purifier'),
                'page' => 'RO & Water Purifier Hub',
                'status' => 'Optimized'
            ],
            [
                'keyword' => 'AC not cooling',
                'intent' => 'Informational / Problem',
                'url' => url('/blog/ac-not-cooling-causes-solutions-kochi'),
                'page' => 'Blog Guide',
                'status' => 'Published'
            ],
            [
                'keyword' => 'why is my AC leaking water',
                'intent' => 'Informational / Problem',
                'url' => url('/blog/why-is-my-ac-leaking-water-solutions'),
                'page' => 'Blog Guide',
                'status' => 'Published'
            ],
            [
                'keyword' => 'microwave not heating',
                'intent' => 'Informational / Problem',
                'url' => url('/blog/microwave-not-heating-causes-and-repair'),
                'page' => 'Blog Guide',
                'status' => 'Published'
            ],
            [
                'keyword' => 'refrigerator not cooling',
                'intent' => 'Informational / Problem',
                'url' => url('/blog/refrigerator-not-cooling-troubleshooting'),
                'page' => 'Blog Guide',
                'status' => 'Published'
            ],
            [
                'keyword' => 'washing machine not spinning',
                'intent' => 'Informational / Problem',
                'url' => url('/blog/washing-machine-not-spinning-or-draining'),
                'page' => 'Blog Guide',
                'status' => 'Published'
            ],
            [
                'keyword' => 'AC service offer in Kochi',
                'intent' => 'Commercial / Deals',
                'url' => url('/offers'),
                'page' => 'Offers Hub',
                'status' => 'Active'
            ],
        ];

        return view('admin.seo.dashboard', compact(
            'totalBlogs',
            'publishedBlogs',
            'draftBlogs',
            'scheduledBlogs',
            'totalOffers',
            'activeOffers',
            'expiredOffers',
            'draftOffers',
            'coreServicesCount',
            'brandPagesCount',
            'totalIndexableUrls',
            'blogsMissingMetaTitle',
            'blogsMissingMetaDesc',
            'blogsMissingImage',
            'offersMissingDiscount',
            'keywordMap'
        ));
    }
}
