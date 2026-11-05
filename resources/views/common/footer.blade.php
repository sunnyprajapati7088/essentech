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

<footer class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s" aria-label="Footer">
    <div class="container py-5">
        <!-- EssenTechs Logo & Description -->
        <div class="row mb-5">
            <div class="col-lg-8 col-md-10">
                <div class="h3 fw-bold text-white mb-4 d-flex align-items-center">
                    <img class="img-fluid me-3" src="{{ asset('img/icon/icon-02-light.png') }}" alt="EssenTechs Logo" width="40" height="40">
                    EssenTechs
                </div>
                <p class="text-white">
                    At EssenTechs, your comfort comes first. We deliver fast, dependable, and cost-effective repair
                    services you can count on. With easy booking and 24/7 support, our expert technicians are always
                    ready to restore your home appliances to perfect working condition. We do more than fix appliances — we bring peace of mind to your home.
                </p>
            </div>
        </div>

        <!-- 5 Columns Layout -->
        <div class="row g-5">

            <!-- Get in Touch -->
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Get In Touch</h5>
                <p class="text-white-50 mb-2">
                    <i class="fa fa-map-marker-alt me-3 text-primary" aria-hidden="true"></i>
                    Civil Line Kakkanad - Kunneparambu Road<br>
                    <span class="ps-4">Office No. KRA-52, Kochi, Kerala 682030</span>
                </p>
                <p class="text-white-50 mb-2">
                    <i class="fa fa-phone-alt me-3 text-primary" aria-hidden="true"></i>
                    <a href="tel:+919746700889" class="text-white text-decoration-none" aria-label="Call EssenTechs at +91 97467 00889">
                        +91 97467 00889
                    </a>
                </p>
                <p class="text-white-50 mb-3" style="white-space: nowrap">
                    <i class="fa fa-envelope me-3 text-primary" aria-hidden="true"></i>
                    <a href="mailto:info@essentechs.com" class="text-white text-decoration-none" aria-label="Email EssenTechs at info@essentechs.com">
                        info@essentechs.com
                    </a>
                </p>

                <!-- Social Icons with Accessible Names -->
                <div class="d-flex mt-3">
                    <a class="btn btn-square rounded-circle me-1" href="https://x.com/TechsEssen?t=cIkK3UK98uo5XyOXJZLiwA&s=09" target="_blank" rel="noopener noreferrer" aria-label="Follow EssenTechs on X">
                        <span class="fw-bold">X</span>
                    </a>
                    <a class="btn btn-square rounded-circle me-1" href="https://www.facebook.com/profile.php?id=61579061198660" target="_blank" rel="noopener noreferrer" aria-label="Follow EssenTechs on Facebook">
                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-square rounded-circle me-1" href="https://www.instagram.com/essentechs/" target="_blank" rel="noopener noreferrer" aria-label="Follow EssenTechs on Instagram">
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-square rounded-circle me-1" href="https://www.linkedin.com/in/essentechs-info-57464b37b/" target="_blank" rel="noopener noreferrer" aria-label="Follow EssenTechs on LinkedIn">
                        <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <!-- Our Services -->
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Our Services</h5>
                <a class="btn btn-link text-white-50 text-start" href="{{ url('/ac/') }}">Air Conditioner (AC) Repair</a>
                <a class="btn btn-link text-white-50 text-start" href="{{ url('/microwave-oven/') }}">Microwave Oven Repair</a>
                <a class="btn btn-link text-white-50 text-start" href="{{ url('/service/washing-machine-repair') }}">Washing Machine Repair</a>
                <a class="btn btn-link text-white-50 text-start" href="{{ url('/service/refrigerator-repair') }}">Refrigerator Repair & Service</a>
                <a class="btn btn-link text-white-50 text-start" href="{{ url('/service/installation-uninstallation') }}">Installation & Uninstallation</a>
                <a class="btn btn-link text-white-50 text-start" href="{{ url('/service/amc') }}">Annual Maintenance Contracts (AMC)</a>
                <a class="btn btn-link text-primary text-start fw-semibold" href="{{ url('/ads-washing-machine-repair') }}">Special Ad Offers</a>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Quick Links</h5>
                <a class="btn btn-link text-white-50 text-start" href="{{ url('/about') }}">About Us</a>
                <a class="btn btn-link text-white-50 text-start" href="{{ url('/blog') }}">Blog & Articles</a>
                <a class="btn btn-link text-white-50 text-start" href="{{ url('/contact') }}">Contact Us</a>
                <a class="btn btn-link text-white-50 text-start" href="{{ url('/gallery') }}">Service Gallery</a>
                <a class="btn btn-link text-white-50 text-start" href="{{ url('/services') }}">All Services</a>
                <a class="btn btn-link text-white-50 text-start" href="{{ url('/terms') }}">Terms & Conditions</a>
            </div>

            <!-- Dynamic Menus -->
            @foreach($footerMenus as $menu)
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">{{ $menu->title }}</h5>
                    @foreach($menu->page as $page)
                        <a class="btn btn-link text-white-50 text-start"
                           href="{{ route('pages.show', ['menu_slug' => $menu->slug, 'page_slug' => $page->slug]) }}">
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
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 text-white-50">
                    &copy; <a href="{{ url('/') }}" class="text-white text-decoration-none">EssenTechs</a>. All Rights Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end text-white-50">
                    Trusted Appliance Care Across Kochi & Ernakulam
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- Popup Modal Start -->
<div class="modal fade" id="popupServiceModal" tabindex="-1" role="dialog" aria-modal="true" aria-labelledby="popupServiceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="popupServiceModalLabel">Need Emergency Repair Service?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close emergency service dialog"></button>
            </div>
            <div class="modal-body">
                <div class="row text-center g-3">
                    <div class="col-4">
                        <a href="{{ url('/ac/') }}" class="text-decoration-none text-dark">
                            <img src="{{ asset('img/air-conditioner.png') }}" alt="Air Conditioner Repair" width="40" height="40">
                            <div class="small mt-2 fw-semibold">AC Repair</div>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="{{ url('/service/refrigerator-repair') }}" class="text-decoration-none text-dark">
                            <img src="{{ asset('img/fridge-repair.png') }}" alt="Refrigerator Repair" width="40" height="40">
                            <div class="small mt-2 fw-semibold">Refrigerator</div>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="{{ url('/service/washing-machine-repair') }}" class="text-decoration-none text-dark">
                            <img src="{{ asset('img/washer.png') }}" alt="Washing Machine Repair" width="40" height="40">
                            <div class="small mt-2 fw-semibold">Washing Machine</div>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="{{ url('/microwave-oven/') }}" class="text-decoration-none text-dark">
                            <img src="{{ asset('img/microwave-oven.png') }}" alt="Microwave Oven Repair" width="40" height="40">
                            <div class="small mt-2 fw-semibold">Microwave Oven</div>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="{{ url('/service/installation-uninstallation') }}" class="text-decoration-none text-dark">
                            <img src="{{ asset('img/wrench.png') }}" alt="Installation and Uninstallation" width="40" height="40">
                            <div class="small mt-2 fw-semibold">Installation</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="tel:+919746700889" class="btn btn-primary" aria-label="Call EssenTechs now at +91 97467 00889">Call Now</a>
            </div>
        </div>
    </div>
