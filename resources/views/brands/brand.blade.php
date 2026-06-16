@extends('layouts.app')

@section('title', $title)
@section('meta_description', $meta_description)
@section('meta_keywords', $meta_keywords)



@section('style')
<style>
    .page-hero { background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%); color: white; padding: 60px 0 40px; }
    .breadcrumb-item a { color: rgba(255,255,255,0.8); text-decoration: none; }
    .breadcrumb-item.active { color: white; }
    .appliance-card { border: none; border-radius: 14px; overflow: hidden; box-shadow: 0 4px 18px rgba(0,0,0,0.07); transition: all 0.3s ease; background: #fff; height: 100%; }
    .appliance-card:hover { transform: translateY(-6px); box-shadow: 0 16px 40px rgba(13,110,253,0.15); }
    .appliance-card .card-icon { height: 160px; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #e8f4fd, #d0e8fb); }
    .appliance-card .card-icon i { font-size: 5rem; color: #0d6efd; }
    .appliance-card .card-body { padding: 1.25rem; }
    .appliance-card h3 { font-size: 1rem; font-weight: 700; color: #1a1a2e; }
    .appliance-card p { font-size: 0.85rem; color: #6c757d; }
    .appliance-badge { background: #e8f4fd; color: #0d6efd; font-size: 0.75rem; padding: 3px 10px; border-radius: 20px; font-weight: 600; }
    .brand-logo-box { background: white; border-radius: 16px; padding: 20px 30px; display: inline-block; box-shadow: 0 4px 20px rgba(0,0,0,0.1); }
    .blog-mini-card { border-radius: 10px; border: 1px solid #e9ecef; padding: 15px; transition: all 0.2s; }
    .blog-mini-card:hover { border-color: #0d6efd; background: #f8fbff; }
    .section-title { font-size: 1.8rem; font-weight: 800; color: #1a1a2e; }
</style>
@endsection

@section('content')

<!-- Hero -->
<div class="page-hero wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-3">
                <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home me-1"></i>Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('brands.index') }}">Brands</a></li>
                <li class="breadcrumb-item active">{{ $brand['name'] }}</li>
            </ol>
        </nav>
        <div class="d-flex align-items-center gap-4 flex-wrap">
            <div class="brand-logo-box" style="background:{{ $brand['color'] }};">
                <span style="color:{{ $brand['text'] }};font-size:1.8rem;font-weight:900;letter-spacing:2px;">{{ strtoupper(substr($brand['name'],0,2)) }}</span>
            </div>
            <div>
                <h1 class="fw-bold mb-1">{{ $brand['name'] }} Appliance Repair in Kochi, Kerala</h1>
                <p class="mb-0 opacity-75">EssenTechs | +91 97467 00889 | Civil line Kakkanad, Kochi 682030</p>
            </div>
        </div>
    </div>
</div>

<!-- Appliances Grid -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <p class="text-primary fw-semibold mb-1">{{ $brand['name'] }} Repair Services</p>
            <h2 class="section-title">Select Your {{ $brand['name'] }} Appliance</h2>
            <p class="text-muted mt-2">EssenTechs provides expert {{ $brand['name'] }} repair for all home appliances in Kochi, Kerala. Click your appliance for detailed repair information.</p>
        </div>

        <div class="row g-4">
            @foreach($appliances as $i => $appliance)
            <div class="col-lg-3 col-md-4 col-6 wow fadeInUp" data-wow-delay="{{ ($i % 4) * 0.1 + 0.1 }}s">
                <a href="{{ route('brands.appliance', [$brand['slug'], $appliance['slug']]) }}" style="text-decoration:none;">
                    <div class="appliance-card h-100">
                        <div style="position:relative;">
                            <div class="card-icon">
                                <i class="fa {{ $appliance['icon'] }}"></i>
                            </div>
                            <div style="position:absolute;top:10px;left:10px;">
                                <span class="appliance-badge">{{ $appliance['name'] }}</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="mb-1">{{ $brand['name'] }} {{ $appliance['name'] }}</h3>
                            <p class="mb-2">{{ $appliance['desc'] }}</p>
                            <span class="text-primary fw-semibold" style="font-size:0.85rem;">
                                View Details <i class="fa fa-arrow-right ms-1"></i>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Related Blogs -->
@if($blogs->count() > 0)
<div class="container-xxl pb-5">
    <div class="container">
        <h2 class="section-title mb-4 wow fadeInUp" data-wow-delay="0.1s">
            {{ $brand['name'] }} Repair Guides & Tips
        </h2>
        <div class="row g-3">
            @foreach($blogs as $blog)
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <a href="{{ route('blog.details', $blog->slug) }}" style="text-decoration:none;">
                    <div class="blog-mini-card">
                        <div class="d-flex align-items-start gap-3">
                            <img src="{{ $blog->featured_image ? asset('storage/' . $blog->featured_image) : asset('img/default-blog.jpg') }}"
                                 style="width:70px;height:70px;object-fit:cover;border-radius:8px;" alt="{{ $blog->title }}">
                            <div>
                                <h6 class="fw-bold text-dark mb-1" style="font-size:0.9rem;line-height:1.3;">{{ Str::limit($blog->title, 60) }}</h6>
                                <span class="text-primary" style="font-size:0.8rem;">Read More <i class="fa fa-arrow-right"></i></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif

<!-- CTA -->
<div class="container-xxl pb-5">
    <div class="container">
        <div class="bg-primary rounded-4 p-4 p-md-5 text-white wow fadeInUp" data-wow-delay="0.1s">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h3 class="fw-bold mb-2">Need {{ $brand['name'] }} Appliance Repair in Kochi?</h3>
                    <p class="opacity-75 mb-0">EssenTechs — Civil line Kakkanad, Kochi, Kerala 682030 | Same-day service available</p>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <a href="tel:+919746700889" class="btn btn-light btn-lg fw-bold me-2">
                        <i class="fa fa-phone me-1"></i> Call Now
                    </a>
                    <a href="https://wa.me/919746700889" target="_blank" class="btn btn-success btn-lg fw-bold">
                        <i class="fab fa-whatsapp me-1"></i> WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
