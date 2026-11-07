@extends('layouts.app')

@section('title', $offer->effective_seo_title)
@section('meta_description', $offer->effective_meta_description)
@section('canonical', $offer->effective_canonical_url)

@section('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@graph": [
    {
      "@@type": "Offer",
      "@@id": "{{ $offer->effective_canonical_url }}#offer",
      "name": "{{ $offer->title }}",
      "description": "{{ strip_tags($offer->effective_meta_description) }}",
      "priceCurrency": "INR",
      "url": "{{ $offer->effective_canonical_url }}",
      "availability": "https://schema.org/InStock",
      @if($offer->end_date)
      "priceValidUntil": "{{ $offer->end_date->format('Y-m-d') }}",
      @endif
      "seller": {
        "@@type": "LocalBusiness",
        "@@id": "https://essentechs.com/#localbusiness",
        "name": "Essentechs"
      },
      "areaServed": {
        "@@type": "AdministrativeArea",
        "name": "{{ $offer->location ?? 'Kochi, Kerala' }}"
      }
    },
    {
      "@@type": "BreadcrumbList",
      "@@id": "{{ $offer->effective_canonical_url }}#breadcrumb",
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
          "name": "Offers",
          "item": "{{ url('/offers') }}"
        },
        {
          "@@type": "ListItem",
          "position": 3,
          "name": "{{ $offer->title }}",
          "item": "{{ $offer->effective_canonical_url }}"
        }
      ]
    }
  ]
}
</script>
@endsection

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(0, 16, 100, 0.85), rgba(0, 16, 100, 0.85)), url('{{ asset('img/carousel-2.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center py-5">
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-3">{{ $offer->discount ?? 'Special Promotion' }}</span>
            <h1 class="display-4 text-white animated slideInDown mb-3">{{ $offer->title }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="{{ url('/offers') }}">Offers</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">{{ Str::limit($offer->title, 35) }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Offer Content Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white rounded-4 p-4 p-md-5 shadow-sm border">
                        <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-4 pb-3 border-bottom">
                            <div>
                                <span class="badge bg-primary px-3 py-2 rounded-pill fs-6">{{ $offer->discount ?? 'Discounted Service' }}</span>
                                <span class="badge bg-light text-dark border px-3 py-2 rounded-pill ms-2">
                                    <i class="fas fa-tools text-primary me-1"></i>{{ $offer->applicable_service ?? 'Appliance Repair' }}
                                </span>
                            </div>
                            @if($offer->end_date)
                            <div class="text-danger fw-semibold small">
                                <i class="far fa-clock me-1"></i>Offer Valid Till: {{ $offer->end_date->format('F d, Y') }}
                            </div>
                            @endif
                        </div>

                        @if($offer->image)
                        <div class="text-center mb-4">
                            <img src="{{ asset('storage/' . $offer->image) }}" alt="{{ $offer->image_alt ?? $offer->title }}" class="img-fluid rounded-3 shadow-sm" style="max-height: 380px;">
                        </div>
                        @endif

                        <div class="offer-body fs-5 text-secondary mb-5 leading-relaxed">
                            {!! nl2br(e($offer->description)) !!}
                        </div>

                        <!-- Highlights Box -->
                        <div class="p-4 bg-light rounded-3 mb-5 border-start border-4 border-primary">
                            <h3 class="h5 mb-3">Offer Highlights & Terms</h3>
                            <ul class="list-unstyled mb-0 d-flex flex-column gap-2 text-muted">
                                <li><i class="fas fa-check text-success me-2"></i><strong>Service Location:</strong> {{ $offer->location ?? 'Kochi, Kakkanad, Palarivattom, Ernakulam' }}</li>
                                @if($offer->applicable_brand)
                                <li><i class="fas fa-check text-success me-2"></i><strong>Applicable Brands:</strong> {{ $offer->applicable_brand }}</li>
                                @endif
                                <li><i class="fas fa-check text-success me-2"></i><strong>Authentic Spares:</strong> 100% genuine replacement components with warranty</li>
                                <li><i class="fas fa-check text-success me-2"></i><strong>Doorstep Service:</strong> On-site technician inspection and service execution</li>
                            </ul>
                        </div>

                        <!-- Action Buttons -->
                        <div class="d-flex flex-wrap gap-3">
                            <a href="tel:+919746700889" class="btn btn-primary py-3 px-4 rounded-pill fw-bold">
                                <i class="fas fa-phone-alt me-2"></i>Claim Offer: Call +91 97467 00889
                            </a>
                            <a href="https://wa.me/919746700889?text={{ urlencode('Hello EssenTechs, I would like to book the offer: ' . $offer->title) }}" target="_blank" rel="noopener noreferrer" class="btn btn-success py-3 px-4 rounded-pill fw-bold">
                                <i class="fab fa-whatsapp me-2"></i>Book on WhatsApp
                            </a>
                            <a href="{{ url('/contact') }}" class="btn btn-outline-secondary py-3 px-4 rounded-pill">
                                Online Request Form
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Start -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4 bg-primary text-white">
                        <h3 class="h4 text-white mb-3">Book Instantly</h3>
                        <p class="text-white-50 small mb-4">Mention this offer when speaking to our service coordinator to apply the discount immediately.</p>
                        <a href="tel:+919746700889" class="btn btn-light py-2 px-3 rounded-pill fw-bold text-primary mb-2">
                            <i class="fas fa-phone-alt me-2"></i>+91 97467 00889
                        </a>
                        <small class="text-white-50"><i class="fas fa-clock me-1"></i>Working Hours: Mon–Sun, 8 AM–9 PM</small>
                    </div>

                    @if($relatedOffers->count() > 0)
                    <div class="card border-0 shadow-sm rounded-4 p-4">
                        <h4 class="h5 mb-3">More Service Offers</h4>
                        <div class="d-flex flex-column gap-3">
                            @foreach($relatedOffers as $rOffer)
                            <div class="border-bottom pb-3">
                                <span class="badge bg-warning text-dark px-2 py-1 rounded small mb-1">{{ $rOffer->discount ?? 'Special Offer' }}</span>
                                <h5 class="h6 mb-1">
                                    <a href="{{ route('offers.show', $rOffer->slug) }}" class="text-dark text-decoration-none hover-primary">{{ $rOffer->title }}</a>
                                </h5>
                                <small class="text-muted"><i class="fas fa-map-marker-alt text-danger me-1"></i>{{ $rOffer->location }}</small>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Offer Content End -->
@endsection
