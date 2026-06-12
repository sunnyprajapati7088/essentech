@extends('layouts.app')

@section('title', 'Appliance Installation & Uninstallation Services in Ernakulam | Kochi | Kerala - Essentechs')
@section('meta_description', 'Essentechs provides professional appliance installation & uninstallation services in Kochi, Ernakulam & Kerala. Trusted experts for AC, washing machines, refrigerators, microwaves, and more.')
@section('meta_keywords', 'Installation services in Kochi, Uninstallation services in Ernakulam, Appliance setup Kerala, AC installation Kochi, Washing machine uninstallation, Refrigerator installation services, Essentechs installation experts')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Installation & Uninstallation Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/services') }}">Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Installation & Uninstallation</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">

            <!-- Hero Section -->
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-5 mb-4">Professional Installation & Uninstallation Services in Kochi, Ernakulam & Kerala</h1>
                <p>Looking for reliable appliance installation and uninstallation services in Kochi, Ernakulam, or anywhere in Kerala? <strong>Essentechs</strong> provides certified technicians who ensure safe, hassle-free, and professional handling of all your appliances. Whether it’s an <strong>AC, washing machine, refrigerator, microwave, or kitchen chimney</strong>, we guarantee expert service from start to finish. </p>
                <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg mt-3">Get a Free Quote</a>
            </div>

            <!-- Service Details Section -->
            <div class="row g-5 mb-5">
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.2s">
                    <img class="img-fluid rounded" src="{{ asset('img/installation-service.jpeg') }}"
                         alt="Appliance installation service in Kochi by Essentechs">
                    <p class="mt-4">We specialize in both residential and commercial appliance installation & uninstallation services across Kerala. From carefully dismantling old appliances to setting up new ones, Essentechs ensures safe handling, wiring, plumbing adjustments, and testing before delivery. </p>
                </div>
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.3s">
                    <h3>Our Installation & Uninstallation Services Cover:</h3>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-check text-primary me-2"></i>Air Conditioner (AC) Installation & Uninstallation</li>
                        <li><i class="fa fa-check text-primary me-2"></i>Washing Machine Setup & Removal</li>
                        <li><i class="fa fa-check text-primary me-2"></i>Refrigerator & Deep Freezer Installation</li>
                        <li><i class="fa fa-check text-primary me-2"></i>Microwave Oven & Kitchen Chimney Setup</li>
                        <li><i class="fa fa-check text-primary me-2"></i>Television (LED/LCD) Wall Mounting & Removal</li>
                        <li><i class="fa fa-check text-primary me-2"></i>Dishwasher & Water Purifier Installation</li>
                        <li><i class="fa fa-check text-primary me-2"></i>Commercial Appliance Setup for Offices & Shops</li>
                    </ul>
                    <a href="{{ url('/contact') }}" class="btn btn-primary mt-3">Book Now</a>
                </div>
            </div>

            <!-- Why Choose Us Section -->
            <div class="row g-5 mb-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="text-center mb-4">Why Choose Essentechs for Installation & Uninstallation?</h2>
                    <div class="row g-4">
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item bg-light text-center h-100 p-4 rounded">
                                <i class="fas fa-user-shield fa-3x text-primary mb-3"></i>
                                <h5>Safe & Secure</h5>
                                <p>We follow strict safety protocols and handle your appliances with professional care during installation or removal.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item bg-light text-center h-100 p-4 rounded">
                                <i class="fas fa-bolt fa-3x text-primary mb-3"></i>
                                <h5>Expert Technicians</h5>
                                <p>Our certified team has years of experience in installing and uninstalling a wide range of appliances across Kerala.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item bg-light text-center h-100 p-4 rounded">
                                <i class="fas fa-hand-holding-usd fa-3x text-primary mb-3"></i>
                                <h5>Affordable & Transparent Pricing</h5>
                                <p>No hidden costs. We provide upfront pricing for installation and uninstallation services.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Process Section -->
            <div class="row g-5 mb-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="text-center mb-4">Our Installation & Uninstallation Process</h2>
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item"><strong>Site Inspection:</strong> Our experts inspect the location for wiring, plumbing, and space requirements.</li>
                        <li class="list-group-item"><strong>Transparent Quote:</strong> We provide a clear estimate with no hidden charges.</li>
                        <li class="list-group-item"><strong>Safe Dismantling:</strong> For uninstallation, we carefully disconnect and pack your appliance for future use.</li>
                        <li class="list-group-item"><strong>Professional Installation:</strong> Our technicians set up the appliance with proper electrical and plumbing connections.</li>
                        <li class="list-group-item"><strong>Testing & Handover:</strong> We run a complete test to ensure smooth functioning before final delivery.</li>
                        <li class="list-group-item"><strong>Follow-Up Support:</strong> Essentechs provides after-service support for maintenance and troubleshooting.</li>
                    </ol>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="row g-5 mb-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="text-center mb-4">Frequently Asked Questions</h2>
                    <div class="accordion" id="installationFaq">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    What appliances do you install and uninstall?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1"
                                data-bs-parent="#installationFaq">
                                <div class="accordion-body">
                                    We provide installation and uninstallation for <strong>ACs, washing machines, refrigerators, microwaves, TVs, chimneys, dishwashers, and water purifiers</strong>. We also handle commercial appliances for offices and shops.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    Do you provide same-day service in Kochi and Ernakulam?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2"
                                data-bs-parent="#installationFaq">
                                <div class="accordion-body">
                                    Yes, we offer same-day installation and uninstallation services in Kochi, Ernakulam, and nearby areas. Call us at <a href="tel:+919746700889">+91 9746700889</a> to schedule.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Do you provide warranty on installation?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3"
                                data-bs-parent="#installationFaq">
                                <div class="accordion-body">
                                    Yes, Essentechs provides a <strong>service warranty</strong> on all installations and uninstallations. Our after-service support ensures long-lasting results.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact CTA -->
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp text-center" data-wow-delay="0.1s">
                    <h2 class="mb-4">Book Your Installation or Uninstallation Today</h2>
                    <p>Essentechs is your trusted partner for hassle-free appliance installation and uninstallation in Kochi, Ernakulam, and across Kerala. Contact us now for professional, affordable, and reliable services.</p>
                    <p><strong>Call us:</strong> <a href="tel:+919746700889">+91 9746700889</a> |
                       <strong>Email:</strong> <a href="mailto:info@essentechs.com">info@essentechs.com</a></p>
                    <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg mt-3">Contact Us</a>
                </div>
            </div>

        </div>
    </div>
    <!-- Service End -->
@endsection
