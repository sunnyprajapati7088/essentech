<?php

namespace App\Http\Controllers;

use App\Models\AdLandingPage;
use App\Models\Blog;
use App\Models\Offer;
use App\Models\Page;
use App\Services\ApplianceCatalogService;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    /**
     * Render the comprehensive XML sitemap.
     */
    public function index(): Response
    {
        $baseUrl = 'https://essentechs.com';
        $today = date('Y-m-d');

        $urls = [];

        // Primary Core Pages
        $urls[] = ['loc' => "{$baseUrl}/", 'priority' => '1.00', 'changefreq' => 'weekly', 'lastmod' => $today];
        $urls[] = ['loc' => "{$baseUrl}/about", 'priority' => '0.80', 'changefreq' => 'monthly', 'lastmod' => $today];
        $urls[] = ['loc' => "{$baseUrl}/services", 'priority' => '0.85', 'changefreq' => 'weekly', 'lastmod' => $today];
        $urls[] = ['loc' => "{$baseUrl}/brands", 'priority' => '0.90', 'changefreq' => 'weekly', 'lastmod' => $today];
        $urls[] = ['loc' => "{$baseUrl}/contact", 'priority' => '0.85', 'changefreq' => 'monthly', 'lastmod' => $today];
        $urls[] = ['loc' => "{$baseUrl}/gallery", 'priority' => '0.60', 'changefreq' => 'monthly', 'lastmod' => $today];
        $urls[] = ['loc' => "{$baseUrl}/terms", 'priority' => '0.50', 'changefreq' => 'yearly', 'lastmod' => $today];
        $urls[] = ['loc' => "{$baseUrl}/blog", 'priority' => '0.80', 'changefreq' => 'daily', 'lastmod' => $today];
        $urls[] = ['loc' => "{$baseUrl}/offers", 'priority' => '0.85', 'changefreq' => 'weekly', 'lastmod' => $today];

        // Service Hubs & Recommended Appliance URLs
        $urls[] = ['loc' => "{$baseUrl}/ac-service-repair-kochi", 'priority' => '0.95', 'changefreq' => 'weekly', 'lastmod' => $today];
        $urls[] = ['loc' => "{$baseUrl}/ac/", 'priority' => '0.90', 'changefreq' => 'weekly', 'lastmod' => $today];

        $urls[] = ['loc' => "{$baseUrl}/refrigerator-repair-service-kochi", 'priority' => '0.95', 'changefreq' => 'weekly', 'lastmod' => $today];
        $urls[] = ['loc' => "{$baseUrl}/refrigerator", 'priority' => '0.90', 'changefreq' => 'weekly', 'lastmod' => $today];

        $urls[] = ['loc' => "{$baseUrl}/washing-machine-repair-service-kochi", 'priority' => '0.95', 'changefreq' => 'weekly', 'lastmod' => $today];
        $urls[] = ['loc' => "{$baseUrl}/washing-machine", 'priority' => '0.90', 'changefreq' => 'weekly', 'lastmod' => $today];

        $urls[] = ['loc' => "{$baseUrl}/microwave-oven-repair-kochi", 'priority' => '0.95', 'changefreq' => 'weekly', 'lastmod' => $today];
        $urls[] = ['loc' => "{$baseUrl}/microwave-oven/", 'priority' => '0.90', 'changefreq' => 'weekly', 'lastmod' => $today];

        $urls[] = ['loc' => "{$baseUrl}/water-purifier", 'priority' => '0.85', 'changefreq' => 'weekly', 'lastmod' => $today];

        // AC Brand Pages (21 Brands)
        foreach (ApplianceCatalogService::getAcBrands() as $brand) {
            $urls[] = [
                'loc' => "{$baseUrl}/ac/{$brand['slug']}/",
                'priority' => '0.80',
                'changefreq' => 'monthly',
                'lastmod' => $today
            ];
        }

        // Refrigerator Brand Pages (15 Brands)
        foreach (ApplianceCatalogService::getRefrigeratorBrands() as $brand) {
            $urls[] = [
                'loc' => "{$baseUrl}/refrigerator/{$brand['slug']}/",
                'priority' => '0.80',
                'changefreq' => 'monthly',
                'lastmod' => $today
            ];
        }

        // Washing Machine Brand Pages (16 Brands)
        foreach (ApplianceCatalogService::getWashingMachineBrands() as $brand) {
            $urls[] = [
                'loc' => "{$baseUrl}/washing-machine/{$brand['slug']}/",
                'priority' => '0.80',
                'changefreq' => 'monthly',
                'lastmod' => $today
            ];
        }

        // Microwave Brand Pages (15 Brands)
        foreach (ApplianceCatalogService::getMicrowaveBrands() as $brand) {
            $urls[] = [
                'loc' => "{$baseUrl}/microwave-oven/{$brand['slug']}/",
                'priority' => '0.80',
                'changefreq' => 'monthly',
                'lastmod' => $today
            ];
        }

        // Active Offers
        try {
            $offers = Offer::active()->get();
            foreach ($offers as $offer) {
                $urls[] = [
                    'loc' => "{$baseUrl}/offers/{$offer->slug}",
                    'priority' => '0.85',
                    'changefreq' => 'weekly',
                    'lastmod' => $offer->updated_at ? $offer->updated_at->format('Y-m-d') : $today
                ];
            }
        } catch (\Throwable $e) {
            // Ignored
        }

        // Published Blog Posts
        try {
            $blogs = Blog::where('status', 'published')->get();
            foreach ($blogs as $blog) {
                $urls[] = [
                    'loc' => "{$baseUrl}/blog/{$blog->slug}",
                    'priority' => '0.75',
                    'changefreq' => 'monthly',
                    'lastmod' => $blog->updated_at ? $blog->updated_at->format('Y-m-d') : $today
                ];
            }
        } catch (\Throwable $e) {
            // Ignored
        }

        // Existing Service Legacy Routes
        $legacyServices = [
            'service/ac-service',
            'service/washing-machine-repair',
            'service/refrigerator-repair',
            'service/microwave-oven-repair',
            'service/installation-uninstallation',
            'service/amc',
        ];
        foreach ($legacyServices as $svc) {
            $urls[] = ['loc' => "{$baseUrl}/{$svc}", 'priority' => '0.75', 'changefreq' => 'monthly', 'lastmod' => $today];
        }

        // Published Ad Landing Pages
        try {
            $landingPages = AdLandingPage::where('status', 'published')->get();
            foreach ($landingPages as $lp) {
                $urls[] = [
                    'loc' => "{$baseUrl}/{$lp->slug}",
                    'priority' => '0.80',
                    'changefreq' => 'weekly',
                    'lastmod' => $lp->updated_at ? $lp->updated_at->format('Y-m-d') : $today
                ];
            }
        } catch (\Throwable $e) {
            // Ignored
        }

        // Build XML
        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        foreach ($urls as $item) {
            $xml .= "  <url>\n";
            $xml .= "    <loc>" . htmlspecialchars($item['loc'], ENT_XML1) . "</loc>\n";
            $xml .= "    <lastmod>{$item['lastmod']}</lastmod>\n";
            $xml .= "    <changefreq>{$item['changefreq']}</changefreq>\n";
            $xml .= "    <priority>{$item['priority']}</priority>\n";
            $xml .= "  </url>\n";
        }

        $xml .= '</urlset>';

        return response($xml, 200, ['Content-Type' => 'application/xml; charset=utf-8']);
    }
}
