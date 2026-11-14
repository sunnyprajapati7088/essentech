@extends('layouts.app')

@section('title', 'EssenTechs - Top Home Appliance & AC Repair Services in Kerala')
@section('meta_description', 'EssenTechs provides trusted, fast on-site repair services in Kochi, Kerala for ACs, washing machines, refrigerators, and microwave ovens. Call +91 97467 00889.')
@section('meta_keywords', 'AC repair Kochi, appliance service Kerala, refrigerator repair, washing machine repair, microwave oven service')
@section('canonical', url('/'))

@section('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@graph": [
    {
      "@@type": "WebSite",
      "@@id": "https://essentechs.com/#website",
      "url": "https://essentechs.com/",
      "name": "EssenTechs",
      "description": "Leading home appliance repair service provider in Kochi, Kerala",
      "publisher": {
        "@@id": "https://essentechs.com/#organization"
      }
    }
  ]
}
</script>
@endsection

@section('preload')
<link rel="preload" as="image" href="{{ asset('img/carousel-1-mobile.webp') }}" media="(max-width: 768px)" type="image/webp" fetchpriority="high">
<link rel="preload" as="image" href="{{ asset('img/carousel-1.webp') }}" media="(min-width: 769px)" type="image/webp" fetchpriority="high">
@endsection

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <picture>
                        <source media="(max-width: 768px)" srcset="{{ asset('img/carousel-1-mobile.webp') }}" type="image/webp">
                        <source srcset="{{ asset('img/carousel-1.webp') }}" type="image/webp">
                        <img class="w-100" src="{{ asset('img/carousel-1.jpg') }}" alt="EssenTechs certified technicians repairing home appliances in Kochi" width="1920" height="700" fetchpriority="high" loading="eager" decoding="async">
                    </picture>
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-4 animated slideInDown">We Provide Best Repair Services in Kerala</h1>
                                    <p class="fs-5 text-light mb-4 pb-2 mx-sm-5 animated slideInDown">Experience fast,
                                        reliable, and affordable repairs for all your home appliances. Whether it’s an AC,
                                        refrigerator, washing machine, or microwave, our skilled technicians use genuine
                                        parts to restore smooth performance—right at your doorstep.</p>
                                    <a href="{{ url('/about') }}" class="btn btn-primary py-3 px-5 animated slideInDown" aria-label="Explore more about EssenTechs">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <picture>
                        <source media="(max-width: 768px)" srcset="{{ asset('img/carousel-2-mobile.webp') }}" type="image/webp">
                        <source srcset="{{ asset('img/carousel-2.webp') }}" type="image/webp">
                        <img class="w-100" src="{{ asset('img/carousel-2.jpg') }}" alt="Reliable appliance repair support for homes and businesses in Kerala" width="1920" height="700" loading="lazy" decoding="async">
                    </picture>
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <p class="display-4 text-white mb-4 animated slideInDown fw-bold">Your Comfort, Our Priority and Honesty</p>
                                    <p class="fs-5 text-light mb-4 pb-2 mx-sm-5 animated slideInDown">Reliable Appliance
                                        Repairs for Homes & Businesses. Same-Day Service | Budget-Friendly Rates | 100%
                                        Genuine Parts. EssenTechs brings comfort back to your life with fast, expert repairs
                                        you can trust. 📞 Book Today — Help is Just a Call Away!</p>
                                    <a href="{{ url('/about') }}" class="btn btn-primary py-3 px-5 animated slideInDown" aria-label="Explore more about EssenTechs services">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev" aria-label="Previous slide">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next" aria-label="Next slide">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Excellent Services Section -->
    <div class="text-center mb-4">
        <h2 class="mb-2 fw-bold">Trusted Appliance Repair Services in Kochi</h2>
        <div class="d-inline-flex align-items-center justify-content-center bg-light border rounded-pill px-4 py-2 shadow-sm my-2">
            <span class="fw-bold text-dark me-2 fs-5">4.8</span>
            <div class="text-warning me-2">
                <i class="fas fa-star" aria-hidden="true"></i>
                <i class="fas fa-star" aria-hidden="true"></i>
                <i class="fas fa-star" aria-hidden="true"></i>
                <i class="fas fa-star" aria-hidden="true"></i>
                <i class="fas fa-star" aria-hidden="true"></i>
            </div>
            <span class="text-secondary small fw-semibold">Rated on <strong>Google (427+ Verified Customer Reviews)</strong></span>
        </div>
    </div>

    <!-- Services Section Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="mb-3">Our Appliance Services</h2>
                <p class="text-muted">We offer expert repair services to restore comfort and convenience to your home.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="service-item bg-light text-center p-4 rounded-3 h-100 d-flex flex-column">
                        <img src="{{ asset('img/air-conditioner.png') }}" alt="Air Conditioner Repair Service" width="60" height="60" loading="lazy" decoding="async"
                            class="mb-3 mx-auto">
                        <h3 class="h5 mb-3 fw-bold">AC Repair</h3>
                        <p class="text-muted small mb-4 flex-grow-1">Professional AC repair services including gas refilling, part replacement, servicing, and installation — ensuring cool, clean, and uninterrupted comfort.</p>
                        <div class="d-flex flex-column gap-2 mt-auto">
                            <a href="{{ url('/ac/') }}" class="btn btn-primary" aria-label="Explore AC Repair Services">View AC Services</a>
                            <a href="tel:+919746700889" class="btn btn-outline-dark btn-sm" aria-label="Call for AC Repair">Call Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item bg-light text-center p-4 rounded-3 h-100 d-flex flex-column">
                        <img src="{{ asset('img/microwave-oven.png') }}" alt="Microwave Oven Repair Service" width="60" height="60" loading="lazy" decoding="async"
                            class="mb-3 mx-auto">
                        <h3 class="h5 mb-3 fw-bold">Microwave Oven Repair</h3>
                        <p class="text-muted small mb-4 flex-grow-1">Safe and prompt repairs for all microwave oven issues — heating failures, sparking, keypad errors, or turntable malfunctions.</p>
                        <div class="d-flex flex-column gap-2 mt-auto">
                            <a href="{{ url('/microwave-oven/') }}" class="btn btn-primary" aria-label="Explore Microwave Oven Repair Services">View Microwave Services</a>
                            <a href="tel:+919746700889" class="btn btn-outline-dark btn-sm" aria-label="Call for Microwave Repair">Call Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item bg-light text-center p-4 rounded-3 h-100 d-flex flex-column">
                        <img src="{{ asset('img/washer.png') }}" alt="Washing Machine Repair Service" width="60" height="60" loading="lazy" decoding="async"
                            class="mb-3 mx-auto">
                        <h3 class="h5 mb-3 fw-bold">Washing Machine Repair</h3>
                        <p class="text-muted small mb-4 flex-grow-1">Fast and affordable repairs for all types of washing machines — from drum issues and spin cycles to water drainage and motor repairs.</p>
                        <div class="d-flex flex-column gap-2 mt-auto">
                            <a href="{{ url('/service/washing-machine-repair') }}" class="btn btn-primary" aria-label="Explore Washing Machine Repair Services">View Washing Machine Services</a>
                            <a href="tel:+919746700889" class="btn btn-outline-dark btn-sm" aria-label="Call for Washing Machine Repair">Call Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item bg-light text-center p-4 rounded-3 h-100 d-flex flex-column">
                        <img src="{{ asset('img/fridge-repair.png') }}" alt="Refrigerator Repair Service" width="60" height="60" loading="lazy" decoding="async"
                            class="mb-3 mx-auto">
                        <h3 class="h5 mb-3 fw-bold">Refrigerator Repair & Service</h3>
                        <p class="text-muted small mb-4 flex-grow-1">Quick and dependable fridge repairs, gas refilling, compressor checks, and thermostat servicing to keep your food fresh and cool.</p>
                        <div class="d-flex flex-column gap-2 mt-auto">
                            <a href="{{ url('/service/refrigerator-repair') }}" class="btn btn-primary" aria-label="Explore Refrigerator Repair Services">View Fridge Services</a>
                            <a href="tel:+919746700889" class="btn btn-outline-dark btn-sm" aria-label="Call for Refrigerator Repair">Call Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="{{ url('/ads-washing-machine-repair') }}" class="btn btn-warning text-dark fw-bold px-4 py-2 rounded-pill shadow-sm">
                    <i class="fas fa-tags me-1"></i> Looking for Special Promotional Offers? View Our Ad Campaign Page
                </a>
            </div>
        </div>
    </div>
    <!-- Services Section End -->

    <!-- Brands We Service Section Start -->
    <div class="container-xxl py-4 bg-light border-top border-bottom">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
                <div>
                    <h2 class="h4 fw-bold mb-0">Brands We Service in Kochi</h2>
                    <p class="small text-muted mb-0">Independent doorstep care for all major appliance manufacturers</p>
                </div>
                <a href="{{ url('/brands') }}" class="btn btn-sm btn-outline-primary fw-semibold rounded-pill px-3">
                    View All 34+ Brands <i class="fas fa-arrow-right ms-1"></i>
                </a>
            </div>
            <div class="owl-carousel partner-carousel py-2">
                <div class="text-center p-2 bg-white rounded shadow-sm mx-1">
                    <a href="{{ url('/refrigerator/samsung/') }}"><img src="{{ asset('img/brands/samsung.avif') }}" alt="Samsung Repair Kochi" loading="lazy" decoding="async" width="120" height="48" class="img-fluid" style="max-height: 48px; object-fit: contain;"></a>
                </div>
                <div class="text-center p-2 bg-white rounded shadow-sm mx-1">
                    <a href="{{ url('/washing-machine/lg/') }}"><img src="{{ asset('img/brands/lg.png') }}" alt="LG Repair Kochi" loading="lazy" decoding="async" width="120" height="48" class="img-fluid" style="max-height: 48px; object-fit: contain;"></a>
                </div>
                <div class="text-center p-2 bg-white rounded shadow-sm mx-1">
                    <a href="{{ url('/ac/daikin/') }}"><img src="{{ asset('img/brands/daikin.jpg') }}" alt="Daikin AC Repair Kochi" loading="lazy" decoding="async" width="120" height="48" class="img-fluid" style="max-height: 48px; object-fit: contain;"></a>
                </div>
                <div class="text-center p-2 bg-white rounded shadow-sm mx-1">
                    <a href="{{ url('/washing-machine/bosch/') }}"><img src="{{ asset('img/brands/bosch.svg') }}" alt="Bosch Repair Kochi" loading="lazy" decoding="async" width="120" height="48" class="img-fluid" style="max-height: 48px; object-fit: contain;"></a>
                </div>
                <div class="text-center p-2 bg-white rounded shadow-sm mx-1">
                    <a href="{{ url('/washing-machine/ifb/') }}"><img src="{{ asset('img/brands/ifb.png') }}" alt="IFB Repair Kochi" loading="lazy" decoding="async" width="120" height="48" class="img-fluid" style="max-height: 48px; object-fit: contain;"></a>
                </div>
                <div class="text-center p-2 bg-white rounded shadow-sm mx-1">
                    <a href="{{ url('/refrigerator/whirlpool/') }}"><img src="{{ asset('img/brands/whirlpool.png') }}" alt="Whirlpool Repair Kochi" loading="lazy" decoding="async" width="120" height="48" class="img-fluid" style="max-height: 48px; object-fit: contain;"></a>
                </div>
                <div class="text-center p-2 bg-white rounded shadow-sm mx-1">
                    <a href="{{ url('/refrigerator/godrej/') }}"><img src="{{ asset('img/brands/godrej.jpg') }}" alt="Godrej Repair Kochi" loading="lazy" decoding="async" width="120" height="48" class="img-fluid" style="max-height: 48px; object-fit: contain;"></a>
                </div>
                <div class="text-center p-2 bg-white rounded shadow-sm mx-1">
                    <a href="{{ url('/ac/voltas/') }}"><img src="{{ asset('img/brands/voltas.jpg') }}" alt="Voltas AC Repair Kochi" loading="lazy" decoding="async" width="120" height="48" class="img-fluid" style="max-height: 48px; object-fit: contain;"></a>
                </div>
                <div class="text-center p-2 bg-white rounded shadow-sm mx-1">
                    <a href="{{ url('/refrigerator/haier/') }}"><img src="{{ asset('img/brands/haier.png') }}" alt="Haier Repair Kochi" loading="lazy" decoding="async" width="120" height="48" class="img-fluid" style="max-height: 48px; object-fit: contain;"></a>
                </div>
                <div class="text-center p-2 bg-white rounded shadow-sm mx-1">
                    <a href="{{ url('/ac/blue-star/') }}"><img src="{{ asset('img/brands/blue-star.png') }}" alt="Blue Star Repair Kochi" loading="lazy" decoding="async" width="120" height="48" class="img-fluid" style="max-height: 48px; object-fit: contain;"></a>
                </div>
                <div class="text-center p-2 bg-white rounded shadow-sm mx-1">
                    <a href="{{ url('/microwave-oven/electrolux/') }}"><img src="{{ asset('img/brands/electrolux.svg') }}" alt="Electrolux Microwave Repair Kochi" loading="lazy" decoding="async" width="120" height="48" class="img-fluid" style="max-height: 48px; object-fit: contain;"></a>
                </div>
                <div class="text-center p-2 bg-white rounded shadow-sm mx-1">
                    <a href="{{ url('/washing-machine/panasonic/') }}"><img src="{{ asset('img/brands/panasonic.svg') }}" alt="Panasonic Repair Kochi" loading="lazy" decoding="async" width="120" height="48" class="img-fluid" style="max-height: 48px; object-fit: contain;"></a>
                </div>
                <div class="text-center p-2 bg-white rounded shadow-sm mx-1">
                    <a href="{{ url('/ac/hitachi/') }}"><img src="{{ asset('img/brands/hitachi.svg') }}" alt="Hitachi AC Repair Kochi" loading="lazy" decoding="async" width="120" height="48" class="img-fluid" style="max-height: 48px; object-fit: contain;"></a>
                </div>
                <div class="text-center p-2 bg-white rounded shadow-sm mx-1">
                    <a href="{{ url('/refrigerator/siemens/') }}"><img src="{{ asset('img/brands/siemens.jpg') }}" alt="Siemens Repair Kochi" loading="lazy" decoding="async" width="120" height="48" class="img-fluid" style="max-height: 48px; object-fit: contain;"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Brands We Service Section End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h2 class="display-6 mb-5">Welcome to EssenTechs – Your Trusted Home Appliance Repair Partner!</h2>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 me-3" src="{{ asset('img/icon/icon-07-primary.png') }}"
                                        alt="Expert Certified Technician" width="50" height="50" loading="lazy" decoding="async">
                                    <h3 class="h5 mb-0 fw-bold">Expert Technician</h3>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 me-3" src="{{ asset('img/icon/icon-09-primary.png') }}"
                                        alt="Best Quality Services" width="50" height="50" loading="lazy" decoding="async">
                                    <h3 class="h5 mb-0 fw-bold">Best Quality Services</h3>
                                </div>
                            </div>
                        </div>
                        <p class="mb-4 text-dark">We specialize in fast, reliable, and affordable repair services for
                            refrigerators, washing machines, microwave ovens, and air conditioners. Our certified
                            technicians are just a call away to bring your appliances back to life!</p>
                        <div class="border-top mt-4 pt-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center">
                                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                                            <i class="fa fa-phone-alt text-white" aria-hidden="true"></i>
                                        </div>
                                        <div class="h5 mb-0"><a href="tel:+919746700889" class="text-dark text-decoration-none fw-bold">+91 97467 00889</a></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center">
                                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                                            <i class="fa fa-envelope text-white" aria-hidden="true"></i>
                                        </div>
                                        <div class="h5 mb-0"><a href="mailto:info@essentechs.com" class="text-dark text-decoration-none fw-bold">info@essentechs.com</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid w-85 wow zoomIn" data-wow-delay="0.1s"
                                src="{{ asset('img/Gall-15.jpeg') }}" alt="Technician repairing equipment" width="300" height="225" loading="lazy" decoding="async">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid w-85 wow zoomIn" data-wow-delay="0.3s"
                                src="{{ asset('img/Gall-03.jpeg') }}" alt="Air conditioning maintenance" width="300" height="225" loading="lazy" decoding="async">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid w-70 wow zoomIn" data-wow-delay="0.5s"
                                src="{{ asset('img/Gall-01.jpeg') }}" alt="Appliance diagnostics" width="300" height="225" loading="lazy" decoding="async">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid w-52 wow zoomIn" data-wow-delay="0.7s"
                                src="{{ asset('img/Gall-02.jpeg') }}" alt="Compressor testing" width="300" height="225" loading="lazy" decoding="async">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div class="container-fluid facts my-5 py-5" data-parallax="scroll"
        data-image-src="{{ asset('img/carousel-1.jpg') }}">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="display-4 text-white fw-bold" data-toggle="counter-up">5500</div>
                    <span class="text-primary fw-semibold">Happy Customers</span>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="display-4 text-white fw-bold" data-toggle="fix">10+</div>
                    <span class="text-primary fw-semibold">Years of Experience</span>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="display-4 text-white fw-bold" data-toggle="fix">24/7</div>
                    <span class="text-primary fw-semibold">Emergency Support</span>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="display-4 text-white fw-bold" data-toggle="fix">98%</div>
                    <span class="text-primary fw-semibold">Customer Satisfaction</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="display-6 mb-5">Why People Choose EssenTechs</h2>
                    <p class="mb-5 text-dark">Our team is highly trained and certified to repair all major brands of refrigerators,
                        washing machines, microwaves, and air conditioners.</p>
                    <div class="d-flex mb-5">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle"
                            style="width: 90px; height: 90px;">
                            <img class="img-fluid" src="{{ asset('img/icon/icon-08-light.png') }}" alt="Fast and Reliable Service" width="45" height="45" loading="lazy" decoding="async">
                        </div>
                        <div class="ms-4">
                            <h3 class="h5 mb-3 fw-bold">⚡ Fast & Reliable Service</h3>
                            <span class="text-muted">We value your time. Our technicians arrive on schedule and complete most repairs on the same day.</span>
                        </div>
                    </div>
                    <div class="d-flex mb-5">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle"
                            style="width: 90px; height: 90px;">
                            <img class="img-fluid" src="{{ asset('img/icon/icon-10-light.png') }}" alt="Reasonable Price" width="45" height="45" loading="lazy" decoding="async">
                        </div>
                        <div class="ms-4">
                            <h3 class="h5 mb-3 fw-bold">Reasonable Price</h3>
                            <span class="text-muted">No hidden charges. We offer transparent pricing with value-for-money repair services.</span>
                        </div>
                    </div>
                    <div class="d-flex mb-0">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle"
                            style="width: 90px; height: 90px;">
                            <img class="img-fluid" src="{{ asset('img/icon/icon-06-light.png') }}" alt="24/7 Customer Support" width="45" height="45" loading="lazy" decoding="async">
                        </div>
                        <div class="ms-4">
                            <h3 class="h5 mb-3 fw-bold">Easy Booking & 24/7 Support</h3>
                            <span class="text-muted">At Essentechs, we understand how frustrating appliance breakdowns can be. That's why we offer easy service booking, quick response times, and 24/7 customer support to resolve your issues without delay.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative rounded overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="{{ asset('img/feature.jpg') }}" alt="EssenTechs home service van and technicians"
                            style="object-fit: cover;" width="600" height="450" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h2 class="display-6 mb-5">Professional Appliance & Climate Services</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item shadow-sm rounded-3 overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('img/ACReapir.jpg') }}" alt="Air Conditioner Repair Service in Kochi" width="400" height="250" loading="lazy" decoding="async">
                        <div class="d-flex align-items-center bg-light p-3">
                            <div class="service-icon flex-shrink-0 bg-primary p-2 rounded-circle">
                                <img class="img-fluid" src="{{ asset('img/icon/icon-01-light.png') }}" alt="AC Icon" width="30" height="30" loading="lazy" decoding="async">
                            </div>
                            <a class="h5 mx-3 mb-0 fw-bold text-dark text-decoration-none" href="{{ url('/ac/') }}">Air Conditioner (AC) Repair</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item shadow-sm rounded-3 overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('img/WashingRepair.jpeg') }}" alt="Washing Machine Repair Service in Kochi" width="400" height="250" loading="lazy" decoding="async">
                        <div class="d-flex align-items-center bg-light p-3">
                            <div class="service-icon flex-shrink-0 bg-primary p-2 rounded-circle">
                                <img class="img-fluid" src="{{ asset('img/icon/icon-02-light.png') }}" alt="Washer Icon" width="30" height="30" loading="lazy" decoding="async">
                            </div>
                            <a class="h5 mx-3 mb-0 fw-bold text-dark text-decoration-none" href="{{ route('washingMachine') }}">Washing Machine Repair</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item shadow-sm rounded-3 overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('img/FridgeRepair.jpeg') }}" alt="Refrigerator Repair and Servicing in Kochi" width="400" height="250" loading="lazy" decoding="async">
                        <div class="d-flex align-items-center bg-light p-3">
                            <div class="service-icon flex-shrink-0 bg-primary p-2 rounded-circle">
                                <img class="img-fluid" src="{{ asset('img/icon/icon-03-light.png') }}" alt="Fridge Icon" width="30" height="30" loading="lazy" decoding="async">
                            </div>
                            <a class="h5 mx-3 mb-0 fw-bold text-dark text-decoration-none" href="{{ route('refrigerator') }}">Refrigerator Repair</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item shadow-sm rounded-3 overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('img/MicrowaveRepair.jpeg') }}" alt="Microwave Oven Repair Service in Kochi" width="400" height="250" loading="lazy" decoding="async">
                        <div class="d-flex align-items-center bg-light p-3">
                            <div class="service-icon flex-shrink-0 bg-primary p-2 rounded-circle">
                                <img class="img-fluid" src="{{ asset('img/icon/icon-04-light.png') }}" alt="Microwave Icon" width="30" height="30" loading="lazy" decoding="async">
                            </div>
                            <a class="h5 mx-3 mb-0 fw-bold text-dark text-decoration-none" href="{{ url('/microwave-oven/') }}">Microwave Oven Repair</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item shadow-sm rounded-3 overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('img/service-5.jpg') }}" alt="Appliance Installation and Uninstallation" width="400" height="250" loading="lazy" decoding="async">
                        <div class="d-flex align-items-center bg-light p-3">
                            <div class="service-icon flex-shrink-0 bg-primary p-2 rounded-circle">
                                <img class="img-fluid" src="{{ asset('img/icon/icon-05-light.png') }}" alt="Installation Icon" width="30" height="30" loading="lazy" decoding="async">
                            </div>
                            <a class="h5 mx-3 mb-0 fw-bold text-dark text-decoration-none" href="{{ route('installationUninstallation') }}">Installation & Uninstallation</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item shadow-sm rounded-3 overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('img/service-6.jpg') }}" alt="Annual Maintenance Contracts for Appliances" width="400" height="250" loading="lazy" decoding="async">
                        <div class="d-flex align-items-center bg-light p-3">
                            <div class="service-icon flex-shrink-0 bg-primary p-2 rounded-circle">
                                <img class="img-fluid" src="{{ asset('img/icon/icon-06-light.png') }}" alt="AMC Icon" width="30" height="30" loading="lazy" decoding="async">
                            </div>
                            <a class="h5 mx-3 mb-0 fw-bold text-dark text-decoration-none" href="{{ route('amc') }}">Maintenance Contracts (AMC)</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Quote Start -->
    <div class="container-fluid overflow-hidden my-5 px-lg-0">
        <div class="container quote px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 quote-text" data-parallax="scroll"
                    data-image-src="{{ asset('img/carousel-1.jpg') }}">
                    <div class="h-100 px-4 px-sm-5 ps-lg-0 wow fadeIn" data-wow-delay="0.1s">
                        <h2 class="text-white mb-4">For Individuals And Organisations</h2>
                        <p class="text-light mb-5">At EssenTechs, we’re committed to keeping your home and business running
                            smoothly. Whether you're a homeowner, office, school, or any organization — we've got your back
                            with fast, reliable, and affordable appliance repair services.</p>
                        <a href="{{ url('/contact') }}" class="align-self-start btn btn-primary py-3 px-5" aria-label="Contact our team for appliance repair">Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-6 quote-form" data-parallax="scroll"
                    data-image-src="{{ asset('img/carousel-2.jpg') }}">
                    <div class="h-100 px-4 px-sm-5 pe-lg-0 wow fadeIn" data-wow-delay="0.5s">
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="bg-white p-4 p-sm-5">
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" name="name" class="form-control" id="gname"
                                                placeholder="Enter Name" required>
                                            <label for="gname">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="email" name="email" class="form-control" id="gmail"
                                                placeholder="Enter Email" required>
                                            <label for="gmail">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" name="mobile" class="form-control" id="cname"
                                                placeholder="Enter Mobile" required>
                                            <label for="cname">Your Mobile</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating custom-floating">
                                            <select class="form-select" name="service" id="serviceType"
                                                aria-label="Service Type" required>
                                                <option selected disabled>Choose an Appliance Service</option>
                                                <option value="AC Repair">Air Conditioner (AC) Repair</option>
                                                <option value="Microwave Oven Repair">Microwave Oven Repair</option>
                                                <option value="Washing Machine Repair">Washing Machine Repair</option>
                                                <option value="Refrigerator Repair">Refrigerator Repair & Service</option>
                                                <option value="Installation & Uninstallation">Installation & Uninstallation</option>
                                                <option value="Annual Maintenance Contract">Annual Maintenance Contract (AMC)</option>
                                                <option value="Other Appliance Service">Other Appliance Service</option>
                                            </select>
                                            <label for="serviceType">Service Type</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" name="message" placeholder="Leave a message here" id="message"
                                                style="height: 80px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>

                                    {{-- Optional hidden fields --}}
                                    <input type="hidden" name="subject" value="Website Contact Form">
                                    <input type="hidden" name="page" value="{{ url()->current() }}">

                                    <div class="col-12">
                                        <button id="submitBtn" class="btn btn-primary py-3 px-5" type="submit">
                                            Get A Free Quote
                                        </button>
                                        <button id="loadingBtn" class="btn btn-primary py-3 px-5 d-none" type="button"
                                            disabled>
                                            <span class="spinner-border spinner-border-sm me-2"></span> Sending...
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Quote End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h2 class="display-6 mb-5">What Our Clients Say About Our Services</h2>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-left h-100">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('img/testimonial-1.jpg') }}"
                            alt="EssenTechs Reviewer" width="100" height="100" loading="lazy" decoding="async">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('img/testimonial-2.jpg') }}"
                            alt="EssenTechs Client" width="100" height="100" loading="lazy" decoding="async">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('img/testimonial-3.jpg') }}"
                            alt="Satisfied Customer" width="100" height="100" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <img class="img-fluid mx-auto mb-4" src="{{ asset('img/testimonial-1.jpg') }}"
                                alt="Shruti - EssenTechs Customer" width="100" height="100" loading="lazy" decoding="async">
                            <p class="fs-5">I received excellent service for all my home appliances at the most reliable
                                and affordable prices. EssenTechs is truly a trusted service center with consistent 5-star
                                reviews.</p>
                            <h5>Shruti</h5>
                            <span>Kakkanad, Kochi</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid mx-auto mb-4" src="{{ asset('img/testimonial-2.jpg') }}"
                                alt="Biju Antony - AC Service Client" width="100" height="100" loading="lazy" decoding="async">
                            <p class="fs-5">Outstanding servicing by EssenTechs! I had both my air cooler and AC
                                serviced. The process was smooth, and they addressed all concerns efficiently. Highly
                                recommended!</p>
                            <h5>Biju Antony</h5>
                            <span>Edapally, Kochi</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid mx-auto mb-4" src="{{ asset('img/testimonial-3.jpg') }}"
                                alt="Kirishna Pillay - Washing Machine Client" width="100" height="100" loading="lazy" decoding="async">
                            <p class="fs-5">I got my washing machine serviced by EssenTechs. Their team was highly
                                professional and completed the job on time. Great experience overall!</p>
                            <h5>Kirishna Pillay</h5>
                            <span>Kaloor, Kochi</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid mx-auto mb-4" src="{{ asset('img/testimonial-3.jpg') }}"
                                alt="Thomas Paul - Appliance Repair Client" width="100" height="100" loading="lazy" decoding="async">
                            <p class="fs-5">Very professional and reliable service! I got my AC and washing machine
                                repaired—everything was done quickly and smoothly. Easy to reach and easy to connect on
                                call, which made the whole process hassle-free. Great experience with EssenTechs!</p>
                            <h5>Thomas Paul</h5>
                            <span>Aluva, Kochi</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-right h-100">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('img/testimonial-1.jpg') }}"
                            alt="EssenTechs Reviewer" width="100" height="100" loading="lazy" decoding="async">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('img/testimonial-2.jpg') }}"
                            alt="EssenTechs Client" width="100" height="100" loading="lazy" decoding="async">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('img/testimonial-3.jpg') }}"
                            alt="Satisfied Customer" width="100" height="100" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
