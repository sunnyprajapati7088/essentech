<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ad_landing_pages', function (Blueprint $table) {
            $table->id();
            
            // Core Page Settings
            $table->string('title');
            $table->string('slug')->unique();
            $table->enum('status', ['published', 'draft'])->default('published');
            $table->string('theme_color')->default('#00B67A'); // Brand accent green

            // Hero Section
            $table->string('hero_badge')->default('ESSENTECHS · DOORSTEP SERVICE');
            $table->string('hero_title')->default('Washing Machine Service Centre');
            $table->text('hero_subtitle')->nullable();
            $table->string('hero_image')->nullable();
            $table->string('hero_image_alt')->nullable();
            $table->string('primary_cta_text')->default('Book Washing Machine Service');
            $table->string('primary_phone')->default('+91 97466 83310');
            $table->string('whatsapp_number')->default('919746683310');

            // Brands Marquee Section
            $table->boolean('show_brands')->default(true);
            $table->string('brands_heading')->default('BRANDS WE SERVE');
            $table->text('brands_list')->nullable();
            $table->string('brands_bg_color')->default('#00B67A');
            $table->string('brands_text_color')->default('#FFFFFF');

            // Trust Badges / Value Props
            $table->boolean('show_trust_badges')->default(true);
            $table->json('trust_badges')->nullable();

            // Service Offer Card
            $table->boolean('show_service_card')->default(true);
            $table->string('card_badge')->default('WASHING MACHINE');
            $table->string('card_title')->default('Washing Machine Repair');
            $table->text('card_description')->nullable();
            $table->string('card_image')->nullable();
            $table->string('card_image_alt')->nullable();
            $table->text('card_features')->nullable(); // Newline or comma separated
            $table->string('card_learn_more_text')->default('Learn More');
            $table->string('card_learn_more_link')->nullable();
            $table->string('card_book_now_text')->default('Book Now');

            // WhatsApp / Lead Booking Modal Configuration
            $table->string('modal_title')->default('Book Washing Machine Service');
            $table->string('modal_subtitle')->default('Fill in your details and contact us on WhatsApp.');
            $table->text('service_options')->nullable(); // Newline separated
            $table->text('problem_options')->nullable(); // Newline separated
            $table->string('whatsapp_custom_message')->nullable();

            // Floating Action Button
            $table->boolean('show_floating_button')->default(true);
            $table->string('floating_button_type')->default('both'); // whatsapp, call, both

            // Comprehensive SEO Suite
            $table->string('focus_keyword')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('canonical_url')->nullable();
            $table->string('robots')->default('index, follow, max-snippet:-1, max-video-preview:-1, max-image-preview:large');
            
            // Open Graph (Social SEO)
            $table->string('og_title')->nullable();
            $table->text('og_description')->nullable();
            $table->string('og_image')->nullable();
            $table->string('og_type')->default('article');

            // Twitter Card
            $table->string('twitter_title')->nullable();
            $table->text('twitter_description')->nullable();
            $table->string('twitter_image')->nullable();
            $table->string('twitter_card')->default('summary_large_image');

            // Structured Data / Schema
            $table->string('schema_type')->default('Service'); // Service, LocalBusiness, Custom
            $table->longText('custom_schema')->nullable();

            // Custom Tracking & Scripts (Ad Conversions, GTM, Pixel)
            $table->longText('header_scripts')->nullable();
            $table->longText('body_scripts')->nullable();
            $table->longText('custom_css')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ad_landing_pages');
    }
};
