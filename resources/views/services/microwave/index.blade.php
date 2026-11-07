@extends('layouts.app')

@section('title', 'Microwave Oven Service & Repair | Essentechs')
@section('meta_description', 'Reliable microwave oven service and repair solutions from Essentechs in Kochi. Fast troubleshooting for heating failures, magnetron sparking, and touch panel errors.')
@section('meta_keywords', 'microwave oven service, microwave repair Kochi, microwave oven maintenance, magnetron repair, convection microwave service, Kochi, Ernakulam')
@section('canonical', url('/microwave-oven/'))

@section('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@graph": [
    {
      "@@type": "Service",
      "@@id": "{{ url('/microwave-oven/') }}#service",
      "name": "Microwave Oven Service & Repair",
      "provider": {
        "@@type": "LocalBusiness",
        "@@id": "https://essentechs.com/#localbusiness",
        "name": "Essentechs"
      },
      "serviceType": "Appliance Repair",
      "areaServed": {
        "@@type": "AdministrativeArea",
        "name": "Kochi, Kerala"
      },
      "description": "Reliable microwave oven service and repair solutions from Essentechs. Component-level diagnostics for solo, grill, and convection microwaves."
    },
    {
      "@@type": "BreadcrumbList",
      "@@id": "{{ url('/microwave-oven/') }}#breadcrumb",
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
          "name": "Services",
          "item": "{{ url('/services') }}"
        },
        {
          "@@type": "ListItem",
          "position": 3,
          "name": "Microwave Oven",
          "item": "{{ url('/microwave-oven/') }}"
        }
      ]
    },
    {
      "@@type": "FAQPage",
      "@@id": "{{ url('/microwave-oven/') }}#faq",
      "mainEntity": [
        @foreach($faqs as $index => $faq)
        {
          "@@type": "Question",
          "name": "{{ $faq['q'] }}",
          "acceptedAnswer": {
            "@@type": "Answer",
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
<!-- Breadcrumbs Start -->
<div class="bg-light py-3 border-bottom">
    <div class="container">
        <nav aria-label="Breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/services') }}" class="text-decoration-none">Services</a></li>
                <li class="breadcrumb-item active" aria-current="page">Microwave Oven</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Hero Section Start -->
<section class="py-5 bg-white border-bottom" aria-labelledby="hero-title">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <span class="badge bg-primary-subtle text-primary fw-bold px-3 py-2 rounded-pill text-uppercase mb-3 d-inline-block">
                    <i class="fas fa-check-circle me-1" aria-hidden="true"></i> Doorstep Appliance Care Across Kochi
                </span>
                <h1 id="hero-title" class="display-4 fw-bold text-dark mb-4">Microwave Oven Service & Repair</h1>
                <p class="lead text-muted mb-4">
                    Reliable microwave oven service and repair solutions from Essentechs.
                </p>
                <p class="text-secondary mb-4">
                    Whether your microwave oven is experiencing heating drop-offs, sparking inside the cavity, blown safety fuses, or an unresponsive touch panel, our certified technicians provide prompt, on-site diagnostics and repairs across Kochi and Ernakulam.
                </p>
                <div class="d-flex flex-wrap gap-3 mb-4">
                    <a href="tel:+919746700889" class="btn btn-primary btn-lg px-4 py-3" aria-label="Book a Service by calling +91 97467 00889">
                        <i class="fas fa-phone-alt me-2" aria-hidden="true"></i> Book a Service
                    </a>
                    <a href="{{ url('/contact') }}" class="btn btn-outline-dark btn-lg px-4 py-3" aria-label="Contact EssenTechs support">
                        <i class="fas fa-envelope me-2" aria-hidden="true"></i> Contact Us
                    </a>
                </div>
                <div class="row g-3 pt-3 border-top">
                    <div class="col-sm-4">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-bolt text-primary fs-4 me-2" aria-hidden="true"></i>
                            <span class="small fw-semibold">Same-Day Doorstep Visit</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-tools text-primary fs-4 me-2" aria-hidden="true"></i>
                            <span class="small fw-semibold">Quality Replacement Parts</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-shield-alt text-primary fs-4 me-2" aria-hidden="true"></i>
                            <span class="small fw-semibold">Radiation & Safety Tested</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                    <img src="{{ asset('img/technician-microwave.jpg') }}" class="img-fluid w-100" alt="Essen Techs certified technician diagnosing microwave oven circuit" width="600" height="400" style="object-fit: cover; max-height: 400px;">
                    <div class="card-body p-4 bg-light">
                        <h2 class="h5 fw-bold mb-2">Need Urgent Assistance?</h2>
                        <p class="small text-muted mb-3">Speak directly with an appliance technician to discuss your microwave's symptoms.</p>
                        <a href="https://wa.me/919746700889" target="_blank" rel="noopener noreferrer" class="btn btn-success w-100 py-2 fw-semibold" aria-label="Chat with our technicians on WhatsApp">
                            <i class="fab fa-whatsapp me-2" aria-hidden="true"></i> WhatsApp Us: +91 97467 00889
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Services Section Start -->
<section class="py-5 bg-light" aria-labelledby="services-heading">
    <div class="container py-4">
        <div class="text-center mx-auto mb-5" style="max-width: 750px;">
            <h2 id="services-heading" class="display-6 fw-bold mb-3">Specialized Microwave Oven Services</h2>
            <p class="text-muted">
                From solo heating units to multi-stage convection ovens, our technicians resolve electrical, mechanical, and microwave generation issues safely.
            </p>
        </div>
        <div class="row g-4">
            @foreach($services as $svc)
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 transition-hover">
                    <div class="mb-3 d-inline-flex align-items-center justify-content-center bg-primary-subtle text-primary rounded-3 p-3" style="width: 56px; height: 56px;">
                        <i class="{{ $svc['icon'] }} fs-4" aria-hidden="true"></i>
                    </div>
                    <h3 class="h5 fw-bold mb-3">{{ $svc['title'] }}</h3>
                    <p class="text-muted small mb-4 flex-grow-1">{{ $svc['description'] }}</p>
                    <a href="tel:+919746700889" class="btn btn-sm btn-outline-primary fw-semibold rounded-pill" aria-label="{{ $svc['cta_text'] }} for {{ $svc['title'] }}">
                        {{ $svc['cta_text'] }} <i class="fas fa-arrow-right ms-1 small" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Brands Section Start -->
<section class="py-5 bg-white border-top border-bottom" aria-labelledby="brands-heading">
    <div class="container py-4">
        <div class="text-center mx-auto mb-5" style="max-width: 800px;">
            <h2 id="brands-heading" class="display-6 fw-bold mb-3">Microwave Oven Brands We Service</h2>
            <p class="text-muted">
                We provide independent, component-level repair and maintenance solutions for leading microwave oven brands across Kochi and Ernakulam. Click any brand to learn about specific troubleshooting and model support.
            </p>
        </div>
        <div class="row g-3">
            @foreach($brands as $b)
            @php $logo = \App\Services\ApplianceCatalogService::getBrandLogo($b['slug']); @endphp
            <div class="col-lg-4 col-md-6">
                <a href="{{ url('/microwave-oven/' . $b['slug'] . '/') }}" class="card text-decoration-none h-100 border rounded-3 p-3 shadow-sm hover-shadow transition bg-white d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-between mb-3 pb-2 border-bottom">
                        <div class="d-flex align-items-center" style="height: 48px;">
                            @if($logo)
                                <img src="{{ $logo }}" alt="{{ $b['name'] }} Logo" class="img-fluid" style="max-height: 40px; max-width: 130px; object-fit: contain;">
                            @else
                                <span class="h5 fw-bold text-dark mb-0">{{ $b['name'] }}</span>
                            @endif
                        </div>
                        <span class="badge bg-light text-primary border small">View Brand Page <i class="fas fa-chevron-right ms-1 small" aria-hidden="true"></i></span>
                    </div>
                    <p class="small text-muted mb-0 mt-auto">
                        {{ $b['badge'] }} — solo, grill, and convection model support.
                    </p>
                </a>
            </div>
            @endforeach
        </div>
        <div class="mt-4 p-3 bg-light rounded text-center small text-muted">
            <i class="fas fa-info-circle me-1" aria-hidden="true"></i>
            <em>Disclaimer: Essentechs is an independent home appliance service provider and is not affiliated with or an authorized service center of the respective brand manufacturers. All brand names are used strictly for identification purposes.</em>
        </div>
    </div>
</section>
<!-- Brands Section End -->

<!-- Process Section Start -->
<section class="py-5 bg-light" aria-labelledby="process-heading">
    <div class="container py-4">
        <div class="text-center mx-auto mb-5" style="max-width: 700px;">
            <h2 id="process-heading" class="display-6 fw-bold mb-3">Our 4-Step Repair Process</h2>
            <p class="text-muted">Simple, transparent, and safe doorstep microwave servicing.</p>
        </div>
        <div class="row g-4 text-center">
            <div class="col-md-3">
                <div class="p-3">
                    <div class="rounded-circle bg-white shadow-sm d-inline-flex align-items-center justify-content-center text-primary fw-bold fs-4 mb-3" style="width: 70px; height: 70px;">1</div>
                    <h3 class="h6 fw-bold">Doorstep Diagnostic</h3>
                    <p class="small text-muted">Technician visits your home, inspects high-voltage circuits, and identifies the root issue.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3">
                    <div class="rounded-circle bg-white shadow-sm d-inline-flex align-items-center justify-content-center text-primary fw-bold fs-4 mb-3" style="width: 70px; height: 70px;">2</div>
                    <h3 class="h6 fw-bold">Transparent Quote</h3>
                    <p class="small text-muted">Clear upfront estimate covering required components and service charges before work starts.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3">
                    <div class="rounded-circle bg-white shadow-sm d-inline-flex align-items-center justify-content-center text-primary fw-bold fs-4 mb-3" style="width: 70px; height: 70px;">3</div>
                    <h3 class="h6 fw-bold">Expert Repair</h3>
                    <p class="small text-muted">Careful replacement using calibrated tools, anti-arc cavity treatment, and wire crimping.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3">
                    <div class="rounded-circle bg-white shadow-sm d-inline-flex align-items-center justify-content-center text-primary fw-bold fs-4 mb-3" style="width: 70px; height: 70px;">4</div>
                    <h3 class="h6 fw-bold">Safety Testing</h3>
                    <p class="small text-muted">Comprehensive radiation leak detection, temperature rise measurement, and cleanup.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Process Section End -->

<!-- FAQ Section Start -->
<section class="py-5 bg-white" aria-labelledby="faq-heading">
    <div class="container py-4">
        <div class="text-center mx-auto mb-5" style="max-width: 750px;">
            <h2 id="faq-heading" class="display-6 fw-bold mb-3">Frequently Asked Questions</h2>
            <p class="text-muted">Answers to common questions regarding microwave oven issues and repair solutions.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion" id="microwaveFaqAccordion">
                    @foreach($faqs as $index => $faq)
                    <div class="accordion-item mb-3 border rounded-3 overflow-hidden shadow-sm">
                        <h3 class="accordion-header" id="faqHeading{{ $index }}">
                            <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }} fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse{{ $index }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="faqCollapse{{ $index }}">
                                {{ $faq['q'] }}
                            </button>
                        </h3>
                        <div id="faqCollapse{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" aria-labelledby="faqHeading{{ $index }}" data-bs-parent="#microwaveFaqAccordion">
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

<!-- CTA Banner Start -->
<section class="py-5 bg-primary text-white" aria-label="Book Microwave Repair">
    <div class="container text-center py-3">
        <h2 class="display-6 fw-bold text-white mb-3">Restore Your Microwave Today</h2>
        <p class="lead mb-4 mx-auto" style="max-width: 650px;">
            Fast, reliable, and affordable doorstep microwave repairs across Kochi, Kakkanad, and Ernakulam.
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
