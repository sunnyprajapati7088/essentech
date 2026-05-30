@extends('layouts.app')

@section('title', 'Appliance Repair Services in Kerala | Best Home Appliance Repair in Ernakulam | EssenTechs')

@section('meta_description', 'EssenTechs offers top-notch appliance repair services in Kochi, Kerala, including AC, washing machine, refrigerator, and microwave oven repairs. Fast, reliable, and affordable with 24/7 emergency support.')

@section('meta_keywords', 'appliance repair, AC repair, washing machine repair, refrigerator repair, microwave oven repair, Kochi, Kerala, Ernakulam, EssenTechs')

@section('schema')
    <!-- Add schema markup for LocalBusiness or Service if needed -->
@endsection

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Appliance Repair Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
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
                <h1 class="display-5 mb-4">Comprehensive Appliance Repair Services in Kochi, Kerala</h1>
                <p>EssenTechs provides expert repair services for all your home appliances in Kochi. Our certified technicians offer fast, reliable, and affordable solutions with 24/7 emergency support. From air conditioners to microwave ovens, we ensure your appliances run efficiently year-round.</p>
                <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg mt-3">Get a Free Quote</a>
            </div>

            <!-- Service Overview Section -->
            <div class="row g-5 mb-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="text-center mb-4">Our Appliance Repair Services</h2>
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="service-item bg-light text-center h-100 p-4 rounded">

                                <h3>Air Conditioner (AC) Repair</h3>
                                <p>Stay cool with our expert AC repair services. We fix cooling issues, refrigerant leaks, and more for all AC types, ensuring optimal performance.</p>
                                <a href="{{ route('acServices') }}" class="btn btn-primary mt-3">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="service-item bg-light text-center h-100 p-4 rounded">

                                <h3>Washing Machine Repair</h3>
                                <p>Keep your laundry routine on track with our washing machine repair services. We handle water leaks, drum issues, and electrical faults for all models.</p>
                                <a href="{{ route('washingMachine') }}" class="btn btn-primary mt-3">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="service-item bg-light text-center h-100 p-4 rounded">

                                <h3>Refrigerator Repair</h3>
                                <p>Ensure your food stays fresh with our refrigerator repair services. We fix cooling problems, compressor failures, and more for all fridge types.</p>
                                <a href="{{ route('refrigerator') }}" class="btn btn-primary mt-3">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="service-item bg-light text-center h-100 p-4 rounded">

                                <h3>Microwave Oven Repair</h3>
                                <p>Get your microwave back in action with our repair services. We fix heating issues, control panel malfunctions, and more for all microwave models.</p>
                                <a href="{{ route('microWaveOpen') }}" class="btn btn-primary mt-3">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Benefits Section -->
            <div class="row g-5 mb-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="text-center mb-4">Why Our Appliance Repair Services Stand Out</h2>
                    <div class="row g-4">
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item bg-light text-center h-100 p-4 rounded">
                                <i class="fas fa-tools fa-3x text-primary mb-3"></i>
                                <h5>Certified Technicians</h5>
                                <p>Our team is trained and certified to repair all major appliance brands with precision and expertise.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item bg-light text-center h-100 p-4 rounded">
                                <i class="fas fa-clock fa-3x text-primary mb-3"></i>
                                <h5>Rapid Response</h5>
                                <p>With 24/7 emergency support, we respond quickly to restore your appliances to full functionality.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item bg-light text-center h-100 p-4 rounded">
                                <i class="fas fa-wallet fa-3x text-primary mb-3"></i>
                                <h5>Transparent Pricing</h5>
                                <p>No hidden fees—our competitive pricing ensures top-quality service at affordable rates.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Repair Process Section -->
            <div class="row g-5 mb-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="text-center mb-4">Our Appliance Repair Process</h2>
                    <div class="row g-4 align-items-center">

                        <div class="col-md-12 col-sm-12">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item"><strong>Inspection & Diagnosis:</strong> We thoroughly inspect your appliance to identify the issue.</li>
                                <li class="list-group-item"><strong>Transparent Quote:</strong> You receive a detailed repair plan with clear pricing.</li>
                                <li class="list-group-item"><strong>Expert Repair:</strong> Our technicians use high-quality parts and advanced tools for lasting repairs.</li>
                                <li class="list-group-item"><strong>Testing & Validation:</strong> We test the appliance post-repair to ensure optimal performance.</li>
                                <li class="list-group-item"><strong>Follow-Up Support:</strong> We provide maintenance tips and support to keep your appliances running smoothly.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonials Section -->
            <div class="row g-5 mb-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="text-center mb-4">What Our Customers Say</h2>
                    <div class="row g-4">
                        <div class="col-md-6 col-sm-12">
                            <div class="testimonial-item bg-light text-center h-100 p-4 rounded">
                                <p>"EssenTechs repaired my washing machine and refrigerator with great professionalism. Their service is fast and reliable!"</p>
                                <p><strong>Meera T.</strong>, Kochi, Kerala</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="testimonial-item bg-light text-center h-100 p-4 rounded">
                                <p>"I had an issue with my AC and microwave, and EssenTechs fixed both on the same day. Highly recommend their services!"</p>
                                <p><strong>Rajesh S.</strong>, Kochi, Kerala</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Maintenance Tips Section -->
            <div class="row g-5 mb-5 text-center">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="text-center mb-4">General Appliance Maintenance Tips</h2>
                    <div class="row g-4 text-center">

                        <div class="col-md-6 col-sm-12 text-center">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-check text-primary me-2"></i><strong>Regular Cleaning:</strong> Clean filters, coils, and interiors regularly to maintain efficiency.</li>
                                <li><i class="fa fa-check text-primary me-2"></i><strong>Check Connections:</strong> Inspect electrical cords and components for wear and tear.</li>
                                <li><i class="fa fa-check text-primary me-2"></i><strong>Avoid Overloading:</strong> Follow manufacturer guidelines to prevent strain on appliances.</li>
                                <li><i class="fa fa-check text-primary me-2"></i><strong>Schedule Annual Maintenance:</strong> Book professional services with EssenTechs to keep your appliances in top condition.</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Why Choose Us Section -->
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="text-center mb-4">Why Choose EssenTechs?</h2>
                    <p class="text-center">At EssenTechs, we’re dedicated to providing top-notch appliance repair services in Kochi. With state-of-the-art tools, genuine parts, and a customer-first approach, we ensure your appliances perform at their best. Our 24/7 availability and transparent pricing make us the trusted choice for all your repair needs.</p>
                    <div class="text-center">
                        <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg mt-3">Contact Us Today</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
