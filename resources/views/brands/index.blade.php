@extends('layouts.app')

@section('title', 'Supported Home Appliance Brands in Kochi | EssenTechs')
@section('meta_description', 'Explore supported AC, refrigerator, washing machine, and microwave oven brands serviced across Kochi, Kakkanad, and Ernakulam by EssenTechs. Certified component-level repair.')
@section('meta_keywords', 'appliance brands Kochi, AC brands, refrigerator brands, washing machine brands, microwave brands, EssenTechs')
@section('canonical', url('/brands'))

@section('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@graph": [
    {
      "@@type": "BreadcrumbList",
      "@@id": "{{ url('/brands') }}#breadcrumb",
      "itemListElement": [
        {
          "@@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "{{ url('/') }}"
        },
        {
          "@@type": "ListItem",
          "position": 2,
          "name": "Brands",
          "item": "{{ url('/brands') }}"
        }
      ]
    },
    {
      "@@type": "LocalBusiness",
      "@@id": "https://essentechs.com/#localbusiness",
      "name": "Essentechs",
      "telephone": "+919746700889",
      "email": "info@essentechs.com",
      "address": {
        "@@type": "PostalAddress",
        "streetAddress": "Civil Line Kakkanad - Kunneparambu Road, Office No. KRA-52",
        "addressLocality": "Kochi",
        "addressRegion": "Kerala",
        "postalCode": "682030",
        "addressCountry": "IN"
      }
    }
  ]
}
</script>
@endsection

@section('content')
<!-- Breadcrumbs Start -->
<div class="bg-light py-3 border-bottom">
    <div class="container">
        <nav aria-label="Breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Brands We Service</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Hero Section Start -->
<section class="py-5 bg-white border-bottom" aria-labelledby="brands-hub-title">
    <div class="container text-center py-4">
        <span class="badge bg-primary-subtle text-primary fw-bold px-3 py-2 rounded-pill text-uppercase mb-3 d-inline-block">
            <i class="fas fa-check-circle me-1"></i> Multi-Brand Home Appliance Specialists
        </span>
        <h1 id="brands-hub-title" class="display-4 fw-bold text-dark mb-4">Supported Appliance Brands in Kochi</h1>
        <p class="lead text-muted mx-auto mb-4" style="max-width: 800px;">
            At EssenTechs, we service all leading Indian and international appliance manufacturers with component-level diagnostics, pure refrigerants, and genuine-grade replacement parts.
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="#ac-brands" class="btn btn-outline-primary rounded-pill px-4 py-2"><i class="fas fa-snowflake me-1"></i> AC Brands (21)</a>
            <a href="#refrigerator-brands" class="btn btn-outline-primary rounded-pill px-4 py-2"><i class="fas fa-temperature-low me-1"></i> Fridge Brands (15)</a>
            <a href="#washing-brands" class="btn btn-outline-primary rounded-pill px-4 py-2"><i class="fas fa-sync-alt me-1"></i> Washer Brands (16)</a>
            <a href="#microwave-brands" class="btn btn-outline-primary rounded-pill px-4 py-2"><i class="fas fa-microchip me-1"></i> Microwave Brands (15)</a>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- AC Brands Section Start -->
