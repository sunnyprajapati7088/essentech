@extends('layouts.app')

@section('title', $title)
@section('meta_description', $meta_description)
@section('meta_keywords', $meta_keywords)



@section('style')
<style>
    .page-hero { background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%); color: white; padding: 60px 0 40px; }
    .breadcrumb-item a { color: rgba(255,255,255,0.8); text-decoration: none; }
    .breadcrumb-item.active { color: white; }
    .brand-card { border: none; border-radius: 14px; box-shadow: 0 4px 18px rgba(0,0,0,0.07); transition: all 0.3s ease; background: #fff; text-align: center; padding: 30px 20px 20px; height: 100%; }
    .brand-card:hover { transform: translateY(-8px); box-shadow: 0 16px 40px rgba(13,110,253,0.15); border-bottom: 3px solid #0d6efd; }
    .brand-card img { height: 70px; width: auto; object-fit: contain; margin-bottom: 15px; }
    .brand-logo-circle { width: 72px; height: 72px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; font-weight: 900; margin: 0 auto 15px; letter-spacing: 1px; }
    .brand-card h3 { font-size: 1.1rem; font-weight: 700; color: #1a1a2e; margin-bottom: 8px; }
    .brand-card p { font-size: 0.85rem; color: #6c757d; margin-bottom: 15px; }
    .btn-brand { background: #f0f6ff; color: #0d6efd; border: none; border-radius: 20px; padding: 6px 18px; font-size: 0.85rem; font-weight: 600; text-decoration: none; display: inline-block; }
    .section-title { font-size: 2rem; font-weight: 800; color: #1a1a2e; }
    .feat-box { display: flex; align-items: flex-start; margin-bottom: 16px; }
    .feat-icon { background: #0d6efd; color: white; border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-right: 14px; }
</style>
@endsection

@section('content')

<!-- Hero -->
<div class="page-hero wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-3">
                <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home me-1"></i>Home</a></li>
                <li class="breadcrumb-item active">Repair by Brand</li>
            </ol>
        </nav>
        <h1 class="fw-bold mb-2">Home Appliance Repair by Brand</h1>
        <p class="mb-0 opacity-75">EssenTechs — Kochi, Kerala | +91 97467 00889 | Same-Day Service Available</p>
    </div>
</div>

<!-- Brands Grid -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <p class="text-primary fw-semibold mb-1">All Major Brands</p>
            <h2 class="section-title">Choose Your Appliance Brand</h2>
            <p class="text-muted mt-2">EssenTechs provides certified repair service for all leading home appliance brands in Kochi, Kerala. Click your brand to see all repair services.</p>
        </div>

        <div class="row g-4">
            @foreach($brands as $i => $brand)
            <div class="col-lg-3 col-md-4 col-6 wow fadeInUp" data-wow-delay="{{ ($i % 4) * 0.1 + 0.1 }}s">
                <a href="{{ route('brands.show', $brand['slug']) }}" style="text-decoration:none;">
                    <div class="brand-card">
                        <div class="brand-logo-circle" style="background:{{ $brand['color'] }};color:{{ $brand['text'] }};">
                            {{ strtoupper(substr($brand['name'], 0, 2)) }}
                        </div>
                        <h3>{{ $brand['name'] }}</h3>
                        <p>{{ $brand['desc'] }}</p>
                        <span class="btn-brand">View Services <i class="fa fa-arrow-right ms-1"></i></span>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Why EssenTechs -->
<div class="container-xxl pb-5">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                <p class="text-primary fw-semibold mb-1">Why Choose Us</p>
                <h2 class="section-title mb-4">Kochi's Most Trusted Appliance Repair Company</h2>

                <div class="feat-box">
                    <div class="feat-icon"><i class="fa fa-certificate fa-sm"></i></div>
                    <div><h6 class="fw-bold mb-1">Certified Technicians</h6><p class="text-muted mb-0" style="font-size:0.85rem;">All technicians are trained and certified for major brands.</p></div>
                </div>
                <div class="feat-box">
                    <div class="feat-icon"><i class="fa fa-clock fa-sm"></i></div>
                    <div><h6 class="fw-bold mb-1">Same-Day Service</h6><p class="text-muted mb-0" style="font-size:0.85rem;">Fast response — most repairs completed same day.</p></div>
                </div>
                <div class="feat-box">
                    <div class="feat-icon"><i class="fa fa-tools fa-sm"></i></div>
                    <div><h6 class="fw-bold mb-1">Genuine Spare Parts</h6><p class="text-muted mb-0" style="font-size:0.85rem;">We use original and compatible genuine spare parts only.</p></div>
                </div>
                <div class="feat-box">
                    <div class="feat-icon"><i class="fa fa-shield-alt fa-sm"></i></div>
                    <div><h6 class="fw-bold mb-1">Service Warranty</h6><p class="text-muted mb-0" style="font-size:0.85rem;">All repairs come with a warranty for your peace of mind.</p></div>
                </div>
                <div class="feat-box">
                    <div class="feat-icon"><i class="fa fa-tag fa-sm"></i></div>
                    <div><h6 class="fw-bold mb-1">Transparent Pricing</h6><p class="text-muted mb-0" style="font-size:0.85rem;">No hidden charges. Get a clear quote before we start.</p></div>
                </div>
                <div class="feat-box">
                    <div class="feat-icon"><i class="fa fa-map-marker-alt fa-sm"></i></div>
                    <div><h6 class="fw-bold mb-1">Kochi and Kerala Wide</h6><p class="text-muted mb-0" style="font-size:0.85rem;">Serving Kakkanad, Edapally, Aluva, Thrippunithura and more.</p></div>
                </div>
            </div>

            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-primary rounded-4 p-4 p-md-5 text-white">
                    <h3 class="fw-bold mb-3">Book a Repair Now</h3>
                    <p class="opacity-75 mb-4">EssenTechs — Civil line Kakkanad, Kochi, Kerala 682030</p>
                    <div class="d-grid gap-3">
                        <a href="tel:+919746700889" class="btn btn-light btn-lg fw-bold">
                            <i class="fa fa-phone me-2"></i>Call +91 97467 00889
                        </a>
                        <a href="https://wa.me/919746700889" target="_blank" class="btn btn-success btn-lg fw-bold">
                            <i class="fab fa-whatsapp me-2"></i>WhatsApp Us
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg fw-bold">
                            <i class="fa fa-envelope me-2"></i>Send Enquiry
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
