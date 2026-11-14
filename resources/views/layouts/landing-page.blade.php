<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'EssenTechs - AC Repair Website')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Dynamic SEO Meta --}}
    <meta name="description" content="@yield('meta_description', 'Best AC repair and home appliance services in Kerala by EssenTechs.')">
    <meta name="keywords" content="@yield('meta_keywords', 'AC repair, appliance service, refrigerator repair, washing machine repair')">
    <link rel="canonical" href="@yield('canonical', url()->current())">

    {{-- Schema / Structured Data --}}
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;800&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;800&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    </noscript>

    <!-- Icon Font Stylesheet (Single Deduplicated Font Awesome + Bootstrap Icons loaded asynchronously) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" media="print" onload="this.media='all'">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    </noscript>

    <!-- Libraries Stylesheet (Asynchronously loaded non-critical CSS) -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript>
        <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    </noscript>

    <!-- Customized Bootstrap Stylesheet (Critical) -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet (Critical) -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('style')
    @yield('preload')
    <style>
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

    @if(app()->environment('production') && !in_array(request()->getHost(), ['127.0.0.1', 'localhost']))
    <!-- Google Tag Manager & Google Analytics (Loaded asynchronously on idle in production) -->
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-SYRME1RV2V');

        function loadAnalyticsServices() {
            var gaScript = document.createElement('script');
            gaScript.async = true;
            gaScript.src = 'https://www.googletagmanager.com/gtag/js?id=G-SYRME1RV2V';
            document.head.appendChild(gaScript);

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
        }

        if ('requestIdleCallback' in window) {
            window.requestIdleCallback(loadAnalyticsServices, { timeout: 3500 });
        } else {
            window.addEventListener('load', function() {
                setTimeout(loadAnalyticsServices, 2000);
            });
        }
    </script>
    @endif
</head>

<body>
    @if(app()->environment('production') && !in_array(request()->getHost(), ['127.0.0.1', 'localhost']))
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TT25RCWH" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @endif

    <!-- Header Start -->
    @include('common.landing-header')
    <!-- Header End -->

    <!-- Content Start -->
    @yield('content')
    <!-- Content End -->

    <!-- Footer Start -->
    @include('common.landing-footer')
    <!-- Footer End -->

    <!-- WhatsApp & Call Buttons Start -->
    <div
        style="position: fixed; top: 50%; right: 20px; transform: translateY(-50%); z-index: 9999; display: flex; flex-direction: column; gap: 15px;">
        <a href="https://wa.me/919746700889" target="_blank" rel="noopener noreferrer" class="btn btn-success"
            style="border-radius: 50%; padding: 18px 20px;" aria-label="Chat with EssenTechs on WhatsApp">
            <i class="fab fa-whatsapp fa-2x text-white" aria-hidden="true"></i>
        </a>
        <a href="tel:+919746700889" class="btn btn-primary" style="border-radius: 50%; padding: 18px 20px;" aria-label="Call EssenTechs customer support">
            <i class="fas fa-phone-alt fa-2x text-white" aria-hidden="true"></i>
        </a>
    </div>
    <!-- WhatsApp & Call Buttons End -->

    <!-- JavaScript Libraries with defer to prevent render blocking (Upgraded to secure jQuery 3.7.1) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}" defer></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}" defer></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}" defer></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}" defer></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}" defer></script>
    <script src="{{ asset('lib/parallax/parallax.min.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    @yield('script')
</body>

</html>
