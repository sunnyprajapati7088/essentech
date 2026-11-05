@extends('layouts.app')

@section('title', 'AC Service & Repair | Essentechs')
@section('meta_description', 'Reliable air conditioner service, repair and maintenance solutions from Essentechs in Kochi. Fast troubleshooting for cooling problems, gas leaks, and PCB faults.')
@section('meta_keywords', 'AC repair Kochi, AC service Ernakulam, air conditioner maintenance, AC gas charging R32, split AC repair, inverter AC technician')
@section('canonical', url('/ac/'))

@section('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@graph": [
    {
      "@@type": "Service",
      "@@id": "{{ url('/ac/') }}#service",
      "name": "AC Service & Repair",
      "provider": {
        "@@type": "LocalBusiness",
        "@@id": "https://essentechs.com/#localbusiness",
        "name": "Essentechs"
      },
      "serviceType": "Air Conditioning Service",
      "areaServed": {
        "@@type": "AdministrativeArea",
        "name": "Kochi, Kerala"
      },
      "description": "Reliable air conditioner service, repair and maintenance solutions from Essentechs. Component diagnostics for inverter and split air conditioners."
    },
    {
      "@@type": "BreadcrumbList",
      "@@id": "{{ url('/ac/') }}#breadcrumb",
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
          "name": "AC",
          "item": "{{ url('/ac/') }}"
        }
      ]
    },
    {
      "@@type": "FAQPage",
      "@@id": "{{ url('/ac/') }}#faq",
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
                <li class="breadcrumb-item active" aria-current="page">AC</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Hero Section Start -->
<section class="py-5 bg-white border-bottom" aria-labelledby="ac-hero-title">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <span class="badge bg-primary-subtle text-primary fw-bold px-3 py-2 rounded-pill text-uppercase mb-3 d-inline-block">
                    <i class="fas fa-snowflake me-1" aria-hidden="true"></i> Top-Rated AC Care Across Kochi & Ernakulam
                </span>
                <h1 id="ac-hero-title" class="display-4 fw-bold text-dark mb-4">AC Service & Repair</h1>
                <p class="lead text-muted mb-4">
                    Reliable air conditioner service, repair and maintenance solutions from Essentechs.
                </p>
                <p class="text-secondary mb-4">
                    Beat the tropical heat with dependable air conditioning solutions from Essentechs. From high-pressure jet washing and pure refrigerant charging to intricate inverter PCB diagnostics and outdoor compressor repairs, our certified cooling engineers ensure uninterrupted indoor comfort.
                </p>
                <div class="d-flex flex-wrap gap-3 mb-4">
                    <a href="tel:+919746700889" class="btn btn-primary btn-lg px-4 py-3" aria-label="Book AC Service by calling +91 97467 00889">
                        <i class="fas fa-phone-alt me-2" aria-hidden="true"></i> Book AC Service
                    </a>
                    <a href="{{ url('/contact') }}" class="btn btn-outline-dark btn-lg px-4 py-3" aria-label="Contact EssenTechs support">
                        <i class="fas fa-envelope me-2" aria-hidden="true"></i> Contact Us
                    </a>
                </div>
                <div class="row g-3 pt-3 border-top">
                    <div class="col-sm-4">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-tools text-primary fs-4 me-2" aria-hidden="true"></i>
                            <span class="small fw-semibold">Inverter AC Specialists</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-gas-pump text-primary fs-4 me-2" aria-hidden="true"></i>
                            <span class="small fw-semibold">Pure R32 / R410A Gas</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-shield-alt text-primary fs-4 me-2" aria-hidden="true"></i>
                            <span class="small fw-semibold">Leak-Tested Guarantee</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                    <img src="{{ asset('img/AC-repair.jpeg') }}" class="img-fluid w-100" alt="Technician repairing air conditioner split system in Kochi" width="600" height="400">
                    <div class="card-body p-4 bg-light">
                        <h2 class="h5 fw-bold mb-2">Need Rapid AC Assistance?</h2>
                        <p class="small text-muted mb-3">Get direct telephone guidance or dispatch a certified technician to your home today.</p>
                        <a href="https://wa.me/919746700889" target="_blank" rel="noopener noreferrer" class="btn btn-success w-100 py-2 fw-semibold" aria-label="Chat with our AC specialists on WhatsApp">
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
<section class="py-5 bg-light" aria-labelledby="ac-services-heading">
    <div class="container py-4">
        <div class="text-center mx-auto mb-5" style="max-width: 750px;">
            <h2 id="ac-services-heading" class="display-6 fw-bold mb-3">Our Air Conditioner (AC) Services</h2>
            <p class="text-muted">
                Complete cooling lifecycle support for residential split ACs, inverter units, window air conditioners, and light commercial cassette systems.
            </p>
        </div>
        <div class="row g-4">
            @foreach($services as $svc)
            <div class="col-lg-4 col-md-6">
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
<section class="py-5 bg-white border-top border-bottom" aria-labelledby="ac-brands-heading">
    <div class="container py-4">
        <div class="text-center mx-auto mb-5" style="max-width: 800px;">
            <h2 id="ac-brands-heading" class="display-6 fw-bold mb-3">AC Brands We Service</h2>
            <p class="text-muted">
                We provide independent, expert repair and maintenance for leading air conditioner brands across Kochi. Click any brand to explore specific model support, common error codes, and troubleshooting solutions.
            </p>
        </div>
        <div class="row g-3">
            @foreach($brands as $b)
            <div class="col-lg-4 col-md-6">
                <a href="{{ url('/ac/' . $b['slug'] . '/') }}" class="card text-decoration-none h-100 border rounded-3 p-3 shadow-sm hover-shadow transition">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="h5 fw-bold text-dark mb-0">{{ $b['name'] }}</span>
                        <span class="badge bg-light text-primary border small">View Brand <i class="fas fa-chevron-right ms-1 small" aria-hidden="true"></i></span>
                    </div>
                    <p class="small text-muted mb-0">
                        {{ $b['badge'] }} — inverter split and window AC repair.
                    </p>
                </a>
            </div>
            @endforeach
        </div>
        <div class="mt-4 p-3 bg-light rounded text-center small text-muted">
            <i class="fas fa-info-circle me-1" aria-hidden="true"></i>
            <em>Disclaimer: Essentechs is an independent air conditioner service provider and is not affiliated with or an authorized service center of the respective brand manufacturers. All brand names are used strictly for identification purposes.</em>
        </div>
    </div>
</section>
<!-- Brands Section End -->

<!-- Process Section Start -->
<section class="py-5 bg-light" aria-labelledby="ac-process-heading">
    <div class="container py-4">
        <div class="text-center mx-auto mb-5" style="max-width: 700px;">
            <h2 id="ac-process-heading" class="display-6 fw-bold mb-3">Our 4-Step AC Service Process</h2>
            <p class="text-muted">High-precision diagnostics, pressure-tested repairs, and clean completion.</p>
        </div>
        <div class="row g-4 text-center">
            <div class="col-md-3">
                <div class="p-3">
                    <div class="rounded-circle bg-white shadow-sm d-inline-flex align-items-center justify-content-center text-primary fw-bold fs-4 mb-3" style="width: 70px; height: 70px;">1</div>
                    <h3 class="h6 fw-bold">Full Diagnostics</h3>
                    <p class="small text-muted">We test operating pressure, delta-T temperature differential, and electrical amp draw.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3">
                    <div class="rounded-circle bg-white shadow-sm d-inline-flex align-items-center justify-content-center text-primary fw-bold fs-4 mb-3" style="width: 70px; height: 70px;">2</div>
                    <h3 class="h6 fw-bold">Upfront Quote</h3>
                    <p class="small text-muted">Clear pricing on required components, nitrogen testing, or gas charging with no surprises.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3">
                    <div class="rounded-circle bg-white shadow-sm d-inline-flex align-items-center justify-content-center text-primary fw-bold fs-4 mb-3" style="width: 70px; height: 70px;">3</div>
                    <h3 class="h6 fw-bold">Precision Execution</h3>
                    <p class="small text-muted">High-pressure jet wash, brazing, board repair, or precision digital refrigerant refilling.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3">
                    <div class="rounded-circle bg-white shadow-sm d-inline-flex align-items-center justify-content-center text-primary fw-bold fs-4 mb-3" style="width: 70px; height: 70px;">4</div>
                    <h3 class="h6 fw-bold">Cooling Verification</h3>
                    <p class="small text-muted">We verify subcooling, superheat, and airflow throw before handing the unit back to you.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Process Section End -->

<!-- FAQ Section Start -->
<section class="py-5 bg-white" aria-labelledby="ac-faq-heading">
    <div class="container py-4">
        <div class="text-center mx-auto mb-5" style="max-width: 750px;">
            <h2 id="ac-faq-heading" class="display-6 fw-bold mb-3">Frequently Asked Questions About AC Service</h2>
            <p class="text-muted">Answers to common queries regarding air conditioner maintenance, cooling issues, and booking.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion" id="acFaqAccordion">
                    @foreach($faqs as $index => $faq)
                    <div class="accordion-item mb-3 border rounded-3 overflow-hidden shadow-sm">
                        <h3 class="accordion-header" id="faqHeading{{ $index }}">
                            <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }} fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse{{ $index }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="faqCollapse{{ $index }}">
                                {{ $faq['q'] }}
                            </button>
                        </h3>
                        <div id="faqCollapse{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" aria-labelledby="faqHeading{{ $index }}" data-bs-parent="#acFaqAccordion">
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
<section class="py-5 bg-primary text-white" aria-label="Book AC Service">
    <div class="container text-center py-3">
        <h2 class="display-6 fw-bold text-white mb-3">Stay Cool with EssenTechs</h2>
        <p class="lead mb-4 mx-auto" style="max-width: 650px;">
            Prompt, certified doorstep AC service and repair across Kochi, Kakkanad, and Ernakulam.
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
