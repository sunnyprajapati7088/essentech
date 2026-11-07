@extends('layouts.app')

@section('title', 'Washing Machine Repair & Service in Kochi | Essentechs')
@section('meta_description', 'Professional washing machine repair and service in Kochi, Kakkanad and Ernakulam for drainage, spinning, water leakage, vibration, door and other common washing machine problems.')
@section('meta_keywords', 'washing machine repair in Kochi, washing machine service Kochi, washing machine repair Kakkanad, front load repair, top load service Ernakulam, spin problem, drain problem, Kochi, Kerala')
@section('canonical', url('/washing-machine-repair-service-kochi'))

@section('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@graph": [
    {
      "@@type": "Service",
      "@@id": "{{ url('/washing-machine-repair-service-kochi') }}#service",
      "name": "Washing Machine Repair & Service in Kochi",
      "provider": {
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
      },
      "serviceType": "Washing Machine Repair and Laundry Appliance Maintenance",
      "areaServed": [
        {"@@type": "City", "name": "Kochi"},
        {"@@type": "City", "name": "Kakkanad"},
        {"@@type": "AdministrativeArea", "name": "Ernakulam, Kerala"}
      ],
      "description": "Professional washing machine repair and service in Kochi, Kakkanad and Ernakulam for drainage, spinning, water leakage, vibration, door and other common washing machine problems."
    },
    {
      "@@type": "BreadcrumbList",
      "@@id": "{{ url('/washing-machine-repair-service-kochi') }}#breadcrumb",
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
          "name": "Washing Machine Service & Repair",
          "item": "{{ url('/washing-machine-repair-service-kochi') }}"
        }
      ]
    },
    {
      "@@type": "FAQPage",
      "@@id": "{{ url('/washing-machine-repair-service-kochi') }}#faq",
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
                <li class="breadcrumb-item active" aria-current="page">Washing Machine Repair & Service</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Hero Section Start -->
<section class="py-5 bg-white border-bottom" aria-labelledby="washing-hero-title">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <span class="badge bg-primary-subtle text-primary fw-bold px-3 py-2 rounded-pill text-uppercase mb-3 d-inline-block">
                    <i class="fas fa-sync-alt me-1" aria-hidden="true"></i> Top-Rated Doorstep Washer Care Across Kochi & Ernakulam
                </span>
                <h1 id="washing-hero-title" class="display-4 fw-bold text-dark mb-4">Washing Machine Repair & Service in Kochi</h1>
                <p class="lead text-muted mb-4">
                    Professional washing machine repair and service in Kochi, Kakkanad and Ernakulam for drainage, spinning, water leakage, vibration, door and other common washing machine problems.
                </p>
                <p class="text-secondary mb-4">
                    From front-load AI Direct Drive washers and high-efficiency top loaders to semi-automatic twin tubs, our certified laundry technicians troubleshoot drum spinning failures, OE/5E drain errors, loud bearing noises, and motherboards on-site with genuine spare parts.
                </p>
                <div class="d-flex flex-wrap gap-3 mb-4">
                    <a href="tel:+919746700889" class="btn btn-primary btn-lg px-4 py-3" aria-label="Book Washing Machine Service by calling +91 97467 00889">
                        <i class="fas fa-phone-alt me-2" aria-hidden="true"></i> Book Washing Machine Service
                    </a>
                    <a href="tel:+919746700889" class="btn btn-outline-dark btn-lg px-4 py-3" aria-label="Call Essentechs technician now">
                        <i class="fas fa-phone me-2" aria-hidden="true"></i> Call Now
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
                            <i class="fas fa-cogs text-primary fs-4 me-2" aria-hidden="true"></i>
                            <span class="small fw-semibold">Front & Top Load Specialists</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-shield-alt text-primary fs-4 me-2" aria-hidden="true"></i>
                            <span class="small fw-semibold">100% Genuine Spare Parts</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                    <img src="{{ asset('img/WashingRepair.jpeg') }}" class="img-fluid w-100" alt="Certified technician diagnosing washing machine drum in Kochi" width="600" height="400">
                    <div class="card-body p-4 bg-light">
                        <h2 class="h5 fw-bold mb-2">Need Rapid Washer Assistance?</h2>
                        <p class="small text-muted mb-3">Speak directly with a washing machine specialist to diagnose your machine's symptoms.</p>
                        <a href="https://wa.me/919746700889" target="_blank" rel="noopener noreferrer" class="btn btn-success w-100 py-2 fw-semibold" aria-label="Chat with our washing machine specialists on WhatsApp">
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
<section class="py-5 bg-light" aria-labelledby="washing-services-heading">
    <div class="container py-4">
        <div class="text-center mx-auto mb-5" style="max-width: 800px;">
            <h2 id="washing-services-heading" class="display-6 fw-bold mb-3">Specialized Washing Machine Services</h2>
            <p class="text-muted">
                Complete laundry appliance care for front-load, top-load, and inverter direct-drive washing machines across Kochi and Ernakulam.
            </p>
        </div>
        <div class="row g-4">
            @foreach($services as $svc)
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 transition-hover">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary-subtle text-primary rounded-3 p-3" style="width: 56px; height: 56px;">
                            <i class="{{ $svc['icon'] }} fs-4" aria-hidden="true"></i>
                        </div>
                        <span class="badge bg-light text-primary border small">{{ $svc['badge'] }}</span>
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

<!-- Common Problems Section Start -->
<section class="py-5 bg-white border-top border-bottom" aria-labelledby="problems-heading">
    <div class="container py-4">
        <div class="text-center mx-auto mb-5" style="max-width: 850px;">
            <span class="badge bg-danger-subtle text-danger fw-bold px-3 py-2 rounded-pill text-uppercase mb-2 d-inline-block">
                Troubleshooting & Diagnostics
            </span>
            <h2 id="problems-heading" class="display-6 fw-bold mb-3">Common Washing Machine Problems We Fix</h2>
            <p class="text-muted">
                Experiencing spin failures, water drainage blockage, violent shaking, or error codes? Here are the most common washing machine faults our technicians diagnose and resolve across Kochi, Kakkanad, and Ernakulam.
            </p>
        </div>
        <div class="row g-4">
            @foreach($problems as $pIndex => $problem)
            <div class="col-lg-6">
                <div class="card h-100 border rounded-3 p-4 shadow-sm">
                    <div class="d-flex align-items-center mb-3">
                        <div class="rounded-circle bg-primary-subtle text-primary p-2 me-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="fas fa-wrench small" aria-hidden="true"></i>
                        </div>
                        <h3 class="h5 fw-bold text-dark mb-0">{{ $problem['title'] }}</h3>
                    </div>
                    <div class="mb-2">
                        <strong class="text-dark small"><i class="fas fa-exclamation-triangle text-warning me-1"></i> Symptom:</strong>
                        <span class="text-muted small">{{ $problem['symptom'] }}</span>
                    </div>
                    <div class="mb-2">
                        <strong class="text-dark small"><i class="fas fa-search text-primary me-1"></i> Cause:</strong>
                        <span class="text-muted small">{{ $problem['cause'] }}</span>
                    </div>
                    <div class="mb-3">
                        <strong class="text-dark small"><i class="fas fa-check-circle text-success me-1"></i> Solution:</strong>
                        <span class="text-muted small">{{ $problem['solution'] }}</span>
                    </div>
                    <div class="pt-2 border-top mt-auto d-flex justify-content-between align-items-center">
                        <span class="small text-muted"><i class="fas fa-map-marker-alt text-danger me-1"></i> Kochi Doorstep Fix</span>
                        <a href="tel:+919746700889" class="btn btn-sm btn-link text-primary text-decoration-none fw-semibold p-0">
                            Book Fix <i class="fas fa-chevron-right small ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Common Problems Section End -->

<!-- Brands Section Start -->
<section class="py-5 bg-light" aria-labelledby="washing-brands-heading">
    <div class="container py-4">
        <div class="text-center mx-auto mb-5" style="max-width: 800px;">
            <h2 id="washing-brands-heading" class="display-6 fw-bold mb-3">WASHING MACHINE BRANDS WE SERVICE</h2>
            <p class="text-muted">
                We provide independent, component-level repair and maintenance for leading washing machine brands across Kochi. Click any brand to view dedicated model troubleshooting, error codes, and technical service details.
            </p>
        </div>
        <div class="row g-3">
            @foreach($brands as $b)
            <div class="col-lg-4 col-md-6">
                <a href="{{ url('/washing-machine/' . $b['slug'] . '/') }}" class="card text-decoration-none h-100 border rounded-3 p-3 shadow-sm hover-shadow transition">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="h5 fw-bold text-dark mb-0">{{ $b['name'] }}</span>
                        <span class="badge bg-light text-primary border small">View Brand Page <i class="fas fa-chevron-right ms-1 small" aria-hidden="true"></i></span>
                    </div>
                    <p class="small text-muted mb-0">
                        {{ $b['badge'] }} — front load, top load, and inverter support.
                    </p>
                </a>
            </div>
            @endforeach
        </div>
        <div class="mt-4 p-3 bg-white rounded border text-center small text-muted">
            <i class="fas fa-info-circle me-1" aria-hidden="true"></i>
            <em>Disclaimer: Essentechs is an independent home appliance service provider and is not affiliated with or an authorized service center of the respective brand manufacturers. All brand names are used strictly for identification purposes.</em>
        </div>
    </div>
</section>
<!-- Brands Section End -->

<!-- Process Section Start -->
<section class="py-5 bg-white border-top border-bottom" aria-labelledby="process-heading">
    <div class="container py-4">
        <div class="text-center mx-auto mb-5" style="max-width: 700px;">
            <h2 id="process-heading" class="display-6 fw-bold mb-3">Our 4-Step Washing Machine Repair Process</h2>
            <p class="text-muted">Transparent, safe, and efficient doorstep washing machine service in Kochi.</p>
        </div>
        <div class="row g-4 text-center">
            <div class="col-md-3">
                <div class="p-3">
                    <div class="rounded-circle bg-primary-subtle text-primary fw-bold fs-4 d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">1</div>
                    <h3 class="h6 fw-bold">Doorstep Inspection</h3>
                    <p class="small text-muted">Technician tests electrical continuity, drain pump motors, hall sensors, and mechanical suspension dampers.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3">
                    <div class="rounded-circle bg-primary-subtle text-primary fw-bold fs-4 d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">2</div>
                    <h3 class="h6 fw-bold">Upfront Estimate</h3>
                    <p class="small text-muted">Clear upfront quotation covering necessary replacement components (pumps, belts, seals, valves) before work begins.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3">
                    <div class="rounded-circle bg-primary-subtle text-primary fw-bold fs-4 d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">3</div>
                    <h3 class="h6 fw-bold">Expert Component Repair</h3>
                    <p class="small text-muted">Precision installation of genuine-grade parts, torque calibration of drive pulleys, and water leak proofing.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3">
                    <div class="rounded-circle bg-primary-subtle text-primary fw-bold fs-4 d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">4</div>
                    <h3 class="h6 fw-bold">Spin & Leak Testing</h3>
                    <p class="small text-muted">We run a live test cycle verifying fast water drainage, silent high-speed extraction, and zero water leakage.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Process Section End -->

<!-- FAQ Section Start -->
<section class="py-5 bg-light" aria-labelledby="faq-heading">
    <div class="container py-4">
        <div class="text-center mx-auto mb-5" style="max-width: 750px;">
            <h2 id="faq-heading" class="display-6 fw-bold mb-3">Frequently Asked Questions About Washing Machine Repair</h2>
            <p class="text-muted">Answers to common questions regarding washing machine issues, error codes, and doorstep service in Kochi.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion" id="washingMachineFaqAccordion">
                    @foreach($faqs as $index => $faq)
                    <div class="accordion-item mb-3 border rounded-3 overflow-hidden shadow-sm">
                        <h3 class="accordion-header" id="faqHeading{{ $index }}">
                            <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }} fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse{{ $index }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="faqCollapse{{ $index }}">
                                {{ $faq['q'] }}
                            </button>
                        </h3>
                        <div id="faqCollapse{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" aria-labelledby="faqHeading{{ $index }}" data-bs-parent="#washingMachineFaqAccordion">
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
<section class="py-5 bg-primary text-white" aria-label="Book Washing Machine Repair">
    <div class="container text-center py-3">
        <h2 class="display-6 fw-bold text-white mb-3">Restore Your Washing Machine Today</h2>
        <p class="lead mb-4 mx-auto" style="max-width: 650px;">
            Fast, reliable, and affordable doorstep washing machine repair across Kochi, Kakkanad, and Ernakulam.
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