</div>
<!-- Popup Modal End -->

<!-- JavaScript for Popup Modal -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let modalEl = document.getElementById('popupServiceModal');
        if (modalEl) {
            let popupModal = new bootstrap.Modal(modalEl);
            let pageKey = "popupClosed_" + window.location.pathname;

            if (!sessionStorage.getItem(pageKey)) {
                setTimeout(() => {
                    popupModal.show();
                }, 3000);

                modalEl.addEventListener('hidden.bs.modal', function () {
                    sessionStorage.setItem(pageKey, "1");
                });
            }
        }
    });
</script>
<script>
    $(document).ready(function() {
        if ($('.partner-carousel').length) {
            $('.partner-carousel').owlCarousel({
                loop: true,
                margin: 20,
                nav: false,
                dots: false,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplaySpeed: 1000,
                smartSpeed: 1000,
                slideTransition: 'linear',
                autoplayHoverPause: false,
                responsive: {
                    0: { items: 2 },
                    576: { items: 3 },
                    768: { items: 4 },
                    992: { items: 5 }
                }
            });
        }

        if ($('.testimonial-carousel').length) {
            $(".testimonial-carousel").owlCarousel({
                autoplay: true,
                smartSpeed: 1000,
                items: 1,
                dots: false,
                loop: true,
                nav: true,
                navText : [
                    '<i class="bi bi-chevron-left" aria-label="Previous testimonial"></i>',
                    '<i class="bi bi-chevron-right" aria-label="Next testimonial"></i>'
                ]
            });
        }
    });

    document.addEventListener("DOMContentLoaded", function () {
        const form = document.querySelector("form");
        const submitBtn = document.getElementById("submitBtn");
        const loadingBtn = document.getElementById("loadingBtn");

        if (form && submitBtn && loadingBtn) {
            form.addEventListener("submit", function () {
                submitBtn.classList.add("d-none");
                loadingBtn.classList.remove("d-none");
            });
        }
    });

    if (typeof $.fn.counterUp !== 'undefined' && $('[data-toggle="counter-up"]').length) {
        $('[data-toggle="counter-up"]').counterUp({
            delay: 10,
            time: 1500
        });
    }
</script>
