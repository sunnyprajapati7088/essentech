<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'EssenTechs - Home Appliance Repair Service in Kerala')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Dynamic SEO Meta --}}
    <meta name="description" content="@yield('meta_description', 'Reliable home appliance repair services in Kochi, Kerala by EssenTechs. Fast on-site repair for AC, washing machine, refrigerator, and microwave oven.')">
    <meta name="keywords" content="@yield('meta_keywords', 'AC repair, appliance service, refrigerator repair, washing machine repair, microwave oven service, Kochi, Kerala')">
    <meta name="robots" content="@yield('robots', 'index, follow, max-snippet:-1, max-video-preview:-1, max-image-preview:large')">
    <link rel="canonical" href="@yield('canonical', url()->current())">

    {{-- Open Graph / Social Meta --}}
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:title" content="@yield('title', 'EssenTechs - Home Appliance Repair Service in Kerala')">
    <meta property="og:description" content="@yield('meta_description', 'Reliable home appliance repair services in Kochi, Kerala by EssenTechs.')">
    <meta property="og:url" content="@yield('canonical', url()->current())">
    <meta property="og:site_name" content="essentechs.com">
    <meta property="og:image" content="{{ asset('img/EssenTechs-logo.jpeg') }}">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'EssenTechs - Home Appliance Repair Service in Kerala')">
    <meta name="twitter:description" content="@yield('meta_description', 'Reliable home appliance repair services in Kochi, Kerala by EssenTechs.')">
    <meta name="twitter:image" content="{{ asset('img/EssenTechs-logo.jpeg') }}">

    {{-- Default Global Structured Data --}}
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@graph": [
        {
          "@@type": "Organization",
          "@@id": "https://essentechs.com/#organization",
          "name": "Essentechs",
          "url": "https://essentechs.com/",
          "logo": "https://essentechs.com/img/EssenTechs-logo.jpeg",
          "email": "info@essentechs.com",
          "telephone": "+919746700889",
          "contactPoint": {
            "@@type": "ContactPoint",
            "telephone": "+91-9746700889",
            "contactType": "customer service",
            "areaServed": "IN",
            "availableLanguage": ["English", "Malayalam", "Hindi"]
          }
        },
        {
          "@@type": "LocalBusiness",
          "@@id": "https://essentechs.com/#localbusiness",
          "name": "Essentechs Home Appliance Repair",
          "image": "https://essentechs.com/img/EssenTechs-logo.jpeg",
          "telephone": "+919746700889",
          "email": "info@essentechs.com",
          "priceRange": "₹₹",
          "address": {
            "@@type": "PostalAddress",
            "streetAddress": "Civil Line Kakkanad - Kunneparambu Road, Office No. KRA-52",
            "addressLocality": "Kochi",
            "addressRegion": "Kerala",
            "postalCode": "682030",
            "addressCountry": "IN"
          },
          "geo": {
            "@@type": "GeoCoordinates",
            "latitude": 10.0159,
            "longitude": 76.3419
          },
          "openingHoursSpecification": {
            "@@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            "opens": "08:00",
            "closes": "21:00"
          }
        }
      ]
    }
    </script>

    {{-- Additional Page-Specific Schema --}}
    @yield('schema')

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}" />

    <!-- Google Web Fonts with font-display: swap -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;800&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet (Deduplicated Font Awesome) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('style')
    <style>
        .skip-link {
            position: absolute;
            top: -60px;
            left: 10px;
            background: #001064;
            color: #ffffff;
            padding: 10px 18px;
            z-index: 100000;
            transition: top 0.2s ease;
            text-decoration: none;
            font-weight: 700;
            border-radius: 4px;
        }
        .skip-link:focus {
            top: 10px;
            outline: 3px solid #FF800F;
        }
        .owl-carousel .owl-item img {
            width: auto !important;
            height: auto;
        }
        .owl-carousel .owl-stage {
            transition-timing-function: linear !important;
        }
        .item {
            text-align: center;
        }
        .item img {
            max-width: 100%;
        }
    </style>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SYRME1RV2V"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-SYRME1RV2V');
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TT25RCWH');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Skip to main content for keyboard & accessibility tree navigation -->
    <a href="#main-content" class="skip-link">Skip to main content</a>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TT25RCWH" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status">
            <span class="visually-hidden">Loading EssenTechs...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Header Landmark Start -->
    <header>
        @include('common.header')
    </header>
    <!-- Header Landmark End -->

    <!-- Main Landmark Start -->
    <main id="main-content" tabindex="-1">
        @yield('content')
    </main>
    <!-- Main Landmark End -->

    <!-- Footer Landmark Start -->
    <footer>
        @include('common.footer')
    </footer>
    <!-- Footer Landmark End -->

    <!-- WhatsApp & Call Floating Buttons Start -->
    <div
        style="position: fixed; top: 50%; right: 20px; transform: translateY(-50%); z-index: 9999; display: flex; flex-direction: column; gap: 15px;">
        <a href="https://wa.me/919746700889" target="_blank" rel="noopener noreferrer" class="btn btn-success"
            style="border-radius: 50%; padding: 18px 20px;" aria-label="Chat with EssenTechs on WhatsApp">
            <i class="fab fa-whatsapp fa-2x text-white" aria-hidden="true"></i>
        </a>
        <a href="tel:+919746700889" class="btn btn-primary" style="border-radius: 50%; padding: 18px 20px;" aria-label="Call EssenTechs customer support at +91 97467 00889">
            <i class="fas fa-phone-alt fa-2x text-white" aria-hidden="true"></i>
        </a>
    </div>
    <!-- WhatsApp & Call Floating Buttons End -->

    <!-- JavaScript Libraries moved to bottom with defer to prevent render blocking -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/parallax/parallax.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('script')
</body>

</html>
