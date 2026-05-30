@extends('layouts.landing-page')

@section('title', 'Essen Techs- Top AC Repair Services in Kerala | Best mechanic for ac installation in Kerala')
@section('meta_description',
    'Essentechs is a leading provider of AC repair services & installation in Kerala. Contact
    us for the best AC repair mechanic in the area.')
@section('meta_keywords',
    'Essentechs is a leading provider of AC repair services & installation in Kerala. Contact us
    for the best AC repair mechanic in the area.')
@section('schema')
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <!-- Carousel Item 1 -->
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('img/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center carousel-content-row justify-content-center">
                        <div class="container">
                            @include('common.common-carousel')
                        </div>
                    </div>
                </div>

                <!-- Carousel Item 2 -->
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('img/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="container">
                            @include('common.common-carousel')
                        </div>
                    </div>
                </div>

            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <!-- Carousel End -->


    <!-- Services Section Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="mb-3">Our Appliance Services</h2>
                <p>We provide professional appliance repair services to keep your home running smoothly and comfortably.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="service-item bg-light text-center p-4">
                        <img src="{{ asset('img/air-conditioner.png') }}" alt="AC Repair" style="width: 60px; height: 60px;"
                            class="mb-3">
                        <h5 class="mb-3">AC Repair</h5>
                        <p> Professional AC repair services in Ernakulam, Kakkanad, Edappally, Kalamassery, and Aluva,
                            including AC gas refilling, installation, part replacement, and deep cleaning — ensuring
                            reliable, cool, and fresh air year-round.</p>
                        <a href="tel:+919746700889" class="btn btn-primary">Call Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item bg-light text-center p-4">
                        <img src="{{ asset('img/fridge-repair.png') }}" alt="Refrigerator Repair"
                            style="width: 60px; height: 60px;" class="mb-3">
                        <h5 class="mb-3">Refrigerator Repair & Service</h5>
                        <p> Expert refrigerator repair and service in Ernakulam, Kakkanad, Edappally, and
                            Aluva, offering quick fridge repairs, gas refilling, and maintenance to keep your food fresh,
                            cool, and safe always.

                        </p>
                        <a href="tel:+919746700889" class="btn btn-primary">Call Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item bg-light text-center p-4">
                        <img src="{{ asset('img/washer.png') }}" alt="Washing Machine Repair"
                            style="width: 60px; height: 60px;" class="mb-3">
                        <h5 class="mb-3">Washing Machine Repair</h5>
                        <p> Reliable washing machine repair services in Ernakulam, Kakkanad, Edappally, Kalamassery, and
                            Aluva, offering fast and affordable solutions for drum problems, drainage issues, and all major
                            washer faults.</p>
                        <a href="tel:+919746700889" class="btn btn-primary">Call Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item bg-light text-center p-4">
                        <img src="{{ asset('img/microwave-oven.png') }}" alt="Microwave Oven Repair"
                            style="width: 60px; height: 60px;" class="mb-3">
                        <h5 class="mb-3">Microwave Oven Repair</h5>
                        <p> Trusted microwave oven repair services in Ernakulam, Kakkanad, Edappally, Kalamassery, and
                            Aluva, providing safe, quick, and affordable solutions for heating issues, sparking, or
                            turntable malfunctions.</p>
                        <a href="tel:+919746700889" class="btn btn-primary">Call Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End -->

    <!-- Facts Start -->
    <div class="container-fluid facts my-5 py-5" data-parallax="scroll" data-image-src="{{ asset('img/carousel-1.jpg') }}">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">5500</h1>
                    <span class="text-primary">Happy Customers</span>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-4 text-white" data-toggle="fix">10+</h1>
                    <span class="text-primary">Years of Experience</span>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-4 text-white" data-toggle="fix">24/7</h1>
                    <span class="text-primary">Emergency Service</span>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <h1 class="display-4 text-white" data-toggle="fix">98%</h1>
                    <span class="text-primary">Customer Satisfaction</span>
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
                    <h2 class="display-6 mb-5">Why Choose EssenTechs?</h1>
                        <p class="mb-5">Our skilled and certified technicians provide expert AC, refrigerator, washing
                            machine, and microwave repairs for all major brands — ensuring reliable service, genuine parts,
                            and lasting performance.</p>
                        <div class="d-flex mb-5">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle"
                                style="width: 90px; height: 90px;">
                                <img class="img-fluid" src="{{ asset('img/icon/icon-08-light.png') }}" alt="">
                            </div>
                            <div class="ms-4">
                                <h5 class="mb-3">Fast & Reliable Service</h5>
                                <span>Your time matters! Our skilled technicians arrive promptly and complete most repairs
                                    the very same day, ensuring your comfort without delay.</span>
                            </div>
                        </div>
                        <div class="d-flex mb-5">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle"
                                style="width: 90px; height: 90px;">
                                <img class="img-fluid" src="{{ asset('img/icon/icon-10-light.png') }}" alt="">
                            </div>
                            <div class="ms-4">
                                <h5 class="mb-3">Affordable & Transparent Pricing</h5>
                                <span>We believe in honest service — no hidden fees, just clear and competitive pricing that
                                    delivers true value for your money.

                                    📞 Easy Booking & 24/7 Customer Support
                                    .</span>
                            </div>
                        </div>
                        <div class="d-flex mb-0">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle"
                                style="width: 90px; height: 90px;">
                                <img class="img-fluid" src="{{ asset('img/icon/icon-06-light.png') }}" alt="">
                            </div>
                            <div class="ms-4">
                                <h5 class="mb-3">Easy Booking & 24/7 Customer Support</h5>
                                <span>At Essentechs, we understand how frustrating appliance breakdowns can be. That's why
                                    we
                                    offer easy service booking, quick response times, and 24/7 customer support to resolve
                                    your
                                    issues without delay. Whether it’s day or night, our expert technicians are just a call
                                    away!</span>
                            </div>
                        </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative rounded overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="{{ asset('img/feature.jpg') }}" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h2 class="display-6 mb-5">What They Say About Our Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-2 d-none d-lg-block">

                </div>
                <div class="col-lg-8 wow fadeIn" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">

                            <p class="fs-5">I received excellent service for all my home appliances at the most reliable
                                and affordable prices. EssenTechs is truly a trusted service center with consistent 5-star
                                reviews.</p>
                            <h5>Shruti</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">

                            <p class="fs-5">Outstanding servicing by EssenTechs! I had both my air cooler and AC
                                serviced. The process was smooth, and they addressed all concerns efficiently. Highly
                                recommended!</p>
                            <h5>Biju Antony</h5>
                            <span>JOB</span>
                        </div>
                        <div class="testimonial-item text-center">


                            <p class="fs-5">I got my washing machine serviced by EssenTechs. Their team was highly
                                professional and completed the job on time. Great experience overall!</p>
                            <h5>Kirishna Pillay</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">

                            <p class="fs-5">Very professional and reliable service! I got my AC and washing machine
                                repaired—everything was done quickly and smoothly. Easy to reach and easy to connect on
                                call, which made the whole process hassle-free. Great experience with EssenTechs!</p>
                            <h5>Thomas Paul</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 d-none d-lg-block">

                </div>
                {{-- <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-right h-100">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('img/testimonial-1.jpg') }}"
                            alt="">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('img/testimonial-2.jpg') }}"
                            alt="">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('img/testimonial-3.jpg') }}"
                            alt="">
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h2 class="display-6 mb-5">We Provide professional Heating & Cooling Services</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{ asset('img/ACReapir.jpg') }}" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="{{ asset('img/icon/icon-01-light.png') }}" alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href="{{ route('acServices') }}">Air Conditioner (AC) Repair</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{ asset('img/WashingRepair.jpeg') }}" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="{{ asset('img/icon/icon-02-light.png') }}" alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href={{ route('washingMachine') }}>Washing Machine Repair</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{ asset('img/FridgeRepair.jpeg') }}" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="{{ asset('img/icon/icon-03-light.png') }}" alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href="{{ route('refrigerator') }}">Refrigerator Repair & Service</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{ asset('img/MicrowaveRepair.jpeg') }}" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="{{ asset('img/icon/icon-04-light.png') }}" alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href="{{ route('microWaveOpen') }}">Microwave Oven Repair</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{ asset('img/service-5.jpg') }}" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="{{ asset('img/icon/icon-05-light.png') }}" alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href="{{ route('installationUninstallation') }}">Installation &
                                Uninstallation Services</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{ asset('img/service-6.jpg') }}" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="{{ asset('img/icon/icon-06-light.png') }}" alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href="{{ route('amc') }}">Annual Maintenance Contracts (AMC)</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Testimonial Start -->

