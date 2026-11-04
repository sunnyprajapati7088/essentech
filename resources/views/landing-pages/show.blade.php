<!DOCTYPE html>
<html lang="en-US" prefix="og: https://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Primary SEO Meta Tags -->
    <title>{{ $page->meta_title ?: $page->title }}</title>
    <meta name="description" content="{{ $page->meta_description ?: $page->hero_subtitle }}">
    @if($page->meta_keywords)
        <meta name="keywords" content="{{ $page->meta_keywords }}">
    @endif
    <meta name="robots" content="{{ $page->robots ?: 'index, follow, max-snippet:-1, max-video-preview:-1, max-image-preview:large' }}">
    <link rel="canonical" href="{{ $page->effective_canonical_url }}">

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="{{ $page->og_type ?: 'article' }}">
    <meta property="og:title" content="{{ $page->effective_og_title }}">
    <meta property="og:description" content="{{ $page->effective_og_description }}">
    <meta property="og:url" content="{{ $page->effective_canonical_url }}">
    <meta property="og:site_name" content="essentechs.com">
    @if($page->effective_og_image_url)
        <meta property="og:image" content="{{ $page->effective_og_image_url }}">
        <meta property="og:image:secure_url" content="{{ $page->effective_og_image_url }}">
        <meta property="og:image:alt" content="{{ $page->hero_image_alt ?: $page->title }}">
    @endif

    <!-- Twitter Card -->
    <meta name="twitter:card" content="{{ $page->twitter_card ?: 'summary_large_image' }}">
    <meta name="twitter:title" content="{{ $page->twitter_title ?: $page->effective_og_title }}">
    <meta name="twitter:description" content="{{ $page->twitter_description ?: $page->effective_og_description }}">
    @if($page->effective_og_image_url)
        <meta name="twitter:image" content="{{ $page->effective_og_image_url }}">
    @endif

    <!-- Structured Data (JSON-LD Schema) -->
    {!! '<script type="application/ld+json">' . $page->schema_markup . '</script>' !!}

    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Injected Header Tracking Scripts (GTM, Google Ads, Meta Pixel) -->
    @if($page->header_scripts)
        {!! $page->header_scripts !!}
    @endif

    <style>
        :root {
            --primary-theme: {{ $page->theme_color ?: '#FF800F' }};
            --primary-hover: #e06b00;
            --theme-navy: #001064;
            --theme-dark: #010A35;
            --dark-heading: #1e293b;
            --text-dark: #111827;
            --text-muted: #64748b;
            --bg-light-tint: #fff7ed;
            --font-main: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: var(--font-main);
            color: var(--text-dark);
            background-color: #ffffff;
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
        }

        /* TOP MINIMAL BRAND HEADER */
        .lp-top-bar {
            width: 100%;
            background: #ffffff;
            padding: 12px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #f1f5f9;
        }

        .lp-logo {
            height: 40px;
            width: auto;
            object-fit: contain;
        }

        .lp-top-call {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #fff7ed;
            color: var(--primary-theme);
            padding: 8px 16px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: 14px;
            transition: all 0.2s ease;
        }

        .lp-top-call:hover {
            background: var(--primary-theme);
            color: #ffffff;
        }

        /* HERO SECTION */
        .lp-hero-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px 50px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
        }

        .lphero-image-col {
            flex: 1 1 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .lphero-img {
            width: 100%;
            max-width: 540px;
            height: auto;
            border-radius: 16px;
            object-fit: cover;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .lphero-content-col {
            flex: 1 1 50%;
        }

        .lphero-badge-wrap {
            margin-bottom: 16px;
        }

        .lphero-badge {
            display: inline-block;
            background: #fff7ed;
            color: var(--primary-theme);
            border: 1px solid #fed7aa;
            padding: 6px 14px;
            border-radius: 4px;
            font-size: 13px;
            font-weight: 800;
            letter-spacing: 0.8px;
            text-transform: uppercase;
        }

        .lphero-title {
            font-size: 42px;
            line-height: 1.18;
            font-weight: 800;
            text-transform: uppercase;
            margin-bottom: 18px;
            color: var(--dark-heading);
            letter-spacing: -0.5px;
        }

        .lphero-title .brand-accent {
            color: var(--primary-theme);
        }

        .lphero-subtitle-box {
            background: #fffaf5;
            border-left: 3px solid var(--primary-theme);
            padding: 10px 16px;
            border-radius: 4px;
            margin-bottom: 26px;
            font-size: 15px;
            color: #334155;
            font-weight: 500;
        }

        .lphero-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            align-items: center;
        }

        .btn-book-service {
            background: var(--primary-theme);
            color: #ffffff;
            border: none;
            padding: 14px 28px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.2s ease;
            box-shadow: 0 4px 14px rgba(255, 128, 15, 0.35);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .btn-book-service:hover {
            background: var(--primary-hover);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 128, 15, 0.45);
        }

        .btn-phone-call {
            background: var(--theme-navy);
            color: #ffffff;
            border: none;
            padding: 14px 24px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.2s ease;
            box-shadow: 0 4px 14px rgba(0, 16, 100, 0.25);
        }

        .btn-phone-call:hover {
            background: var(--theme-dark);
            color: #ffffff;
            transform: translateY(-2px);
        }

        /* BRANDS MARQUEE */
        .lp-brands-section {
            background-color: {{ $page->brands_bg_color ?: '#001064' }};
            color: {{ $page->brands_text_color ?: '#FFFFFF' }};
            padding: 22px 0 20px;
            overflow: hidden;
            width: 100%;
        }

        .lp-brands-title {
            text-align: center;
            font-size: 15px;
            font-weight: 900;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            margin-bottom: 14px;
            color: {{ $page->brands_text_color ?: '#FFFFFF' }};
        }

        .marquee-wrapper {
            position: relative;
            width: 100%;
            overflow: hidden;
            user-select: none;
            display: flex;
        }

        .marquee-content {
            display: flex;
            align-items: center;
            white-space: nowrap;
            animation: marqueeScroll 24s linear infinite;
        }

        .marquee-content span.brand-item {
            font-size: 18px;
            font-weight: 800;
            letter-spacing: 0.8px;
            padding: 0 16px;
            color: {{ $page->brands_text_color ?: '#FFFFFF' }};
            text-transform: uppercase;
        }

        .marquee-bullet {
            display: inline-block;
            width: 7px;
            height: 7px;
            background: #ffffff;
            border-radius: 50%;
            opacity: 0.85;
            margin: 0 4px;
        }

        @keyframes marqueeScroll {
            0% { transform: translateX(0%); }
            100% { transform: translateX(-50%); }
        }

        /* VALUE PROPOSITIONS / TRUST STRIP */
        .lp-trust-strip {
            background: #ffffff;
            padding: 24px 20px;
            border-bottom: 1px solid #eef2f6;
        }

        .lp-trust-container {
            max-width: 1100px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 28px 40px;
        }

        .lp-trust-item {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 15px;
            font-weight: 700;
            color: #1e293b;
        }

        .lp-trust-icon {
            color: var(--primary-theme);
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* SERVICE CARD SECTION */
        .lp-card-section {
            width: 100%;
            background: #f8fafc;
            padding: 40px 20px 60px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .essen-wm-card {
            width: 100%;
            max-width: 330px;
            background: #ffffff;
            border: 1px solid #dfe3e8;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .essen-wm-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 14px 34px rgba(0, 0, 0, 0.09);
        }

        .essen-wm-image-box {
            position: relative;
            width: 100%;
            height: 200px;
            overflow: hidden;
        }

        .essen-wm-image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .essen-wm-label {
            position: absolute;
            top: 15px;
            left: 15px;
            background: var(--primary-theme);
            color: #ffffff;
            font-size: 11px;
            font-weight: 800;
            padding: 6px 12px;
            border-radius: 6px;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .essen-wm-content {
            padding: 24px;
        }

        .essen-wm-title {
            margin: 0 0 8px;
            color: var(--text-dark);
            font-size: 20px;
            line-height: 1.3;
            font-weight: 800;
        }

        .essen-wm-description {
            margin: 0 0 16px;
            color: #536174;
            font-size: 13.5px;
            line-height: 1.5;
        }

        .essen-wm-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .essen-wm-list li {
            position: relative;
            padding-left: 22px;
            margin-bottom: 9px;
            color: #111827;
            font-size: 13.5px;
            line-height: 1.4;
        }

        .essen-wm-list li::before {
            content: "✓";
            position: absolute;
            left: 0;
            top: 0;
            color: var(--primary-theme);
            font-size: 16px;
            font-weight: 800;
        }

        .essen-wm-divider {
            height: 1px;
            background: #eef2f6;
            margin: 20px 0 16px;
        }

        .essen-wm-buttons {
            display: flex;
            gap: 10px;
        }

        .essen-wm-btn {
            flex: 1;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none !important;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
            border: none;
            transition: all 0.2s ease;
        }

        .essen-wm-learn {
            background: #fff7ed;
            color: var(--primary-theme) !important;
            border: 1px solid #fed7aa;
        }

        .essen-wm-learn:hover {
            background: #ffedd5;
        }

        .essen-wm-book {
            background: var(--theme-navy);
            color: #ffffff !important;
        }

        .essen-wm-book:hover {
            background: var(--primary-theme);
        }

        /* POPUP MODAL */
        .essen-wm-popup {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(1, 10, 53, 0.75);
            backdrop-filter: blur(4px);
            z-index: 999999;
            align-items: center;
            justify-content: center;
            padding: 16px;
        }

        .essen-wm-popup.active {
            display: flex;
        }

        .essen-wm-box {
            width: 100%;
            max-width: 480px;
            background: #ffffff;
            border-radius: 16px;
            padding: 30px;
            position: relative;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.35);
            animation: popupScale 0.22s ease-out;
        }

        @keyframes popupScale {
            from { opacity: 0; transform: scale(0.95) translateY(10px); }
            to { opacity: 1; transform: scale(1) translateY(0); }
        }

        .essen-wm-close {
            position: absolute;
            right: 18px;
            top: 16px;
            border: 0;
            background: none;
            color: #64748b;
            font-size: 30px;
            cursor: pointer;
            line-height: 1;
            transition: color 0.2s;
        }

        .essen-wm-close:hover {
            color: #0f172a;
        }

        .essen-wm-title {
            color: #111827;
            font-size: 22px;
            font-weight: 800;
            margin: 0 30px 6px 0;
        }

        .essen-wm-subtitle {
            color: #64748b;
            font-size: 14px;
            margin: 0 0 20px;
        }

        .essen-wm-form {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .essen-wm-form input,
        .essen-wm-form select {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 14.5px;
            color: #111827;
            background: #ffffff;
            outline: none;
            font-family: inherit;
            transition: border-color 0.15s, box-shadow 0.15s;
        }

        .essen-wm-form input:focus,
        .essen-wm-form select:focus {
            border-color: var(--primary-theme);
            box-shadow: 0 0 0 3px rgba(255, 128, 15, 0.2);
        }

        .essen-wm-submit {
            width: 100%;
            padding: 14px;
            margin-top: 4px;
            border: 0;
            border-radius: 8px;
            background: var(--primary-theme);
            color: #ffffff;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: background 0.2s;
            box-shadow: 0 4px 14px rgba(255, 128, 15, 0.35);
        }

        .essen-wm-submit:hover {
            background: var(--primary-hover);
        }

        .essen-wm-note {
            text-align: center;
            color: #94a3b8;
            font-size: 12px;
            margin: 14px 0 0;
        }

        /* FLOATING ACTION BUTTON */
        .lp-floating-action {
            position: fixed;
            bottom: 24px;
            right: 24px;
            z-index: 9999;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .lp-floating-btn {
            width: 58px;
            height: 58px;
            border-radius: 50%;
            background: #25D366; /* Official WhatsApp green for floating icon */
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            text-decoration: none;
            box-shadow: 0 6px 20px rgba(37, 211, 102, 0.45);
            transition: all 0.25s ease;
            position: relative;
        }

        .lp-floating-btn:hover {
            background: #20ba5a;
            color: #ffffff;
            transform: scale(1.08);
            box-shadow: 0 8px 25px rgba(37, 211, 102, 0.6);
        }

        .lp-floating-btn.call-btn {
            background: var(--primary-theme);
            color: #ffffff;
            border: none;
            box-shadow: 0 6px 18px rgba(255, 128, 15, 0.35);
        }

        .lp-floating-btn.call-btn:hover {
            background: var(--primary-hover);
            color: #ffffff;
        }

        /* FOOTER */
        .lp-footer {
            background: var(--theme-dark);
            color: #94a3b8;
            padding: 30px 20px;
            text-align: center;
            font-size: 13px;
        }

        .lp-footer a {
            color: #e2e8f0;
            text-decoration: none;
        }

        .lp-footer a:hover {
            color: var(--primary-theme);
        }

        /* PREVIEW BANNER */
        .preview-mode-bar {
            background: #fef3c7;
            color: #92400e;
            padding: 8px 16px;
            text-align: center;
            font-size: 13px;
            font-weight: 700;
            border-bottom: 1px solid #fde68a;
        }

        /* RESPONSIVE */
        @media (max-width: 991px) {
            .lp-hero-section {
                flex-direction: column;
                padding: 30px 20px;
                text-align: center;
            }

            .lphero-subtitle-box {
                text-align: center;
            }

            .lphero-cta-group {
                justify-content: center;
            }

            .lphero-title {
                font-size: 32px;
            }
        }

        @media (max-width: 600px) {
            .lphero-title {
                font-size: 26px;
            }

            .btn-book-service, .btn-phone-call {
                width: 100%;
                justify-content: center;
            }

            .lp-trust-container {
                gap: 16px 20px;
                justify-content: flex-start;
            }

            .lp-trust-item {
                font-size: 13.5px;
            }
        }
    </style>

    @if($page->custom_css)
        <style>
            {!! $page->custom_css !!}
        </style>
    @endif
</head>
<body>
    @if(isset($isPreview) && $isPreview)
        <div class="preview-mode-bar">
            <i class="bi bi-info-circle-fill me-1"></i> ADMIN PREVIEW MODE (Draft Page) — This is how visitors see your landing page.
        </div>
    @endif

    <!-- Injected Body Tracking Scripts -->
    @if($page->body_scripts)
        {!! $page->body_scripts !!}
    @endif

    <!-- TOP HEADER -->
    <header class="lp-top-bar">
        <a href="{{ url('/') }}" title="Essen Techs">
            <img src="{{ asset('img/EssenTechs-logo.jpeg') }}" alt="Essen Techs Doorstep Service" class="lp-logo"
                 onerror="this.src='{{ asset('img/logo.png') }}'">
        </a>
        @if($page->primary_phone)
            <a href="tel:{{ $page->primary_phone }}" class="lp-top-call">
                <i class="bi bi-telephone-fill"></i>
                <span>{{ $page->primary_phone }}</span>
            </a>
        @endif
    </header>

    <!-- HERO SECTION -->
    <section class="lp-hero-section">
        <!-- Hero Left: Technician Image -->
        <div class="lphero-image-col">
            @if($page->hero_image)
                <img src="{{ $page->hero_image_url }}" 
                     alt="{{ $page->hero_image_alt ?: $page->hero_title }}" 
                     class="lphero-img" 
                     loading="eager">
            @else
                <img src="{{ asset('storage/landing_pages/Copy-of-Copy-of-Heading.jpg') }}" 
                     alt="{{ $page->hero_image_alt ?: $page->hero_title }}" 
                     class="lphero-img" 
                     loading="eager"
                     onerror="this.src='{{ asset('img/service-2.jpg') }}'">
            @endif
        </div>

        <!-- Hero Right: Headline & CTA -->
        <div class="lphero-content-col">
            @if($page->hero_badge)
                <div class="lphero-badge-wrap">
                    <span class="lphero-badge">{{ $page->hero_badge }}</span>
                </div>
            @endif

            <h1 class="lphero-title">
                @php
                    $words = explode(' ', $page->hero_title);
                    $firstTwo = implode(' ', array_slice($words, 0, 2));
                    $rest = implode(' ', array_slice($words, 2));
                @endphp
                <span class="brand-accent">{{ $firstTwo }}</span>
                @if($rest)
                    <br>{{ $rest }}
                @endif
            </h1>

            @if($page->hero_subtitle)
                <div class="lphero-subtitle-box">
                    {{ $page->hero_subtitle }}
                </div>
            @endif

            <div class="lphero-cta-group">
                <button type="button" class="btn-book-service" id="openHeroModalBtn">
                    {{ $page->primary_cta_text ?: 'Book Washing Machine Service' }}
                </button>
                @if($page->primary_phone)
                    <a href="tel:{{ $page->primary_phone }}" class="btn-phone-call">
                        <i class="bi bi-telephone-fill"></i>
                        <span>{{ $page->primary_phone }}</span>
                    </a>
                @endif
            </div>
        </div>
    </section>

    <!-- BRANDS WE SERVE MARQUEE -->
    @if($page->show_brands && !empty($page->brands_list_array))
        <section class="lp-brands-section">
            <h2 class="lp-brands-title">{{ $page->brands_heading ?: 'BRANDS WE SERVE' }}</h2>
            <div class="marquee-wrapper">
                <div class="marquee-content">
                    @for($i = 0; $i < 2; $i++)
                        @foreach($page->brands_list_array as $brand)
                            <span class="brand-item">{{ $brand }}</span>
                            <span class="marquee-bullet"></span>
                        @endforeach
                    @endfor
                </div>
                <div class="marquee-content" aria-hidden="true">
                    @for($i = 0; $i < 2; $i++)
                        @foreach($page->brands_list_array as $brand)
                            <span class="brand-item">{{ $brand }}</span>
                            <span class="marquee-bullet"></span>
                        @endforeach
                    @endfor
                </div>
            </div>
        </section>
    @endif

    <!-- TRUST STRIP / VALUE PROPOSITIONS -->
    @if($page->show_trust_badges && !empty($page->trust_badges))
        <section class="lp-trust-strip">
            <div class="lp-trust-container">
                @foreach($page->trust_badges as $badge)
                    <div class="lp-trust-item">
                        <span class="lp-trust-icon"><i class="{{ $badge['icon'] ?? 'bi bi-check-circle-fill' }}"></i></span>
                        <span>{{ $badge['text'] }}</span>
                    </div>
                @endforeach
            </div>
        </section>
    @endif

    <!-- SERVICE OFFER CARD -->
    @if($page->show_service_card)
        <section class="lp-card-section" id="service-card-section">
            <div class="essen-wm-card">
                <!-- Card Image Box -->
                <div class="essen-wm-image-box">
                    @if($page->card_image)
                        <img src="{{ $page->card_image_url }}" 
                             alt="{{ $page->card_image_alt ?: $page->card_title }}" 
                             loading="lazy">
                    @else
                        <img src="{{ asset('storage/landing_pages/photo-1626806787461-102c1bfaaea1.jpeg') }}" 
                             alt="{{ $page->card_image_alt ?: $page->card_title }}" 
                             loading="lazy"
                             onerror="this.src='{{ asset('img/service-1.jpg') }}'">
                    @endif

                    @if($page->card_badge)
                        <span class="essen-wm-label">{{ $page->card_badge }}</span>
                    @endif
                </div>

                <!-- Card Content -->
                <div class="essen-wm-content">
                    <h3 class="essen-wm-title">{{ $page->card_title }}</h3>
                    
                    @if($page->card_description)
                        <p class="essen-wm-description">{{ $page->card_description }}</p>
                    @endif

                    <!-- Feature Points -->
                    @if(!empty($page->card_features_array))
                        <ul class="essen-wm-list">
                            @foreach($page->card_features_array as $feature)
                                <li>{{ $feature }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <div class="essen-wm-divider"></div>

                    <!-- Action Buttons -->
                    <div class="essen-wm-buttons">
                        <button type="button" class="essen-wm-btn essen-wm-learn" id="openLearnMoreBtn">
                            {{ $page->card_learn_more_text ?: 'Learn More' }}
                        </button>
                        <button type="button" class="essen-wm-btn essen-wm-book" id="openCardBookBtn">
                            {{ $page->card_book_now_text ?: 'Book Now' }}
                        </button>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- FOOTER -->
    <footer class="lp-footer">
        <div class="container">
            <p class="mb-1">© {{ date('Y') }} Essen Techs. All rights reserved. Doorstep Home Appliance Repair.</p>
            <p class="mb-0 small">
                <a href="{{ url('/') }}">Home</a> • 
                <a href="{{ url('/about') }}">About Us</a> • 
                <a href="{{ url('/contact') }}">Contact</a> • 
                <a href="{{ url('/terms') }}">Terms of Service</a>
            </p>
        </div>
    </footer>

    <!-- POPUP MODAL (WHATSAPP & LEAD CAPTURE) -->
    <div class="essen-wm-popup" id="essenWMPopup" role="dialog" aria-modal="true">
        <div class="essen-wm-box">
            <button type="button" class="essen-wm-close" id="essenCloseWMPopup" aria-label="Close modal">&times;</button>
            <h2 class="essen-wm-title">{{ $page->modal_title ?: 'Book Washing Machine Service' }}</h2>
            <p class="essen-wm-subtitle">{{ $page->modal_subtitle ?: 'Fill in your details and contact us on WhatsApp.' }}</p>

            <form class="essen-wm-form" id="essenWMWhatsAppForm">
                <input type="text" id="essenWMName" placeholder="Your Name" required>
                <input type="tel" id="essenWMPhone" placeholder="10-Digit Mobile Number" inputmode="numeric" maxlength="15" required>

                @if(!empty($page->service_options_array))
                    <select id="essenWMService" required>
                        <option value="">Select Service</option>
                        @foreach($page->service_options_array as $sOption)
                            <option value="{{ $sOption }}">{{ $sOption }}</option>
                        @endforeach
                    </select>
                @endif

                @if(!empty($page->problem_options_array))
                    <select id="essenWMProblem">
                        <option value="">Select Problem (Optional)</option>
                        @foreach($page->problem_options_array as $pOption)
                            <option value="{{ $pOption }}">{{ $pOption }}</option>
                        @endforeach
                    </select>
                @endif

                <input type="text" id="essenWMArea" placeholder="Your City / Service Area" required>

                <button type="submit" class="essen-wm-submit" id="submitLeadBtn">
                    <i class="bi bi-whatsapp fs-5"></i>
                    <span>Send Service Request on WhatsApp</span>
                </button>
            </form>

            <p class="essen-wm-note">
                Essen Techs · Guaranteed Doorstep Appliance Repair
            </p>
        </div>
    </div>

    <!-- FLOATING CONTACT BUTTON -->
    @if($page->show_floating_button)
        <div class="lp-floating-action">
            @if(in_array($page->floating_button_type, ['both', 'whatsapp']))
                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $page->whatsapp_number ?: '919746700889') }}?text={{ rawurlencode('Hello Essen Techs, I want to book ' . ($page->card_title ?: 'Appliance') . ' repair service.') }}" 
                   class="lp-floating-btn" 
                   target="_blank" 
                   rel="noopener"
                   title="Chat on WhatsApp">
                    <i class="bi bi-whatsapp"></i>
                </a>
            @endif

            @if(in_array($page->floating_button_type, ['both', 'call']) && $page->primary_phone)
                <a href="tel:{{ $page->primary_phone }}" 
                   class="lp-floating-btn call-btn" 
                   title="Call Technician Now">
                    <i class="bi bi-telephone-fill"></i>
                </a>
            @endif
        </div>
    @endif

    <script>
    (function(){
        const popup = document.getElementById("essenWMPopup");
        const closeBtn = document.getElementById("essenCloseWMPopup");
        const form = document.getElementById("essenWMWhatsAppForm");
        const heroOpenBtn = document.getElementById("openHeroModalBtn");
        const cardBookBtn = document.getElementById("openCardBookBtn");
        const learnMoreBtn = document.getElementById("openLearnMoreBtn");

        const targetWhatsapp = "{{ preg_replace('/[^0-9]/', '', $page->whatsapp_number ?: '919746700889') }}";
        const pageSlug = "{{ $page->slug }}";
        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';

        function openModal() {
            if (popup) {
                popup.classList.add("active");
                document.body.style.overflow = "hidden";
            }
        }

        function closeModal() {
            if (popup) {
                popup.classList.remove("active");
                document.body.style.overflow = "";
            }
        }

        if (heroOpenBtn) heroOpenBtn.addEventListener("click", openModal);
        if (cardBookBtn) cardBookBtn.addEventListener("click", openModal);
        if (learnMoreBtn) learnMoreBtn.addEventListener("click", openModal);
        if (closeBtn) closeBtn.addEventListener("click", closeModal);

        if (popup) {
            popup.addEventListener("click", function(e) {
                if (e.target === popup) closeModal();
            });
        }

        // Form Submission with AJAX lead saving & WhatsApp trigger
        if (form) {
            form.addEventListener("submit", function(e) {
                e.preventDefault();

                const name = document.getElementById("essenWMName")?.value.trim() || '';
                const phone = document.getElementById("essenWMPhone")?.value.trim() || '';
                const service = document.getElementById("essenWMService")?.value || '{{ $page->card_title }}';
                const problem = document.getElementById("essenWMProblem")?.value || '';
                const area = document.getElementById("essenWMArea")?.value.trim() || '';

                if (!name || !phone) {
                    alert("Please enter your name and contact number.");
                    return;
                }

                const submitBtn = document.getElementById("submitLeadBtn");
                if (submitBtn) {
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '<i class="bi bi-hourglass-split"></i> <span>Connecting...</span>';
                }

                // Send lead to backend API
                fetch("{{ route('landing.lead.submit') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json",
                        "X-CSRF-TOKEN": csrfToken
                    },
                    body: JSON.stringify({
                        name: name,
                        mobile: phone,
                        service: service,
                        problem: problem,
                        area: area,
                        slug: pageSlug
                    })
                })
                .then(res => res.json())
                .then(data => {
                    closeModal();
                    if (data.whatsapp_url) {
                        window.location.href = data.whatsapp_url;
                    } else {
                        // Fallback WhatsApp redirect
                        const text = `Hello Essen Techs,\nName: ${name}\nMobile: ${phone}\nService: ${service}\nProblem: ${problem}\nArea: ${area}`;
                        window.location.href = `https://wa.me/${targetWhatsapp}?text=${encodeURIComponent(text)}`;
                    }
                })
                .catch(err => {
                    // Fallback directly to WhatsApp even if offline
                    closeModal();
                    const text = `Hello Essen Techs,\nName: ${name}\nMobile: ${phone}\nService: ${service}\nProblem: ${problem}\nArea: ${area}`;
                    window.location.href = `https://wa.me/${targetWhatsapp}?text=${encodeURIComponent(text)}`;
                });
            });
        }
    })();
    </script>
</body>
</html>
