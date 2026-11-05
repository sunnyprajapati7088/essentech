@extends('layouts.app')

@section('title', 'Service Work Gallery | EssenTechs Appliance Repair in Kochi')
@section('meta_description', 'Browse photos of our verified doorstep repair and maintenance work across Kochi and Ernakulam for ACs, washing machines, refrigerators, and microwave ovens.')
@section('meta_keywords', 'appliance repair photos, AC maintenance gallery, washing machine service pictures, Kochi technician work')
@section('canonical', url('/gallery'))

@section('content')
<!-- Page Header Start -->
<div class="bg-light py-5 border-bottom">
    <div class="container text-center">
        <h1 class="display-5 fw-bold text-dark mb-3">Our Service & Repair Gallery</h1>
        <p class="lead text-muted mx-auto mb-0" style="max-width: 650px;">
            A glimpse of our hands-on diagnostic, maintenance, and component-level repair work across homes and businesses in Kochi.
        </p>
    </div>
</div>
<!-- Page Header End -->

<!-- Gallery Section -->
<div class="container py-5">
    <div class="row g-4">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <img src="{{ asset('img/Gall-01.jpeg') }}" class="img-fluid rounded-3 shadow-sm w-100" alt="Appliance PCB diagnostic check" width="400" height="300" loading="lazy">
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <img src="{{ asset('img/Gall-02.jpeg') }}" class="img-fluid rounded-3 shadow-sm w-100" alt="Compressor testing and wiring check" width="400" height="300" loading="lazy">
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <img src="{{ asset('img/Gall-03.jpeg') }}" class="img-fluid rounded-3 shadow-sm w-100" alt="Air conditioner condenser coil inspection" width="400" height="300" loading="lazy">
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <img src="{{ asset('img/Gall-04.jpeg') }}" class="img-fluid rounded-3 shadow-sm w-100" alt="Washing machine drum and suspension testing" width="400" height="300" loading="lazy">
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <img src="{{ asset('img/Gall-05.jpeg') }}" class="img-fluid rounded-3 shadow-sm w-100" alt="Refrigerator cooling coil leak test" width="400" height="300" loading="lazy">
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <img src="{{ asset('img/Gall-06.jpeg') }}" class="img-fluid rounded-3 shadow-sm w-100" alt="Microwave oven high-voltage transformer repair" width="400" height="300" loading="lazy">
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <img src="{{ asset('img/Gall-07.jpeg') }}" class="img-fluid rounded-3 shadow-sm w-100" alt="Technician measuring operating refrigerant pressure" width="400" height="300" loading="lazy">
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <img src="{{ asset('img/Gall-08.jpeg') }}" class="img-fluid rounded-3 shadow-sm w-100" alt="Indoor blower fan cleaning and alignment" width="400" height="300" loading="lazy">
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <img src="{{ asset('img/Gall-09.jpeg') }}" class="img-fluid rounded-3 shadow-sm w-100" alt="Motor capacitor replacement" width="400" height="300" loading="lazy">
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <img src="{{ asset('img/Gall-10.jpeg') }}" class="img-fluid rounded-3 shadow-sm w-100" alt="Drain pan clearing and anti-algae flush" width="400" height="300" loading="lazy">
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <img src="{{ asset('img/Gall-11.jpeg') }}" class="img-fluid rounded-3 shadow-sm w-100" alt="Front-load washing machine door seal repair" width="400" height="300" loading="lazy">
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <img src="{{ asset('img/Gall-12.jpeg') }}" class="img-fluid rounded-3 shadow-sm w-100" alt="Electronic thermostat calibration" width="400" height="300" loading="lazy">
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <img src="{{ asset('img/Gall-13.jpeg') }}" class="img-fluid rounded-3 shadow-sm w-100" alt="Outdoor AC bracket mounting" width="400" height="300" loading="lazy">
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <img src="{{ asset('img/Gall-14.jpeg') }}" class="img-fluid rounded-3 shadow-sm w-100" alt="Inverter board testing on customer site" width="400" height="300" loading="lazy">
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <img src="{{ asset('img/Gall-15.jpeg') }}" class="img-fluid rounded-3 shadow-sm w-100" alt="Certified technician team preparing tools" width="400" height="300" loading="lazy">
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <img src="{{ asset('img/Gall-16.jpeg') }}" class="img-fluid rounded-3 shadow-sm w-100" alt="Nitrogen pressure testing setup" width="400" height="300" loading="lazy">
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <img src="{{ asset('img/Gall-17.jpeg') }}" class="img-fluid rounded-3 shadow-sm w-100" alt="Evaporator coil deep foam treatment" width="400" height="300" loading="lazy">
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <img src="{{ asset('img/Gall-18.jpeg') }}" class="img-fluid rounded-3 shadow-sm w-100" alt="Microwave waveguide inspection" width="400" height="300" loading="lazy">
        </div>
    </div>
</div>
@endsection
