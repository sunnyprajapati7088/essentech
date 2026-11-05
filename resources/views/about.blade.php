@extends('layouts.app')

@section('title', 'About Us | EssenTechs Appliance Repair in Kochi, Kerala')
@section('meta_description', 'Learn about EssenTechs — Kochi’s trusted home appliance repair specialist. Fast, reliable doorstep repair for ACs, washing machines, refrigerators, and microwave ovens.')
@section('meta_keywords', 'about EssenTechs, appliance repair Kochi, trusted appliance mechanic Kerala, Ernakulam home service')
@section('canonical', url('/about'))

@section('content')
<!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-5">Welcome to EssenTechs – Your Trusted Home Appliance Repair Partner!
                        </h1>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 me-3" src="{{ asset('img/icon/icon-07-primary.png') }}" alt="Expert Technician Icon" width="50" height="50">
                                    <h2 class="h5 mb-0 fw-bold">Expert Technician</h2>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 me-3" src="{{ asset('img/icon/icon-09-primary.png') }}" alt="Best Quality Services Icon" width="50" height="50">
                                    <h2 class="h5 mb-0 fw-bold">Best Quality Services</h2>
                                </div>
                            </div>
                        </div>
                        <p class="mb-4">
  At EssenTechs, honesty is at the heart of everything we do. We provide reliable and transparent appliance repair services across Kerala, covering Washing Machines, Refrigerators, Microwave Ovens, and Air Conditioners.
</p>
<p class="mb-4">
  Our expert technicians are committed to delivering fast, affordable, and high-quality repairs using 100% genuine parts — ensuring you get honest service you can trust. Whether you're a homeowner or running a business, we’re here to bring comfort back to your life with same-day service and dependable support.
</p>
<ul class="mb-4" style="list-style-type: none; padding-left: 0;">
  <li>✅ Honest & Transparent Service</li>
  <li>✅ Expert Technicians</li>
  <li>✅ Same-Day Response</li>
  <li>✅ Budget-Friendly Rates</li>
  <li>✅ Genuine Parts Guaranteed</li>
</ul>
<p class="mb-4">📞 <strong>Book Now — Help is Just a Call Away!</strong></p>

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
                            <img class="img-fluid w-85 wow zoomIn" data-wow-delay="0.1s" src="{{ asset('img/AC-repair.jpeg') }}"
                                alt="Air conditioner servicing in Kochi" width="300" height="225" style="margin-top: 0%;">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid w-85 wow zoomIn" data-wow-delay="0.3s" src="{{ asset('img/AcRepair-old.jpeg') }}" alt="AC repair technician at work" width="300" height="225">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid w-70 wow zoomIn" data-wow-delay="0.5s" src="{{ asset('img/Gall-01.jpeg') }}" alt="Appliance repair testing" width="300" height="225">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid w-52 wow zoomIn" data-wow-delay="0.7s" src="{{ asset('img/Fridges-washing.jpeg') }}" alt="Fridge and washing machine overhaul" width="300" height="225">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

@endsection
