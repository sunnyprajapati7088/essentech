@extends('layouts.app')

@section('title', $brandData['meta_title'])
@section('meta_description', $brandData['meta_description'])
@section('meta_keywords', strtolower($brandData['name']) . ' microwave repair, ' . strtolower($brandData['name']) . ' microwave service Kochi, magnetron replacement, ' . strtolower($brandData['name']) . ' oven technician')
@section('canonical', url('/microwave-oven/' . $brandData['slug'] . '/'))

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "{{ url('/microwave-oven/' . $brandData['slug'] . '/') }}#service",
      "name": "{{ $brandData['h1'] }}",
      "provider": {
        "@type": "LocalBusiness",
        "@id": "https://essentechs.com/#localbusiness",
        "name": "Essentechs"
      },
      "serviceType": "Microwave Oven Repair",
      "areaServed": {
        "@type": "AdministrativeArea",
        "name": "Kochi, Kerala"
      },
      "description": "{{ $brandData['meta_description'] }}"
    },
    {
      "@type": "BreadcrumbList",
      "@id": "{{ url('/microwave-oven/' . $brandData['slug'] . '/') }}#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "{{ url('/') }}"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Services",
          "item": "{{ url('/services') }}"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Microwave Oven",
          "item": "{{ url('/microwave-oven/') }}"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "{{ $brandData['name'] }}",
          "item": "{{ url('/microwave-oven/' . $brandData['slug'] . '/') }}"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "{{ url('/microwave-oven/' . $brandData['slug'] . '/') }}#faq",
      "mainEntity": [
        @foreach($brandData['faqs'] as $index => $faq)
        {
          "@type": "Question",
          "name": "{{ $faq['q'] }}",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "{{ $faq['a'] }}"
          }
        }@if(!$loop->last),@endif
        @endforeach
      ]
    }
  ]
}
</script>
@endsection

@section('content')
<!-- Breadcrumb Start -->
<div class="bg-light py-3 border-bottom">
    <div class="container">
        <nav aria-label="Breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/services') }}" class="text-decoration-none">Services</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/microwave-oven/') }}" class="text-decoration-none">Microwave Oven</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $brandData['name'] }}</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Hero Section Start -->
<section class="py-5 bg-white border-bottom" aria-labelledby="brand-hero-title">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-8">
                <span class="badge bg-primary-subtle text-primary fw-bold px-3 py-2 rounded-pill text-uppercase mb-3 d-inline-block">
                    <i class="fas fa-certificate me-1" aria-hidden="true"></i> {{ $brandData['badge'] }}
                </span>
                <h1 id="brand-hero-title" class="display-4 fw-bold text-dark mb-4">{{ $brandData['h1'] }}</h1>
                <p class="lead text-muted mb-4">
                    {{ $brandData['hero_subtitle'] }}
                </p>
                <div class="d-flex flex-wrap gap-3 mb-4">
                    <a href="tel:+919746700889" class="btn btn-primary btn-lg px-4 py-3" aria-label="Call +91 97467 00889 to book {{ $brandData['name'] }} service">
                        <i class="fas fa-phone-alt me-2" aria-hidden="true"></i> Book {{ $brandData['name'] }} Service
                    </a>
                    <a href="https://wa.me/919746700889" target="_blank" rel="noopener noreferrer" class="btn btn-success btn-lg px-4 py-3" aria-label="WhatsApp our technicians">
                        <i class="fab fa-whatsapp me-2" aria-hidden="true"></i> Chat on WhatsApp
                    </a>
                </div>
                <div class="p-3 bg-light rounded-3 d-flex align-items-center gap-3 border">
                    <i class="fas fa-shield-alt text-primary fs-3" aria-hidden="true"></i>
                    <div class="small text-muted">
                        <strong>Independent Specialist Service:</strong> We provide specialized, component-level repair for {{ $brandData['name'] }} microwave ovens using calibrated equipment and original-spec components.
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 p-4 bg-light">
                    <h2 class="h5 fw-bold mb-3"><i class="fas fa-clipboard-list text-primary me-2" aria-hidden="true"></i>Key Service Highlights</h2>
                    <ul class="list-unstyled mb-0 d-flex flex-column gap-2 small">
                        <li class="d-flex align-items-center"><i class="fas fa-check-circle text-success me-2" aria-hidden="true"></i> Doorstep visit across Kochi & Ernakulam</li>
                        <li class="d-flex align-items-center"><i class="fas fa-check-circle text-success me-2" aria-hidden="true"></i> Calibrated high-voltage safety testing</li>
                        <li class="d-flex align-items-center"><i class="fas fa-check-circle text-success me-2" aria-hidden="true"></i> Transparent, upfront diagnostic quotes</li>
                        <li class="d-flex align-items-center"><i class="fas fa-check-circle text-success me-2" aria-hidden="true"></i> Solo, grill & convection models serviced</li>
                        <li class="d-flex align-items-center"><i class="fas fa-check-circle text-success me-2" aria-hidden="true"></i> Radiation leakage verification</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Overview Section Start -->