<section id="ac-brands" class="py-5 bg-light" aria-labelledby="ac-heading">
    <div class="container py-3">
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
            <div>
                <span class="badge bg-primary text-white px-3 py-1 rounded-pill mb-1">Cooling Systems</span>
                <h2 id="ac-heading" class="h3 fw-bold mb-0">Air Conditioner (AC) Brands We Service</h2>
            </div>
            <a href="{{ url('/ac-service-repair-kochi') }}" class="btn btn-sm btn-primary fw-semibold">
                View AC Service Hub <i class="fas fa-arrow-right ms-1"></i>
            </a>
        </div>
        <div class="row g-3">
            @foreach($applianceBrands['ac']['brands'] as $b)
            @php $logo = \App\Services\ApplianceCatalogService::getBrandLogo($b['slug']); @endphp
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="{{ url('/ac/' . $b['slug'] . '/') }}" class="card text-decoration-none h-100 border rounded-3 p-3 shadow-sm hover-shadow transition bg-white d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-center mb-3 p-2 bg-light rounded" style="height: 65px;">
                        @if($logo)
                            <img src="{{ $logo }}" alt="{{ $b['name'] }} Logo" class="img-fluid" style="max-height: 45px; max-width: 140px; object-fit: contain;">
                        @else
                            <span class="h6 fw-bold text-dark mb-0">{{ $b['name'] }}</span>
                        @endif
                    </div>
                    <div class="mt-auto pt-2 border-top d-flex justify-content-between align-items-center">
                        <span class="small fw-semibold text-dark">{{ $b['name'] }}</span>
                        <span class="badge bg-light text-primary border small">View Model <i class="fas fa-chevron-right ms-1 small"></i></span>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- AC Brands Section End -->

<!-- Refrigerator Brands Section Start -->
<section id="refrigerator-brands" class="py-5 bg-white border-top border-bottom" aria-labelledby="refrigerator-heading">
    <div class="container py-3">
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
            <div>
                <span class="badge bg-success text-white px-3 py-1 rounded-pill mb-1">Refrigeration Care</span>
                <h2 id="refrigerator-heading" class="h3 fw-bold mb-0">Refrigerator & Fridge Brands We Service</h2>
            </div>
            <a href="{{ url('/refrigerator-repair-service-kochi') }}" class="btn btn-sm btn-success fw-semibold">
                View Fridge Service Hub <i class="fas fa-arrow-right ms-1"></i>
            </a>
        </div>
        <div class="row g-3">
            @foreach($applianceBrands['refrigerator']['brands'] as $b)
            @php $logo = \App\Services\ApplianceCatalogService::getBrandLogo($b['slug']); @endphp
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="{{ url('/refrigerator/' . $b['slug'] . '/') }}" class="card text-decoration-none h-100 border rounded-3 p-3 shadow-sm hover-shadow transition bg-white d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-center mb-3 p-2 bg-light rounded" style="height: 65px;">
                        @if($logo)
                            <img src="{{ $logo }}" alt="{{ $b['name'] }} Logo" class="img-fluid" style="max-height: 45px; max-width: 140px; object-fit: contain;">
                        @else
                            <span class="h6 fw-bold text-dark mb-0">{{ $b['name'] }}</span>
                        @endif
                    </div>
                    <div class="mt-auto pt-2 border-top d-flex justify-content-between align-items-center">
                        <span class="small fw-semibold text-dark">{{ $b['name'] }}</span>
                        <span class="badge bg-light text-success border small">View Model <i class="fas fa-chevron-right ms-1 small"></i></span>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Refrigerator Brands Section End -->

<!-- Washing Machine Brands Section Start -->
<section id="washing-brands" class="py-5 bg-light" aria-labelledby="washing-heading">
    <div class="container py-3">
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
            <div>
                <span class="badge bg-info text-dark px-3 py-1 rounded-pill mb-1">Laundry Care</span>
                <h2 id="washing-heading" class="h3 fw-bold mb-0">Washing Machine Brands We Service</h2>
            </div>
            <a href="{{ url('/washing-machine-repair-service-kochi') }}" class="btn btn-sm btn-primary fw-semibold">
                View Washer Service Hub <i class="fas fa-arrow-right ms-1"></i>
            </a>
        </div>
        <div class="row g-3">
            @foreach($applianceBrands['washing_machine']['brands'] as $b)
            @php $logo = \App\Services\ApplianceCatalogService::getBrandLogo($b['slug']); @endphp
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="{{ url('/washing-machine/' . $b['slug'] . '/') }}" class="card text-decoration-none h-100 border rounded-3 p-3 shadow-sm hover-shadow transition bg-white d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-center mb-3 p-2 bg-light rounded" style="height: 65px;">
                        @if($logo)
                            <img src="{{ $logo }}" alt="{{ $b['name'] }} Logo" class="img-fluid" style="max-height: 45px; max-width: 140px; object-fit: contain;">
                        @else
                            <span class="h6 fw-bold text-dark mb-0">{{ $b['name'] }}</span>
                        @endif
                    </div>
                    <div class="mt-auto pt-2 border-top d-flex justify-content-between align-items-center">
                        <span class="small fw-semibold text-dark">{{ $b['name'] }}</span>
                        <span class="badge bg-light text-primary border small">View Model <i class="fas fa-chevron-right ms-1 small"></i></span>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Washing Machine Brands Section End -->

