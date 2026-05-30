<!-- Footer Start -->
@php
    use App\Models\Menu;

    // Fetch top-level menus with pages only (limit 2 for footer)
    $footerMenus = Menu::with('page')
    ->whereNull('parent_id')
    ->where('status', 1)
    ->whereHas('page', function ($q) {
        $q->whereNotNull('menu_id');
    })
    ->orderBy('order', 'asc')
    ->take(2)
    ->get();
@endphp

<div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <!-- EssenTechs Logo & Description -->
        <div class="row mb-5">
            <div class="col-6">
                <h1 class="text-white mb-4">
                    <img class="img-fluid me-3" src="{{ asset('img/icon/icon-02-light.png') }}" alt="">
                    EssenTechs
                </h1>
                <p class="text-white">
                    At EssenTechs, your comfort comes first. We deliver fast, dependable, and cost-effective repair
                    services you can count on. With easy booking and 24/7 support, our expert technicians are always
                    ready to restore your appliances to perfect working condition. Thank you for choosing EssenTechs —
                    We do more than fix appliances — we bring peace of mind to your home.
                </p>
            </div>
        </div>

        <!-- 5 Columns Layout -->
        <div class="row g-5">

            <!-- Get in Touch -->
            <div class="col-lg-2 col-md-6">
                <h5 class="text-light mb-4">Get In Touch</h5>
                <p><i class="fa fa-map-marker-alt me-3"></i>Civil line Kakkanad- Kunneparambu, road
                    Office no.KRA,52 Kochi Kerala 682030</p>
                <p><i class="fa fa-phone-alt me-3"></i> +919746700889</p>
                <p style="white-space: nowrap"><i class="fa fa-envelope me-3"></i>info@essentechs.com</p>

                <!-- Social Icons -->
                <div class="d-flex mt-3">
                    <a class="btn btn-square rounded-circle me-1" href="https://x.com/TechsEssen?t=cIkK3UK98uo5XyOXJZLiwA&s=09" target="_blank">X</a>
                    <a class="btn btn-square rounded-circle me-1" href="https://www.facebook.com/profile.php?id=61579061198660" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square rounded-circle me-1" href="https://www.instagram.com/essentechs/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-square rounded-circle me-1" href="https://www.linkedin.com/in/essentechs-info-57464b37b/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <!-- Our Services -->
            <div class="col-lg-2 col-md-6">
                <h5 class="text-light mb-4">Our Services</h5>
                <a class="btn btn-link" href="{{ route('acServices') }}">Air Conditioner (AC) Repair</a>
                <a class="btn btn-link" href="{{ route('washingMachine') }}">Washing Machine Repair</a>
                <a class="btn btn-link" href="{{ route('refrigerator') }}">Refrigerator Repair & Service</a>
                <a class="btn btn-link" href="{{ route('microWaveOpen') }}">Microwave Oven Repair</a>
                <a class="btn btn-link" href="{{ route('installationUninstallation') }}">Installation & Uninstallation</a>
                <a class="btn btn-link" href="{{ route('amc') }}">Annual Maintenance Contracts (AMC)</a>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6">
                <h5 class="text-light mb-4">Quick Links</h5>
                <a class="btn btn-link" href="{{ url('/about') }}">About Us</a>
                <a class="btn btn-link" href="{{ url('/blog') }}" target="_blank">Blog</a>
                <a class="btn btn-link" href="{{ url('/contact') }}">Contact Us</a>
                <a class="btn btn-link" href="{{ url('/gallery') }}">Gallery</a>
                <a class="btn btn-link" href="{{ url('/services') }}">Our Services</a>
                <a class="btn btn-link" href="{{ url('/terms') }}">Terms & Condition</a>
            </div>

            <!-- Dynamic Menus -->
            @foreach($footerMenus as $menu)
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">{{ $menu->title }}</h5>
                    @foreach($menu->page as $page)
                        <a class="btn btn-link"
                           href="{{ route('pages.show', ['menu_slug' => $menu->slug, 'page_slug' => $page->slug]) }}"
                           target="_blank">
                            {{ $page->title }}
                        </a>
                    @endforeach
                </div>
            @endforeach

        </div>
    </div>

    <!-- Copyright -->
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">EssenTechs</a>, All Right Reserved.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Popup Modal Start -->
<div class="modal fade" id="popupServiceModal" tabindex="-1" aria-labelledby="popupServiceModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="popupServiceModalLabel">Need Emergency Repair Service?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row text-center">
                    <div class="col-4">
                        <img src="{{ asset('img/air-conditioner.png') }}" alt="Refrigerator"
                            style="width: 40px; height: 40px;">
                        <div class="small mt-2">AC Repair</div>
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('img/fridge-repair.png') }}" alt="Washing Machine"
                            style="width: 40px; height: 40px;">
                        <div class="small mt-2">Refrigerator Repair & Service</div>
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('img/washer.png') }}" alt="Microwave Oven"
                            style="width: 40px; height: 40px;">
                        <div class="small mt-2">Washing Machine Repair</div>
                    </div>
                    <div class="col-2">
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('img/microwave-oven.png') }}" alt="AC Repair"
                            style="width: 40px; height: 40px;">
                        <div class="small mt-2">Microwave Oven Repair</div>
                    </div>

                     <div class="col-4">
                        <img src="{{ asset('img/wrench.png') }}" alt="AC Repair"
                            style="width: 40px; height: 40px;">
                        <div class="small mt-2">Installation & Uninstallation</div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="tel:+919746700889" class="btn btn-primary">Call Now</a>
            </div>
        </div>
    </div>
</div>
<!-- Popup Modal End -->

<!-- JavaScript for Popup Modal -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let modalEl = document.getElementById('popupServiceModal');
        let popupModal = new bootstrap.Modal(modalEl);

        // Unique key per page
        let pageKey = "popupClosed_" + window.location.pathname;

        // If user already closed on this page (in current load), don’t reopen
        if (sessionStorage.getItem(pageKey)) {
            return;
        }

        // Show after 2 seconds
        setTimeout(() => {
            popupModal.show();
        }, 2000);

        // When modal is closed, mark it as closed for this session (until navigation/refresh)
        modalEl.addEventListener('hidden.bs.modal', function () {
            sessionStorage.setItem(pageKey, "1");
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.partner-carousel').owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 1,
            autoplaySpeed: 2000,
            smartSpeed: 2000,
            slideTransition: 'linear',
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 2
                },
                576: {
                    items: 3
                },
                768: {
                    items: 4
                },
                992: {
                    items: 5
                }
            }
        });

        setInterval(function() {
            $('.partner-carousel').trigger('next.owl.carousel');
        }, 2000);
        $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        dots: false,
        loop: true,
        nav: true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });
    });
    document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const submitBtn = document.getElementById("submitBtn");
    const loadingBtn = document.getElementById("loadingBtn");

    form.addEventListener("submit", function () {
        // Hide normal button, show loader button
        submitBtn.classList.add("d-none");
        loadingBtn.classList.remove("d-none");
    });
});
// Facts counter
$('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 2000
});
</script>


