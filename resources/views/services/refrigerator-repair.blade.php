@extends('layouts.app')
@section('title', 'Fridge Repair in Ernakulam | Refrigerator Repairing services in Edappally | refrigerator repairing services in ernakulam | refrigerator repair services in kakkanad')
@section('meta_description', 'If youre looking for the Fridge Repair in Ernakulam, look no further than Essentechs. Our team is dedicated to providing quality service.')
@section('meta_keywords', 'If youre looking for the Fridge Repair in Ernakulam, look no further than Essentechs. Our team is dedicated to providing quality service.')
@section('schema')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Refrigerator Repair</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/services') }}">Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Refrigerator Repair</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <!-- Hero Section -->
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h1 class="display-5 mb-4">Expert Refrigerator Repair Services in Kochi, Kerala</h1>
                <p>Keep your refrigerator running efficiently with EssenTechs’ professional repair services in Kochi. Our certified technicians provide fast, reliable, and affordable solutions for all fridge issues, with 24/7 emergency support. From cooling problems to electrical faults, we ensure your refrigerator keeps your food fresh.</p>
                <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg mt-3">Get a Free Quote</a>
            </div>

            <!-- Service Details Section -->
            <div class="row g-5 mb-5">
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.2s">
                    <img class="img-fluid rounded" src="{{ asset('img/FridgeRepair.jpeg') }}" alt="Technician repairing refrigerator in Kochi">
                    <p class="mt-4">Our comprehensive refrigerator repair services cover all types of issues, including poor cooling, ice buildup, and compressor failures. We service all major brands and models, including single-door, double-door, and side-by-side refrigerators, using genuine parts for lasting performance.</p>
                </div>
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.3s">
                    <h3>Our Refrigerator Repair Services Include:</h3>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-check text-primary me-2"></i>Full system diagnostics and troubleshooting</li>
                        <li><i class="fa fa-check text-primary me-2"></i>Refrigerant leak detection and repair</li>
                        <li><i class="fa fa-check text-primary me-2"></i>Compressor and fan motor replacements</li>
                        <li><i class="fa fa-check text-primary me-2"></i>Thermostat and defrost system repairs</li>
                        <li><i class="fa fa-check text-primary me-2"></i>Door gasket and seal replacements</li>
                        <li><i class="fa fa-check text-primary me-2"></i>24/7 emergency repair services</li>
                    </ul>
                    <a href="{{ url('/contact') }}" class="btn btn-primary mt-3">Book Now</a>
                </div>
            </div>

            <!-- Benefits Section -->
            <div class="row g-5 mb-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="text-center mb-4">Why Our Refrigerator Repair Services Stand Out</h2>
                    <div class="row g-4">
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item bg-light text-center h-100 p-4 rounded">
                                <i class="fas fa-tools fa-3x text-primary mb-3"></i>
                                <h5>Certified Technicians</h5>
                                <p>Our team is trained and certified to handle all refrigerator brands, ensuring expert repairs with precision.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item bg-light text-center h-100 p-4 rounded">
                                <i class="fas fa-clock fa-3x text-primary mb-3"></i>
                                <h5>Rapid Response</h5>
                                <p>With 24/7 emergency support, we respond quickly to restore your refrigerator’s functionality.</p>
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
                    <h2 class="text-center mb-4">Our Refrigerator Repair Process</h2>
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6 col-sm-12">
                            <img class="img-fluid rounded" src="{{ asset('img/FridgeRepair.jpeg') }}" alt="Refrigerator diagnostic process by EssenTechs in Kochi">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item"><strong>Inspection & Diagnosis:</strong> We perform a thorough inspection to identify the root cause of the issue.</li>
                                <li class="list-group-item"><strong>Transparent Quote:</strong> You receive a detailed repair plan with clear pricing, no surprises.</li>
                                <li class="list-group-item"><strong>Expert Repair:</strong> Our technicians use high-quality parts and advanced tools for lasting repairs.</li>
                                <li class="list-group-item"><strong>Testing & Validation:</strong> We test the refrigerator post-repair to ensure optimal cooling performance.</li>
                                <li class="list-group-item"><strong>Follow-Up Support:</strong> We offer maintenance tips and follow-up support to keep your fridge running smoothly.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQs Section -->
            <div class="row g-5 mb-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="text-center mb-4">Frequently Asked Questions About Refrigerator Repair</h2>
                    <div class="accordion" id="refrigeratorRepairFaq">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    How often should I service my refrigerator?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#refrigeratorRepairFaq">
                                <div class="accordion-body">
                                    We recommend servicing your refrigerator annually to maintain efficiency and prevent breakdowns. Regular maintenance includes cleaning coils, checking seals, and inspecting components.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    What are common refrigerator problems you fix?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#refrigeratorRepairFaq">
                                <div class="accordion-body">
                                    Common issues include poor cooling, ice buildup, noisy operation, and compressor failures. Our technicians are equipped to diagnose and repair all these issues efficiently.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Do you offer emergency refrigerator repair services?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#refrigeratorRepairFaq">
                                <div class="accordion-body">
                                    Yes, we provide 24/7 emergency refrigerator repair services in Kochi. Call us at <a href="tel:+919746700889">+919746700889</a> for immediate assistance.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Maintenance Tips Section -->
            <div class="row g-5 mb-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="text-center mb-4">Refrigerator Maintenance Tips</h2>
                    <div class="row g-4">
                        <div class="col-md-6 col-sm-12">
                            <img class="img-fluid rounded" src="{{ asset('img/FridgeRepair.jpeg') }}" alt="Refrigerator maintenance tips by EssenTechs">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-check text-primary me-2"></i><strong>Clean Condenser Coils:</strong> Dust coils every 6 months to ensure efficient cooling.</li>
                                <li><i class="fa fa-check text-primary me-2"></i><strong>Check Door Seals:</strong> Ensure gaskets are clean and intact to prevent air leaks.</li>
                                <li><i class="fa fa-check text-primary me-2"></i><strong>Avoid Overloading:</strong> Don’t overfill the fridge to allow proper air circulation.</li>
                                <li><i class="fa fa-check text-primary me-2"></i><strong>Schedule Annual Maintenance:</strong> Book a professional service with EssenTechs to keep your refrigerator in top condition.</li>
                            </ul>
                            <a href="{{ url('/contact') }}" class="btn btn-primary mt-3">Schedule Maintenance</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Why Choose Us Section -->
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="text-center mb-4">Why Choose EssenTechs for Refrigerator Repair?</h2>
                    <p class="text-center">At EssenTechs, we’re committed to delivering exceptional refrigerator repair services in Kochi. Our team uses state-of-the-art tools, genuine parts, and years of expertise to ensure your appliance performs at its best. With 24/7 availability, transparent pricing, and a customer-first approach, we bring peace of mind to every repair job.</p>
                    <div class="text-center">
                        <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg mt-3">Contact Us Today</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