<!-- Microwave Oven Brands Section Start -->
<section id="microwave-brands" class="py-5 bg-white border-top border-bottom" aria-labelledby="microwave-heading">
    <div class="container py-3">
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
            <div>
                <span class="badge bg-warning text-dark px-3 py-1 rounded-pill mb-1">Kitchen Appliances</span>
                <h2 id="microwave-heading" class="h3 fw-bold mb-0">Microwave Oven Brands We Service</h2>
            </div>
            <a href="{{ url('/microwave-oven/') }}" class="btn btn-sm btn-dark fw-semibold">
                View Microwave Service Hub <i class="fas fa-arrow-right ms-1"></i>
            </a>
        </div>
        <div class="row g-3">
            @foreach($applianceBrands['microwave']['brands'] as $b)
            @php $logo = \App\Services\ApplianceCatalogService::getBrandLogo($b['slug']); @endphp
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="{{ url('/microwave-oven/' . $b['slug'] . '/') }}" class="card text-decoration-none h-100 border rounded-3 p-3 shadow-sm hover-shadow transition bg-white d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-center mb-3 p-2 bg-light rounded" style="height: 65px;">
                        @if($logo)
                            <img src="{{ $logo }}" alt="{{ $b['name'] }} Logo" class="img-fluid" style="max-height: 45px; max-width: 140px; object-fit: contain;">
                        @else
                            <span class="h6 fw-bold text-dark mb-0">{{ $b['name'] }}</span>
                        @endif
                    </div>
                    <div class="mt-auto pt-2 border-top d-flex justify-content-between align-items-center">
                        <span class="small fw-semibold text-dark">{{ $b['name'] }}</span>
                        <span class="badge bg-light text-dark border small">View Model <i class="fas fa-chevron-right ms-1 small"></i></span>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="mt-4 p-3 bg-light rounded text-center small text-muted">
            <i class="fas fa-info-circle me-1" aria-hidden="true"></i>
            <em>Disclaimer: EssenTechs is an independent home appliance service provider and is not affiliated with or an authorized service center of the respective brand manufacturers. All brand logos and names are used strictly for identification purposes.</em>
        </div>
    </div>
</section>
<!-- Microwave Oven Brands Section End -->

<!-- CTA Banner Start -->
<section class="py-5 bg-primary text-white" aria-label="Book Doorstep Appliance Repair">
    <div class="container text-center py-3">
        <h2 class="display-6 fw-bold text-white mb-3">Can't Find Your Brand?</h2>
        <p class="lead mb-4 mx-auto" style="max-width: 650px;">
            We service virtually all residential appliances across Kochi, Kakkanad, and Ernakulam. Contact our helpline to confirm parts availability for your model.
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="tel:+919746700889" class="btn btn-light btn-lg px-4 py-3 fw-bold text-primary" aria-label="Call +91 97467 00889">
                <i class="fas fa-phone-alt me-2" aria-hidden="true"></i> Call +91 97467 00889
            </a>
            <a href="https://wa.me/919746700889" target="_blank" rel="noopener noreferrer" class="btn btn-success btn-lg px-4 py-3 fw-bold" aria-label="Chat on WhatsApp">
                <i class="fab fa-whatsapp me-2" aria-hidden="true"></i> WhatsApp Us Now
            </a>
        </div>
    </div>
</section>
<!-- CTA Banner End -->
@endsection
