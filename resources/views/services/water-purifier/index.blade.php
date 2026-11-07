@extends('layouts.app')

@section('title', 'RO & Water Purifier Service in Kochi | Water Filter Repair Kakkanad | Essentechs')
@section('meta_description', 'Trusted RO service and water purifier repair in Kochi, Kakkanad, and Ernakulam by EssenTechs. Membrane replacement, booster pump repair, UV lamp fix, and TDS balancing.')
@section('meta_keywords', 'RO service in Kochi, water purifier repair Kochi, RO repair near me, Kent RO service Kochi, Aquaguard repair Kakkanad, water filter service Ernakulam')
@section('canonical', url('/water-purifier'))

@section('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@graph": [
    {
      "@@type": "Service",
      "@@id": "{{ url('/water-purifier') }}#service",
      "name": "RO & Water Purifier Service in Kochi",
      "provider": {
        "@@type": "LocalBusiness",
        "@@id": "https://essentechs.com/#localbusiness",
        "name": "Essentechs"
      },
      "serviceType": "Water Purifier Repair",
      "areaServed": [
        {"@@type": "City", "name": "Kochi"},
        {"@@type": "City", "name": "Kakkanad"},
        {"@@type": "AdministrativeArea", "name": "Ernakulam, Kerala"}
      ],
      "description": "Expert doorstep RO and water purifier maintenance in Kochi, Kakkanad, and Ernakulam. Specializing in membrane replacement, booster pump repair, and sediment pre-filter servicing."
    },
    {
      "@@type": "BreadcrumbList",
      "@@id": "{{ url('/water-purifier') }}#breadcrumb",
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
          "name": "Water Purifier Service",
          "item": "{{ url('/water-purifier') }}"
        }
      ]
    },
    {
      "@@type": "FAQPage",
      "@@id": "{{ url('/water-purifier') }}#faq",
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
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(0, 16, 100, 0.85), rgba(0, 16, 100, 0.85)), url('{{ asset('img/carousel-1.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center py-5">
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-3">Pure & Safe Drinking Water</span>
            <h1 class="display-4 text-white animated slideInDown mb-3">RO & Water Purifier Service in Kochi</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="{{ url('/services') }}">Services</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Water Purifier Service</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Intro & Highlights Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden rounded ps-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100 rounded" src="{{ asset('img/service-2.jpg') }}" alt="Technician checking water purifier TDS in Kochi" style="object-fit: cover;" width="600" height="400">
                        <div class="position-absolute top-0 start-0 bg-white pe-3 pb-3" style="width: 200px; height: 200px;">
                            <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3 rounded text-white">
                                <h2 class="text-white mb-0 display-6">Pure</h2>
                                <h3 class="text-white mb-0 fs-5">TDS Tested</h3>
                                <small>Kochi & Kakkanad</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <span class="text-primary text-uppercase fw-bold">Certified Water Technicians</span>
                    <h2 class="display-6 mb-4">Complete RO & UV Water Purifier Maintenance in Kakkanad & Kochi</h2>
                    <p class="mb-4">Clean drinking water is fundamental to your family's health. In Kerala's unique water environments—where municipal water, borewell minerals, and high TDS challenge filtration membranes—regular maintenance of your reverse osmosis (RO) system is vital.</p>
                    <p class="mb-4">EssenTechs provides end-to-end water purifier services in Kochi. From NSF-grade high-rejection RO membrane replacements and spun polypropylene sediment candles to 24V booster pump servicing and UV ballast repair, we restore crisp, mineral-balanced water.</p>
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-primary fs-4 me-2"></i>
                                <span class="fw-semibold">Digital TDS & pH Testing</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-primary fs-4 me-2"></i>
                                <span class="fw-semibold">Food-Grade Filter Spares</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-primary fs-4 me-2"></i>
                                <span class="fw-semibold">Kent & Aquaguard Experts</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-primary fs-4 me-2"></i>
                                <span class="fw-semibold">Same-Day Doorstep Visit</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="tel:+919746700889" class="btn btn-primary py-3 px-4 rounded-pill">
                            <i class="fas fa-phone-alt me-2"></i>Call +91 97467 00889
                        </a>
                        <a href="https://wa.me/919746700889?text=Hello%20EssenTechs,%20I%20need%20RO%20water%20purifier%20service%20in%20Kochi" target="_blank" rel="noopener noreferrer" class="btn btn-success py-3 px-4 rounded-pill">
                            <i class="fab fa-whatsapp me-2"></i>WhatsApp Booking
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Intro & Highlights End -->

    <!-- Services Grid Start -->
    <div class="container-xxl py-5 bg-light">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <span class="text-primary text-uppercase fw-bold">Purification Care</span>
                <h2 class="display-6 mb-5">Water Purifier & RO Services We Offer in Kochi</h2>
            </div>
            <div class="row g-4">
                @foreach($services as $index => $svc)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.1 * ($index % 3) }}s">
                    <div class="service-item bg-white rounded p-4 h-100 shadow-sm border-top border-4 border-primary position-relative">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="{{ $svc['icon'] }} fs-5"></i>
                            </div>
                            <span class="badge bg-light text-primary border">{{ $svc['badge'] }}</span>
                        </div>
                        <h3 class="h5 mb-3">{{ $svc['title'] }}</h3>
                        <p class="text-muted small mb-0">{{ $svc['description'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Services Grid End -->

    <!-- Brands We Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <span class="text-primary text-uppercase fw-bold">Leading Brands</span>
                <h2 class="display-6 mb-3">Water Purifier Brands We Service in Kerala</h2>
                <p class="text-muted">Certified repair and OEM filter replacement for all top water purifier brands.</p>
            </div>
            <div class="row g-3">
                @foreach($brands as $b)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="p-3 border rounded bg-white h-100 d-flex align-items-center">
                        <i class="fas fa-check text-success me-3 fs-5"></i>
                        <div>
                            <h4 class="h6 mb-1">{{ $b['name'] }} RO Service</h4>
                            <small class="text-muted">{{ $b['desc'] }}</small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Brands We Service End -->

    <!-- FAQs Start -->
    <div class="container-xxl py-5 bg-light">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <span class="text-primary text-uppercase fw-bold">Common Inquiries</span>
                <h2 class="display-6 mb-5">Frequently Asked Questions — RO Service in Kochi</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="roFaqAccordion">
                        @foreach($faqs as $i => $faq)
                        <div class="accordion-item mb-3 border rounded shadow-sm overflow-hidden">
                            <h3 class="accordion-header" id="heading{{ $i }}">
                                <button class="accordion-button {{ $i === 0 ? '' : 'collapsed' }} fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $i }}" aria-expanded="{{ $i === 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $i }}">
                                    {{ $faq['q'] }}
                                </button>
                            </h3>
                            <div id="collapse{{ $i }}" class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}" aria-labelledby="heading{{ $i }}" data-bs-parent="#roFaqAccordion">
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
    </div>
    <!-- FAQs End -->

    <!-- CTA Section Start -->
    <div class="container-fluid bg-primary text-white py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-4">
            <h2 class="display-6 text-white mb-3">Book Professional RO Service in Kochi Today</h2>
            <p class="fs-5 text-white-50 mb-4 mx-auto" style="max-width: 600px;">Prompt doorstep filter replacement and membrane servicing across Kakkanad, Palarivattom, Edappally, and Ernakulam.</p>
            <div class="d-flex justify-content-center flex-wrap gap-3">
                <a href="tel:+919746700889" class="btn btn-light py-3 px-5 rounded-pill fw-bold text-primary">
                    <i class="fas fa-phone-alt me-2"></i>Call +91 97467 00889
                </a>
                <a href="{{ url('/contact') }}" class="btn btn-outline-light py-3 px-5 rounded-pill fw-bold">
                    Schedule RO Visit
                </a>
            </div>
        </div>
    </div>
    <!-- CTA Section End -->
@endsection
