<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdLandingPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'status',
        'theme_color',
        // Hero
        'hero_badge',
        'hero_title',
        'hero_subtitle',
        'hero_image',
        'hero_image_alt',
        'primary_cta_text',
        'primary_phone',
        'whatsapp_number',
        // Brands
        'show_brands',
        'brands_heading',
        'brands_list',
        'brands_bg_color',
        'brands_text_color',
        // Trust Badges
        'show_trust_badges',
        'trust_badges',
        // Service Card
        'show_service_card',
        'card_badge',
        'card_title',
        'card_description',
        'card_image',
        'card_image_alt',
        'card_features',
        'card_learn_more_text',
        'card_learn_more_link',
        'card_book_now_text',
        // Modal / Lead Form
        'modal_title',
        'modal_subtitle',
        'service_options',
        'problem_options',
        'whatsapp_custom_message',
        // Floating Button
        'show_floating_button',
        'floating_button_type',
        // SEO Suite
        'focus_keyword',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'canonical_url',
        'robots',
        'og_title',
        'og_description',
        'og_image',
        'og_type',
        'twitter_title',
        'twitter_description',
        'twitter_image',
        'twitter_card',
        'schema_type',
        'custom_schema',
        // Scripts & Styles
        'header_scripts',
        'body_scripts',
        'custom_css',
    ];

    protected $casts = [
        'show_brands' => 'boolean',
        'show_trust_badges' => 'boolean',
        'show_service_card' => 'boolean',
        'show_floating_button' => 'boolean',
        'trust_badges' => 'array',
    ];

    /**
     * Get brands as a clean array of strings.
     */
    public function getBrandsListArrayAttribute(): array
    {
        if (empty($this->brands_list)) {
            return [];
        }

        // Split by either comma or newline
        $brands = preg_split('/[,\r\n]+/', $this->brands_list);
        return array_values(array_filter(array_map('trim', $brands)));
    }

    /**
     * Get service features as clean array.
     */
    public function getCardFeaturesArrayAttribute(): array
    {
        if (empty($this->card_features)) {
            return [];
        }

        $features = preg_split('/[\r\n]+/', $this->card_features);
        return array_values(array_filter(array_map('trim', $features)));
    }

    /**
     * Get service options for modal dropdown.
     */
    public function getServiceOptionsArrayAttribute(): array
    {
        if (empty($this->service_options)) {
            return [
                'Washing Machine Repair',
                'Washing Machine Service',
                'Washing Machine Installation',
                'Washing Machine Inspection',
            ];
        }

        $options = preg_split('/[\r\n]+/', $this->service_options);
        return array_values(array_filter(array_map('trim', $options)));
    }

    /**
     * Get problem options for modal dropdown.
     */
    public function getProblemOptionsArrayAttribute(): array
    {
        if (empty($this->problem_options)) {
            return [
                'Machine Not Starting',
                'Water Not Filling',
                'Water Not Draining',
                'Not Spinning',
                'Excessive Vibration',
                'Water Leakage',
                'Door / Lid Problem',
                'Other Problem',
            ];
        }

        $options = preg_split('/[\r\n]+/', $this->problem_options);
        return array_values(array_filter(array_map('trim', $options)));
    }

    /**
     * Canonical URL (uses custom canonical or defaults to current page absolute URL).
     */
    public function getEffectiveCanonicalUrlAttribute(): string
    {
        return !empty($this->canonical_url) ? $this->canonical_url : url($this->slug);
    }

    /**
     * Open Graph Title.
     */
    public function getEffectiveOgTitleAttribute(): string
    {
        return !empty($this->og_title) ? $this->og_title : ($this->meta_title ?: $this->title);
    }

    /**
     * Open Graph Description.
     */
    public function getEffectiveOgDescriptionAttribute(): string
    {
        return !empty($this->og_description) ? $this->og_description : ($this->meta_description ?: ($this->hero_subtitle ?: $this->title));
    }

    /**
     * Open Graph Image URL.
     */
    public function getEffectiveOgImageUrlAttribute(): ?string
    {
        $img = $this->og_image ?: $this->hero_image;
        if (!$img) {
            return null;
        }

        if (str_starts_with($img, 'http://') || str_starts_with($img, 'https://')) {
            return $img;
        }

        return asset('storage/' . $img);
    }

    /**
     * Hero Image URL.
     */
    public function getHeroImageUrlAttribute(): ?string
    {
        if (!$this->hero_image) {
            return null;
        }

        if (str_starts_with($this->hero_image, 'http://') || str_starts_with($this->hero_image, 'https://')) {
            return $this->hero_image;
        }

        return asset('storage/' . $this->hero_image);
    }

    /**
     * Card Image URL.
     */
    public function getCardImageUrlAttribute(): ?string
    {
        if (!$this->card_image) {
            return null;
        }

        if (str_starts_with($this->card_image, 'http://') || str_starts_with($this->card_image, 'https://')) {
            return $this->card_image;
        }

        return asset('storage/' . $this->card_image);
    }

    /**
     * Auto-generated Schema.org JSON-LD or custom schema.
     */
    public function getSchemaMarkupAttribute(): string
    {
        if (!empty($this->custom_schema)) {
            return $this->custom_schema;
        }

        $pageUrl = $this->effective_canonical_url;
        $imageUrl = $this->effective_og_image_url ?: asset('img/EssenTechs-logo.jpeg');

        $schema = [
            '@context' => 'https://schema.org',
            '@graph' => [
                [
                    '@type' => 'Organization',
                    '@id' => url('/') . '#organization',
                    'name' => 'Essen Techs',
                    'url' => url('/'),
                    'logo' => [
                        '@type' => 'ImageObject',
                        '@id' => url('/') . '#logo',
                        'url' => asset('img/EssenTechs-logo.jpeg'),
                        'caption' => 'Essen Techs Appliance Repair & Service'
                    ],
                    'contactPoint' => [
                        '@type' => 'ContactPoint',
                        'telephone' => $this->primary_phone ?: '+91 97467 00889',
                        'contactType' => 'customer service',
                        'areaServed' => 'IN',
                        'availableLanguage' => ['en', 'hi', 'ml']
                    ]
                ],
                [
                    '@type' => 'LocalBusiness',
                    '@id' => $pageUrl . '#localbusiness',
                    'name' => 'Essen Techs - ' . $this->hero_title,
                    'url' => $pageUrl,
                    'telephone' => $this->primary_phone ?: '+91 97467 00889',
                    'image' => $imageUrl,
                    'priceRange' => '₹₹',
                    'address' => [
                        '@type' => 'PostalAddress',
                        'addressCountry' => 'IN'
                    ],
                    'openingHoursSpecification' => [
                        '@type' => 'OpeningHoursSpecification',
                        'dayOfWeek' => [
                            'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'
                        ],
                        'opens' => '08:00',
                        'closes' => '21:00'
                    ]
                ],
                [
                    '@type' => 'Service',
                    '@id' => $pageUrl . '#service',
                    'name' => $this->card_title ?: $this->hero_title,
                    'serviceType' => $this->hero_title,
                    'provider' => [
                        '@id' => url('/') . '#organization'
                    ],
                    'description' => $this->meta_description ?: $this->hero_subtitle,
                    'offers' => [
                        '@type' => 'Offer',
                        'priceCurrency' => 'INR',
                        'availability' => 'https://schema.org/InStock'
                    ]
                ],
                [
                    '@type' => 'BreadcrumbList',
                    '@id' => $pageUrl . '#breadcrumb',
                    'itemListElement' => [
                        [
                            '@type' => 'ListItem',
                            'position' => 1,
                            'name' => 'Home',
                            'item' => url('/')
                        ],
                        [
                            '@type' => 'ListItem',
                            'position' => 2,
                            'name' => $this->title,
                            'item' => $pageUrl
                        ]
                    ]
                ]
            ]
        ];

        return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
}