@section('style')
    <style>
        .carousel-caption {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.45);
            text-align: left;
            padding: 3rem 0;
        }

        h1 {
            color: #FFFFFF !important;
        }

        .form-box {
            backdrop-filter: blur(6px);
            background: rgba(255, 255, 255, 0.75);
            border-radius: 1rem;
            padding: 1rem;
        }

        .form-box .form-floating,
        .form-box .form-select {
            margin-bottom: 1rem;
            border-radius: 10px;
        }

        .form-box .form-floating textarea {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .form-box h1 {
            color: #FFFFFF !important;
        }

        .form-box .btn {
            width: 100%;
            padding: 1rem;
            font-weight: 500;
        }

        @media (max-width: 991px) {

            /* Let carousel caption be auto height for mobile */
            .carousel-caption {
                position: relative;
                /* remove absolute constraints */
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                align-items: center;
                padding: 2rem 1rem;
                text-align: center;
                height: auto;
                /* auto height so content is fully visible */
            }

            /* Stack form first, text second */
            .carousel-content-row {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 2rem;
            }

            .carousel-content-row .col-lg-5 {
                /* form first */
                order: 1;
                max-width: 450px;
                margin: 0 auto;
            }

            .carousel-content-row .col-lg-7 {
                /* text second */
                order: 2;
                width: 90%;
                margin: 0 auto;
            }

            .form-box {
                margin-top: 0 !important;
                /* remove large fixed margin */
                margin-bottom: 2rem !important;
                width: 100%;
            }

            .banner-text {
                display: none !important;
            }
        }

        @endsection @endsection
