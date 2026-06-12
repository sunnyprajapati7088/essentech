@extends('layouts.app')
@section('title', 'AC Repair Services in Kochi | Top AC Repair Services in Ernakulam | voltas ac repair in kerala')
@section('meta_description', 'If you are looking for best AC repair services in Kochi, Essentechs is the name to trust. With a team of highly skilled technicians, they offer the best AC repair services in the area.')
@section('meta_keywords', 'If you are looking for best AC repair services in Kochi, Essentechs is the name to trust. With a team of highly skilled technicians, they offer the best AC repair services in the area.')
@section('schema')
@section('content')
<!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Air Conditioner (AC) Repair</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="service.html">Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">AC Repair</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <!-- Hero Section -->
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h1 class="display-5 mb-4">Expert AC Repair Services in Kochi, Kerala</h1>
                <p>Stay cool and comfortable with EssenTechs’ professional air conditioner repair services in Kochi. Our certified technicians provide fast, reliable, and affordable solutions for all AC issues, with 24/7 emergency support. From minor tune-ups to major repairs, we ensure your AC runs efficiently year-round.</p>
                <a href="contact.html" class="btn btn-primary btn-lg mt-3">Get a Free Quote</a>
            </div>

            <!-- Service Details Section -->
            <div class="row g-5 mb-5">
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.2s">
                    <img class="img-fluid rounded"
                    src="{{ asset('img/AC-repair.jpeg') }}"
                    alt="Technician repairing air conditioner in Kochi">
                    <p class="mt-4">Our comprehensive AC repair services address all types of issues, including cooling inefficiencies, strange noises, and electrical faults. We service all major brands and models, using genuine parts to ensure long-lasting performance. Whether it’s a split AC, window AC, or central system, we’ve got you covered.</p>
                </div>
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.3s">
                    <h3>Our AC Repair Services Include:</h3>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-check text-primary me-2"></i>Full system diagnostics and troubleshooting</li>
                        <li><i class="fa fa-check text-primary me-2"></i>Refrigerant leak detection and repair</li>
                        <li><i class="fa fa-check text-primary me-2"></i>Compressor and fan motor replacements</li>
                        <li><i class="fa fa-check text-primary me-2"></i>Thermostat calibration and upgrades</li>
                        <li><i class="fa fa-check text-primary me-2"></i>Condenser and evaporator coil cleaning</li>
                        <li><i class="fa fa-check text-primary me-2"></i>24/7 emergency repair services</li>
                    </ul>
                    <a href="contact.html" class="btn btn-primary mt-3">Book Now</a>
                </div>
            </div>

            <!-- Benefits Section -->
            <div class="row g-5 mb-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="text-center mb-4">Why Our AC Repair Services Stand Out</h2>
                    <div class="row g-4">
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item bg-light text-center h-100 p-4 rounded">
                                <i class="fas fa-tools fa-3x text-primary mb-3"></i>
                                <h5>Certified Technicians</h5>
                                <p>Our team is trained and certified to handle all AC brands, ensuring expert repairs with precision.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item bg-light text-center h-100 p-4 rounded">
                                <i class="fas fa-clock fa-3x text-primary mb-3"></i>
                                <h5>Rapid Response</h5>
                                <p>With 24/7 emergency support, we respond quickly to restore your AC’s functionality.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item bg-light text-center h-100 p-4 rounded">
                                <i class="fas fa-wallet fa-3x text-primary mb-3"></i>
                                <h5>Transparent Pricing</h5>
                                <p>No hidden fees—our competitive pricing ensures you get top-quality service at affordable rates.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Repair Process Section -->
            <div class="row g-5 mb-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="text-center mb-4">Our AC Repair Process</h2>
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6 col-sm-12">
                            <img class="img-fluid rounded" src="{{ asset('img/AC-repair.jpeg') }}" alt="AC diagnostic process by EssenTechs in Kochi">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item"><strong>Inspection & Diagnosis:</strong> We perform a thorough inspection to identify the root cause of the issue.</li>
                                <li class="list-group-item"><strong>Transparent Quote:</strong> You receive a detailed repair plan with clear pricing, no surprises.</li>
                                <li class="list-group-item"><strong>Expert Repair:</strong> Our technicians use high-quality parts and advanced tools for lasting repairs.</li>
                                <li class="list-group-item"><strong>Testing & Validation:</strong> We test the AC post-repair to ensure optimal cooling and efficiency.</li>
                                <li class="list-group-item"><strong>Follow-Up Support:</strong> We offer maintenance tips and follow-up support to keep your AC running smoothly.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQs Section -->
            <div class="row g-5 mb-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="text-center mb-4">Frequently Asked Questions About AC Repair</h2>
                    <div class="accordion" id="acRepairFaq">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    How often should I service my air conditioner?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#acRepairFaq">
                                <div class="accordion-body">
                                    We recommend servicing your AC at least once a year to maintain efficiency, prevent breakdowns, and extend its lifespan. Regular maintenance includes cleaning filters, checking refrigerant levels, and inspecting components.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    What are common AC problems you fix?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#acRepairFaq">
                                <div class="accordion-body">
                                    Common issues include refrigerant leaks, faulty compressors, clogged filters, thermostat malfunctions, and electrical failures. Our technicians are equipped to diagnose and repair all these problems efficiently.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Do you offer emergency AC repair services?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#acRepairFaq">
                                <div class="accordion-body">
                                    Yes, we provide 24/7 emergency AC repair services in Kochi. Call us at <a href="tel:+919746700889">+919746700889</a> for immediate assistance.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Maintenance Tips Section -->
            <div class="row g-5 mb-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="text-center mb-4">AC Maintenance Tips</h2>
                    <div class="row g-4">
                        {{-- <div class="col-md-6 col-sm-12">
                            <img class="img-fluid rounded" src="img/ac-maintenance.jpg" alt="AC maintenance tips by EssenTechs">
                        </div> --}}
                        <div class="col-md-12 col-sm-12">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-check text-primary me-2"></i><strong>Clean Filters Regularly:</strong> Wash or replace air filters every 1-2 months to ensure proper airflow.</li>
                                <li><i class="fa fa-check text-primary me-2"></i><strong>Check Thermostat Settings:</strong> Ensure your thermostat is set correctly to avoid overworking the AC.</li>
                                <li><i class="fa fa-check text-primary me-2"></i><strong>Schedule Annual Maintenance:</strong> Book a professional service with EssenTechs to keep your AC in top condition.</li>
                                <li><i class="fa fa-check text-primary me-2"></i><strong>Keep Outdoor Unit Clear:</strong> Remove debris and vegetation around the outdoor unit for optimal performance.</li>
                            </ul>
                            <a href="contact.html" class="btn btn-primary mt-3">Schedule Maintenance</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Why Choose Us Section -->
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="text-center mb-4">Why Choose EssenTechs for AC Repair?</h2>
                    <p class="text-center">At EssenTechs, we’re committed to delivering exceptional AC repair services in Kochi. Our team uses state-of-the-art tools, genuine parts, and years of expertise to ensure your air conditioner performs at its best. With 24/7 availability, transparent pricing, and a customer-first approach, we bring peace of mind to every repair job.</p>
                    <div class="text-center">
                        <a href="contact.html" class="btn btn-primary btn-lg mt-3">Contact Us Today</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