<section class="py-5 bg-light" aria-labelledby="overview-heading">
    <div class="container py-3">
        <div class="row g-5 align-items-center">
            <div class="col-lg-7">
                <h2 id="overview-heading" class="display-6 fw-bold mb-4">{{ $brandData['intro_heading'] }}</h2>
                @foreach($brandData['intro_paragraphs'] as $para)
                    <p class="text-secondary leading-relaxed mb-3">{{ $para }}</p>
                @endforeach
            </div>
            <div class="col-lg-5">
                <div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
                    <h3 class="h5 fw-bold mb-3 text-primary"><i class="fas fa-microchip me-2" aria-hidden="true"></i>Supported Technologies</h3>
                    <ul class="list-group list-group-flush small">
                        @foreach($brandData['technologies'] as $tech)
                        <li class="list-group-item px-0 py-2 bg-transparent text-secondary d-flex align-items-center">
                            <i class="fas fa-bolt text-primary me-2 small" aria-hidden="true"></i> {{ $tech }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Overview Section End -->

<!-- Common Problems Section Start -->
<section class="py-5 bg-white border-top border-bottom" aria-labelledby="problems-heading">
    <div class="container py-3">
        <div class="text-center mx-auto mb-5" style="max-width: 750px;">
            <h2 id="problems-heading" class="display-6 fw-bold mb-3">Common {{ $brandData['name'] }} Microwave Issues We Resolve</h2>
            <p class="text-muted">Our technicians diagnose and repair these frequent hardware and electronic faults on-site.</p>
        </div>
        <div class="row g-4">
            @foreach($brandData['common_problems'] as $issue)
            <div class="col-md-6">
                <div class="card h-100 border rounded-4 p-4 shadow-sm">
                    <div class="d-flex align-items-center mb-2">
                        <i class="fas fa-exclamation-triangle text-warning fs-5 me-2" aria-hidden="true"></i>
                        <h3 class="h5 fw-bold text-dark mb-0">{{ $issue['title'] }}</h3>
                    </div>
                    <div class="small mb-2">
                        <strong class="text-secondary">Symptom:</strong> <span class="text-muted">{{ $issue['symptom'] }}</span>
                    </div>
                    <div class="small mb-2">
                        <strong class="text-danger">Cause:</strong> <span class="text-muted">{{ $issue['cause'] }}</span>
                    </div>
                    <div class="small mt-auto pt-2 border-top">
                        <strong class="text-success">Essentechs Solution:</strong> <span class="text-muted">{{ $issue['solution'] }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Common Problems Section End -->

<!-- Services Offered & Supported Models Start -->
<section class="py-5 bg-light" aria-labelledby="solutions-heading">
    <div class="container py-3">
        <div class="row g-5">
            <div class="col-lg-6">
                <h2 id="solutions-heading" class="h3 fw-bold mb-4">Our {{ $brandData['name'] }} Repair Services</h2>
                <div class="row g-3">
                    @foreach($brandData['services_offered'] as $serviceName)
                    <div class="col-12">
                        <div class="p-3 bg-white rounded-3 border d-flex align-items-center shadow-sm">
                            <i class="fas fa-check text-primary me-3" aria-hidden="true"></i>
                            <span class="fw-semibold text-dark">{{ $serviceName }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="h3 fw-bold mb-4">Supported {{ $brandData['name'] }} Models</h2>
                <div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
                    <p class="text-muted small mb-3">
                        We service all current and legacy {{ $brandData['name'] }} microwave ovens across capacities from 20 Litres up to 34 Litres.
                    </p>
                    <ul class="list-group list-group-flush small">
                        @foreach($brandData['supported_models'] as $modelName)
                        <li class="list-group-item px-0 py-2 text-secondary d-flex align-items-center">
                            <i class="fas fa-layer-group text-primary me-2" aria-hidden="true"></i> {{ $modelName }}
                        </li>
                        @endforeach
                    </ul>
                    <div class="mt-4 pt-3 border-top">
                        <a href="tel:+919746700889" class="btn btn-outline-primary w-100 fw-semibold" aria-label="Book service for {{ $brandData['name'] }}">
                            <i class="fas fa-calendar-check me-2" aria-hidden="true"></i> Schedule Service for Your {{ $brandData['name'] }} Oven
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Offered & Supported Models End -->

<!-- FAQ Section Start -->
<section class="py-5 bg-white border-top border-bottom" aria-labelledby="brand-faq-heading">
    <div class="container py-3">
        <div class="text-center mx-auto mb-5" style="max-width: 750px;">
            <h2 id="brand-faq-heading" class="display-6 fw-bold mb-3">{{ $brandData['name'] }} Microwave Oven FAQs</h2>
            <p class="text-muted">Common questions about servicing and troubleshooting {{ $brandData['name'] }} microwave appliances.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion" id="brandFaqAccordion">
                    @foreach($brandData['faqs'] as $index => $faq)
                    <div class="accordion-item mb-3 border rounded-3 overflow-hidden shadow-sm">
                        <h3 class="accordion-header" id="brandFaqHeading{{ $index }}">
                            <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }} fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#brandFaqCollapse{{ $index }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="brandFaqCollapse{{ $index }}">
                                {{ $faq['q'] }}
                            </button>
                        </h3>
                        <div id="brandFaqCollapse{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" aria-labelledby="brandFaqHeading{{ $index }}" data-bs-parent="#brandFaqAccordion">
                            <div class="accordion-body text-muted">
                                {{ $faq['a'] }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ Section End -->

<!-- Other Microwave Brands & Cross Links Start -->
<section class="py-5 bg-light" aria-labelledby="other-brands-heading">
    <div class="container py-3">
        <h2 id="other-brands-heading" class="h4 fw-bold mb-4 text-center">Explore Other Microwave Oven Brands We Service</h2>
        <div class="d-flex flex-wrap gap-2 justify-content-center mb-4">
            @foreach($otherBrands as $ob)
            <a href="{{ url('/microwave-oven/' . $ob['slug'] . '/') }}" class="btn btn-sm btn-outline-secondary rounded-pill bg-white px-3 py-2">
                {{ $ob['name'] }} Microwave
            </a>
            @endforeach
        </div>
        <div class="p-3 bg-white rounded-3 border text-center small text-muted mx-auto" style="max-width: 800px;">
            Looking for other home appliance services? We also provide certified <a href="{{ url('/ac/') }}" class="text-primary fw-semibold">Air Conditioner (AC) Repair</a>, <a href="{{ url('/service/washing-machine-repair') }}" class="text-primary fw-semibold">Washing Machine Repair</a>, and <a href="{{ url('/service/refrigerator-repair') }}" class="text-primary fw-semibold">Refrigerator Repair</a> across Kochi.
        </div>
    </div>
</section>
<!-- Other Microwave Brands & Cross Links End -->

<!-- CTA Banner Start -->
<section class="py-5 bg-primary text-white" aria-label="Book {{ $brandData['name'] }} Service">
    <div class="container text-center py-2">
        <h2 class="h3 fw-bold text-white mb-3">Ready to Repair Your {{ $brandData['name'] }} Microwave?</h2>
        <p class="lead mb-4 mx-auto" style="max-width: 650px;">
            Get prompt, certified doorstep service in Kochi and Ernakulam with EssenTechs.
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="tel:+919746700889" class="btn btn-light btn-lg px-4 py-3 fw-bold text-primary" aria-label="Call +91 97467 00889">
                <i class="fas fa-phone-alt me-2" aria-hidden="true"></i> Call +91 97467 00889
            </a>
            <a href="https://wa.me/919746700889" target="_blank" rel="noopener noreferrer" class="btn btn-success btn-lg px-4 py-3 fw-bold" aria-label="Chat on WhatsApp">
                <i class="fab fa-whatsapp me-2" aria-hidden="true"></i> WhatsApp Now
            </a>
        </div>
    </div>
</section>
<!-- CTA Banner End -->
@endsection
