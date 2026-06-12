@extends('layouts.app')

@section('title', 'Annual Maintenance Contracts (AMC) in Kochi | Appliance AMC Services in Ernakulam & Kerala - Essentechs')
@section('meta_description', 'Essentechs offers Annual Maintenance Contracts (AMC) in Kochi, Ernakulam & Kerala for appliances like AC, washing machines, refrigerators & more. Affordable AMC plans with expert support.')
@section('meta_keywords', 'Annual Maintenance Contract Kochi, AMC services Kerala, Appliance AMC Ernakulam, AC AMC Kochi, Washing machine AMC Kerala, Refrigerator AMC services, Essentechs AMC plans')

@section('content')
    <!-- Blog Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Annual Maintenance Contracts (AMC)</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/services') }}">Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">AMC Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Blog Header End -->

    <!-- Blog Content Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8 col-md-12 wow fadeInUp" data-wow-delay="0.1s">

                    <!-- Introduction -->
                    <h2 class="mb-4">What is an Annual Maintenance Contract (AMC)?</h2>
                    <p>An <strong>Annual Maintenance Contract (AMC)</strong> is a service agreement that ensures your home and office appliances remain in excellent working condition throughout the year. At <strong>Essentechs</strong>, we provide professional AMC services in Kochi, Ernakulam, and across Kerala for appliances such as <strong>air conditioners, washing machines, refrigerators, water purifiers, microwaves, and more</strong>. Our goal is to provide you with peace of mind, cost savings, and uninterrupted appliance performance.</p>

                    <!-- Why AMC is Important -->
                    <h3 class="mt-5">Why Do You Need AMC for Appliances?</h3>
                    <ul>
                        <li><strong>Prevents Breakdowns:</strong> Regular check-ups help identify issues before they turn into major problems.</li>
                        <li><strong>Cost-Effective:</strong> Reduces expensive repair costs by maintaining appliances regularly.</li>
                        <li><strong>Extended Lifespan:</strong> Appliances last longer when serviced under AMC.</li>
                        <li><strong>24/7 Support:</strong> Priority assistance from our expert technicians.</li>
                        <li><strong>Convenience:</strong> Scheduled visits without the hassle of calling technicians each time.</li>
                    </ul>

                    <!-- Types of AMC -->
                    <h3 class="mt-5">Types of AMC Services We Offer</h3>
                    <p>Essentechs offers flexible AMC plans designed for both residential and commercial needs:</p>
                    <ul>
                        <li><strong>Comprehensive AMC:</strong> Includes both labor and spare parts, ensuring complete peace of mind.</li>
                        <li><strong>Non-Comprehensive AMC:</strong> Covers labor and routine maintenance; spare parts are charged separately.</li>
                        <li><strong>Customized AMC:</strong> Tailored AMC contracts for businesses, offices, and institutions.</li>
                    </ul>

                    <!-- Appliances Covered -->
                    <h3 class="mt-5">Appliances Covered Under AMC</h3>
                    <ul>
                        <li>Air Conditioners (AC)</li>
                        <li>Washing Machines</li>
                        <li>Refrigerators & Deep Freezers</li>
                        <li>Microwave Ovens & Kitchen Chimneys</li>
                        <li>Water Purifiers</li>
                        <li>Commercial Appliances & Office Equipment</li>
                    </ul>

                    <!-- Benefits Section -->
                    <h3 class="mt-5">Benefits of Choosing Essentechs AMC Services</h3>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="p-3 border rounded bg-light h-100">
                                <h5>Expert Technicians</h5>
                                <p>Our AMC services are delivered by certified professionals with years of experience.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 border rounded bg-light h-100">
                                <h5>Regular Preventive Maintenance</h5>
                                <p>Scheduled checkups to keep your appliances in perfect condition all year round.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 border rounded bg-light h-100">
                                <h5>Cost Savings</h5>
                                <p>AMC contracts save you money by avoiding unexpected high repair costs.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 border rounded bg-light h-100">
                                <h5>Priority Service</h5>
                                <p>AMC customers get priority over regular repair requests with faster turnaround.</p>
                            </div>
                        </div>
                    </div>

                    <!-- AMC Process -->
                    <h3 class="mt-5">Our AMC Process</h3>
                    <ol>
                        <li><strong>Assessment:</strong> We evaluate the condition of your appliances.</li>
                        <li><strong>AMC Plan Selection:</strong> Choose from comprehensive, non-comprehensive, or customized AMC plans.</li>
                        <li><strong>Scheduled Visits:</strong> Our technicians perform regular check-ups and preventive maintenance.</li>
                        <li><strong>Emergency Support:</strong> In case of breakdowns, AMC customers get priority service.</li>
                        <li><strong>Renewal:</strong> Easy annual renewal options for continued peace of mind.</li>
                    </ol>

                    <!-- FAQs -->
                    <h3 class="mt-5">Frequently Asked Questions About AMC</h3>
                    <div class="accordion" id="amcFaq">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    What appliances are covered under Essentechs AMC?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1"
                                data-bs-parent="#amcFaq">
                                <div class="accordion-body">
                                    Our AMC covers <strong>ACs, washing machines, refrigerators, water purifiers, microwaves, and kitchen appliances</strong>. We also offer AMC contracts for commercial appliances in offices and businesses.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    Do you provide AMC services in all parts of Kerala?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2"
                                data-bs-parent="#amcFaq">
                                <div class="accordion-body">
                                    Yes, we provide AMC services in Kochi, Ernakulam, Thrissur, Trivandrum, Calicut, and across Kerala.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    How much does an AMC cost?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3"
                                data-bs-parent="#amcFaq">
                                <div class="accordion-body">
                                    AMC costs vary depending on the type of appliance and whether you choose a comprehensive or non-comprehensive plan. Contact us at <a href="tel:+919746700889">+91 9746700889</a> for a free quote.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Conclusion -->
                    <h3 class="mt-5">Why Choose Essentechs for AMC?</h3>
                    <p>At Essentechs, we understand how important it is to keep your appliances functioning smoothly. Our AMC services not only save you money but also provide peace of mind with round-the-clock support, professional service, and reliable maintenance. Whether it’s a single household appliance or a large set of commercial equipment, our AMC contracts in Kochi, Ernakulam, and Kerala are designed to suit every need.</p>
                    <p><strong>Contact us today at <a href="tel:+919746700889">+91 9746700889</a> or email <a href="mailto:info@essentechs.com">info@essentechs.com</a> to get your AMC plan.</strong></p>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="p-4 bg-light rounded">
                        <h4 class="mb-4">Other Services</h4>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/services/washing-machine-repair') }}">Washing Machine Repair</a></li>
                            <li><a href="{{ url('/services/installation-uninstallation') }}">Installation & Uninstallation</a></li>
                            <li><a href="{{ url('/services/ac-repair') }}">AC Repair</a></li>
                            <li><a href="{{ url('/services/refrigerator-repair') }}">Refrigerator Repair</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Blog Content End -->
@endsection
