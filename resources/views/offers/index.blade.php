@extends('layouts.app')

@section('title', 'Appliance Service Offers & Discounts in Kochi | EssenTechs')
@section('meta_description', 'Save on home appliance repairs with verified seasonal offers and discounts in Kochi, Kakkanad, and Ernakulam from EssenTechs. AC, fridge, washer, and microwave deals.')
@section('meta_keywords', 'AC service offer Kochi, appliance repair discounts Kochi, fridge repair offers Kakkanad, washing machine service discount Ernakulam')
@section('canonical', url('/offers'))

@section('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@graph": [
    {
      "@@type": "CollectionPage",
      "@@id": "{{ url('/offers') }}#webpage",
      "url": "{{ url('/offers') }}",
      "name": "Appliance Service Offers & Discounts in Kochi",
      "description": "Verified seasonal offers and discount deals on AC, refrigerator, washing machine, and microwave repairs in Kochi.",
      "publisher": {
        "@@type": "LocalBusiness",
        "@@id": "https://essentechs.com/#localbusiness",
        "name": "Essentechs"
      }
    },
    {
      "@@type": "BreadcrumbList",
      "@@id": "{{ url('/offers') }}#breadcrumb",
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
          "name": "Offers & Deals",
          "item": "{{ url('/offers') }}"
        }
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
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-3">Verified Seasonal Discounts</span>
            <h1 class="display-4 text-white animated slideInDown mb-3">Appliance Repair Offers & Deals in Kochi</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Offers</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Offers Section Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <span class="text-primary text-uppercase fw-bold">Limited Time Deals</span>
                <h2 class="display-6 mb-4">Current Appliance Service Discounts for Kochi Residents</h2>
                <p class="text-muted">Explore verified discount promotions and package deals for air conditioners, refrigerators, washing machines, and microwave ovens in Kakkanad and Kochi.</p>
            </div>

            <div class="row g-4 mt-3">
                @forelse($offers as $offer)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden position-relative">
                        @if($offer->discount)
                        <div class="position-absolute top-0 end-0 bg-warning text-dark fw-bold px-3 py-1 rounded-bottom-start shadow-sm" style="z-index: 10;">
                            {{ $offer->discount }}
                        </div>
                        @endif

                        <div class="position-relative bg-light text-center p-4 border-bottom">
                            @if($offer->image)
                                <img src="{{ asset('storage/' . $offer->image) }}" alt="{{ $offer->image_alt ?? $offer->title }}" class="img-fluid rounded" style="max-height: 180px; object-fit: contain;">
                            @else
                                <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                    <i class="fas fa-tags fa-2x"></i>
                                </div>
                            @endif
                        </div>

                        <div class="card-body p-4 d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-1 rounded-pill">{{ $offer->applicable_service ?? 'All Appliances' }}</span>
                                <small class="text-muted"><i class="fas fa-map-marker-alt text-danger me-1"></i>{{ $offer->location ?? 'Kochi' }}</small>
                            </div>

                            <h3 class="h5 card-title mb-3">
                                <a href="{{ route('offers.show', $offer->slug) }}" class="text-dark text-decoration-none hover-primary">{{ $offer->title }}</a>
                            </h3>

                            <p class="card-text text-muted small flex-grow-1">
                                {{ Str::limit(strip_tags($offer->description), 130) }}
                            </p>

                            @if($offer->end_date)
                            <div class="alert alert-light border py-1 px-2 mb-3 rounded text-center small text-muted">
                                <i class="far fa-clock text-warning me-1"></i>Valid until: <strong>{{ $offer->end_date->format('M d, Y') }}</strong>
                            </div>
                            @endif

                            <div class="d-grid mt-auto">
                                <a href="{{ route('offers.show', $offer->slug) }}" class="btn btn-primary rounded-pill py-2">
                                    {{ $offer->cta_text ?? 'View Offer Details' }} <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center py-5">
                    <div class="p-5 bg-light rounded-4">
                        <i class="fas fa-calendar-times fa-3x text-muted mb-3"></i>
                        <h3 class="h5">No active promotions at this exact moment</h3>
                        <p class="text-muted">Check back soon for new seasonal discounts, or call our Kochi team directly for custom package rates.</p>
                        <a href="tel:+919746700889" class="btn btn-primary rounded-pill px-4 mt-2">
                            <i class="fas fa-phone-alt me-2"></i>Call +91 97467 00889
                        </a>
                    </div>
                </div>
                @endforelse
            </div>

            @if($offers->hasPages())
            <div class="d-flex justify-content-center mt-5">
                {{ $offers->links() }}
            </div>
            @endif
        </div>
    </div>
    <!-- Offers Section End -->
@endsection
