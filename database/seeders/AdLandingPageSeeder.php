<?php

namespace Database\Seeders;

use App\Models\AdLandingPage;
use Illuminate\Database\Seeder;

class AdLandingPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $defaultBadges = [
            [
                'icon' => 'bi bi-check-circle-fill',
                'text' => 'On-site inspection',
            ],
            [
                'icon' => 'bi bi-gear-wide-connected',
                'text' => 'Experienced technicians',
            ],
            [
                'icon' => 'bi bi-clock-history',
                'text' => "We'll arrive in 30 minutes",
            ],
            [
                'icon' => 'bi bi-shield-check',
                'text' => 'Service warranty on eligible repairs',
            ],
        ];

        $features = "Installation of new units\nDrum & motor repair\nWater leakage fixing\nPCB repair & replacement\nNoise & vibration issues";

        $services = "Washing Machine Repair\nWashing Machine Service\nWashing Machine Installation\nWashing Machine Inspection";

        $problems = "Machine Not Starting\nWater Not Filling\nWater Not Draining\nNot Spinning\nExcessive Vibration\nWater Leakage\nDoor / Lid Problem\nOther Problem";

        $brands = "LG, VOLTAS, SAMSUNG, HAIER, BLUE STAR, CARRIER, IFB, LLYOD, HITACHI, O GENERAL, MITSUBISHI ELECTRIC";

        AdLandingPage::updateOrCreate(
            ['slug' => 'ads-washing-machine-repair'],
            [
                'title' => 'Ads Washing Machine Repair',
                'status' => 'published',
                // Theme matching essentechs.com (Primary: #FF800F Orange, Secondary: #001064 Navy)
                'theme_color' => '#FF800F',

                // Hero Section
                'hero_badge' => 'ESSENTECHS · DOORSTEP SERVICE',
                'hero_title' => 'Washing Machine Service Centre',
                'hero_subtitle' => 'Professional Washing Machine repair and service at your doorstep.',
                'hero_image' => 'landing_pages/Copy-of-Copy-of-Heading.jpg',
                'hero_image_alt' => 'Washing Machine Repair Service Technician Essen Techs',
                'primary_cta_text' => 'Book Washing Machine Service',
                'primary_phone' => '+91 97467 00889',
                'whatsapp_number' => '919746700889',

                // Brands Section (Using essentechs.com Navy Blue & White text)
                'show_brands' => true,
                'brands_heading' => 'BRANDS WE SERVE',
                'brands_list' => $brands,
                'brands_bg_color' => '#001064',
                'brands_text_color' => '#FFFFFF',

                // Trust Badges
                'show_trust_badges' => true,
                'trust_badges' => $defaultBadges,

                // Service Card
                'show_service_card' => true,
                'card_badge' => 'WASHING MACHINE',
                'card_title' => 'Washing Machine Repair',
                'card_description' => 'Front-load and top-load washing machine repairs, installation and PCB servicing.',
                'card_image' => 'landing_pages/photo-1626806787461-102c1bfaaea1.jpeg',
                'card_image_alt' => 'Washing Machine Repair Service',
                'card_features' => $features,
                'card_learn_more_text' => 'Learn More',
                'card_learn_more_link' => '#service-card-section',
                'card_book_now_text' => 'Book Now',

                // Modal
                'modal_title' => 'Book Washing Machine Service',
                'modal_subtitle' => 'Fill in your details and contact us on WhatsApp.',
                'service_options' => $services,
                'problem_options' => $problems,
                'whatsapp_custom_message' => 'Hello Essen Techs, I want to book Washing Machine Repair Service.',

                // Floating Action
                'show_floating_button' => true,
                'floating_button_type' => 'both',

                // SEO Suite (Fully configured for essentechs.com)
                'focus_keyword' => 'washing machine repair service',
                'meta_title' => 'Ads Washing Machine Repair - essentechs.com',
                'meta_description' => 'ESSENTECHS · DOORSTEP SERVICE Washing Machine Service Centre. Professional repair and service at your doorstep. Experienced technicians, 30 min arrival, warranty on eligible repairs.',
                'meta_keywords' => 'washing machine repair, washing machine service centre, washing machine mechanic, Essen Techs doorstep service, LG, Samsung, IFB, Whirlpool washing machine repair, Kochi, Ernakulam',
                'canonical_url' => 'https://essentechs.com/ads-washing-machine-repair/',
                'robots' => 'index, follow, max-snippet:-1, max-video-preview:-1, max-image-preview:large',
                
                // Open Graph
                'og_title' => 'Ads Washing Machine Repair - essentechs.com',
                'og_description' => 'ESSENTECHS · DOORSTEP SERVICE Washing Machine Service Centre. Professional doorstep appliance repair service in 30 minutes.',
                'og_image' => 'landing_pages/Copy-of-Copy-of-Heading.jpg',
                'og_type' => 'article',

                // Twitter Card
                'twitter_title' => 'Ads Washing Machine Repair - essentechs.com',
                'twitter_description' => 'Doorstep Washing Machine repair service by Essen Techs. 30 min arrival, verified technicians.',
                'twitter_image' => 'landing_pages/Copy-of-Copy-of-Heading.jpg',
                'twitter_card' => 'summary_large_image',

                // Schema
                'schema_type' => 'Service',
                'custom_schema' => null,
            ]
        );
    }
}
