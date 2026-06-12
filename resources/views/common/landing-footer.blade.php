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
                    At EssenTechs, we know appliance issues can strike anytime. That’s why we offer hassle-free booking, fast response times, and round-the-clock customer support. Whether it’s day or night, our expert technicians are just one call away — ready to restore comfort and convenience to your home.
                </p>
            </div>
        </div>

        <!-- 5 Columns Layout -->
        <div class="row g-5">

            <!-- Get in Touch -->
            <div class="col-lg-6 col-md-6">
                <h5 class="text-light mb-4">Get In Touch</h5>
                <p><i class="fa fa-map-marker-alt me-3"></i>Civil line Kakkanad- Kunneparambu, Road
                    Office no.KRA, 52 Kochi Kerala 682030</p>
                <p><i class="fa fa-map-marker-alt me-3"></i>Trusted Home Appliance Repair – Ernakulam</p>
                <p><i class="fa fa-phone-alt me-3"></i> +919746700889 &nbsp; &nbsp; &nbsp;| &nbsp; &nbsp; &nbsp;<i class="fa fa-envelope me-3"></i>info@essentechs.com</p>

                <!-- Social Icons -->
                {{-- <div class="d-flex mt-3">
                    <a class="btn btn-square rounded-circle me-1" href="https://x.com/TechsEssen?t=cIkK3UK98uo5XyOXJZLiwA&s=09" target="_blank">X</a>
                    <a class="btn btn-square rounded-circle me-1" href="https://www.facebook.com/profile.php?id=61579061198660" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square rounded-circle me-1" href="https://www.instagram.com/essentechs/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-square rounded-circle me-1" href="https://www.linkedin.com/in/essentechs-info-57464b37b/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div> --}}
            </div>

            <!-- Our Services -->

        <div class="col-lg-2 col-md-2"></div>
            <!-- Quick Links -->
            <div class="col-lg-4 col-md-6">
                <a class="btn btn-link"  href="{{ url('/terms') }}">Terms & Condition</a>
                <br>&copy; <a href="#">EssenTechs</a>, All Right Reserved.<br>
            </div>

            <!-- Dynamic Menus -->


        </div>
    </div>

    <!-- Copyright -->

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
    const modalEl = document.getElementById('popupServiceModal');
    const popupModal = new bootstrap.Modal(modalEl);
    const pageKey = "popupClosed_" + window.location.pathname;

    if (!sessionStorage.getItem(pageKey)) {
        setTimeout(() => {
            popupModal.show();
        }, 2000);
    }

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


