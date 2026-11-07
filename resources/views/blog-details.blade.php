@extends('layouts.app')

@section('title', $blog->effective_meta_title)
@section('meta_description', $blog->effective_meta_description)
@section('meta_keywords', $blog->focus_keyword ?? 'appliance repair, AC repair, Kochi, Kerala')
@section('canonical', $blog->effective_canonical_url)

@section('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@graph": [
    {
      "@@type": "{{ $blog->schema_type ?? 'Article' }}",
      "@@id": "{{ $blog->effective_canonical_url }}#article",
      "headline": "{{ addslashes($blog->title) }}",
      "description": "{{ addslashes(strip_tags($blog->effective_meta_description)) }}",
      "url": "{{ $blog->effective_canonical_url }}",
      "datePublished": "{{ $blog->published_at ? $blog->published_at->toIso8601String() : $blog->created_at->toIso8601String() }}",
      "dateModified": "{{ $blog->updated_at->toIso8601String() }}",
      "author": {
        "@@type": "Organization",
        "name": "{{ $blog->author_name ?? 'EssenTechs Technical Team' }}",
        "url": "https://essentechs.com/"
      },
      "publisher": {
        "@@type": "LocalBusiness",
        "@@id": "https://essentechs.com/#localbusiness",
        "name": "Essentechs",
        "logo": {
          "@@type": "ImageObject",
          "url": "https://essentechs.com/img/EssenTechs-logo.jpeg"
        }
      },
      "mainEntityOfPage": {
        "@@type": "WebPage",
        "@@id": "{{ $blog->effective_canonical_url }}"
      }
    },
    {
      "@@type": "BreadcrumbList",
      "@@id": "{{ $blog->effective_canonical_url }}#breadcrumb",
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
          "name": "Blog",
          "item": "{{ url('/blog') }}"
        },
        {
          "@@type": "ListItem",
          "position": 3,
          "name": "{{ addslashes($blog->title) }}",
          "item": "{{ $blog->effective_canonical_url }}"
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
            @if(!empty($blog->category))
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-3">{{ ucfirst($blog->category) }}</span>
            @endif
            <h1 class="display-5 text-white animated slideInDown mb-3">{{ $blog->title }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="{{ url('/blog') }}">Blog</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">{{ Str::limit($blog->title, 35) }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Blog Single Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Main Blog Content -->
                <article class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white rounded-4 p-4 p-md-5 shadow-sm border">
                        <div class="d-flex flex-wrap justify-content-between align-items-center text-muted small mb-4 pb-3 border-bottom">
                            <div class="d-flex align-items-center gap-3">
                                <span><i class="far fa-user text-primary me-1"></i>{{ $blog->author_name ?? 'EssenTechs Technical Team' }}</span>
                                <span><i class="far fa-calendar-alt text-primary me-1"></i>{{ $blog->published_at ? $blog->published_at->format('F d, Y') : $blog->created_at->format('F d, Y') }}</span>
                            </div>
                            @if($blog->focus_keyword)
                            <span class="badge bg-light text-secondary border"><i class="fas fa-tag me-1 text-primary"></i>{{ $blog->focus_keyword }}</span>
                            @endif
                        </div>

                        @if($blog->featured_image)
                        <div class="mb-4 text-center">
                            <img class="img-fluid rounded-3 shadow-sm w-100" style="max-height: 420px; object-fit: cover;"
                                src="{{ str_starts_with($blog->featured_image, 'http') ? $blog->featured_image : (file_exists(public_path('storage/' . $blog->featured_image)) ? asset('storage/' . $blog->featured_image) : asset('img/' . $blog->featured_image)) }}"
                                alt="{{ $blog->effective_image_alt }}" width="800" height="420">
                        </div>
                        @endif

                        <div class="blog-post-content fs-5 text-secondary leading-relaxed mb-5">
                            {!! $blog->content !!}
                        </div>

                        <!-- Contextual Service Silo Internal Linking Box -->
                        <div class="p-4 bg-light rounded-4 mb-4 border-start border-4 border-primary">
                            <h3 class="h5 mb-3 text-dark">Need Expert Doorstep Appliance Service in Kochi?</h3>
                            <p class="text-muted small mb-3">Don't let faulty appliances interrupt your daily comfort. EssenTechs provides prompt on-site diagnostics, original spare replacements, and certified technician visits across Kochi, Kakkanad, and Ernakulam.</p>
                            <div class="d-flex flex-wrap gap-2 mb-3">
                                <a href="{{ url('/ac') }}" class="btn btn-sm btn-outline-primary rounded-pill">AC Repair Kochi</a>
                                <a href="{{ url('/microwave-oven') }}" class="btn btn-sm btn-outline-primary rounded-pill">Microwave Service</a>
                                <a href="{{ url('/refrigerator') }}" class="btn btn-sm btn-outline-primary rounded-pill">Refrigerator Repair</a>
                                <a href="{{ url('/washing-machine') }}" class="btn btn-sm btn-outline-primary rounded-pill">Washing Machine Service</a>
                                <a href="{{ url('/water-purifier') }}" class="btn btn-sm btn-outline-primary rounded-pill">RO Purifier Service</a>
                                <a href="{{ url('/offers') }}" class="btn btn-sm btn-warning rounded-pill fw-bold text-dark"><i class="fas fa-percent me-1"></i>View Current Offers</a>
                            </div>
                            <div class="d-flex flex-wrap gap-3">
                                <a href="tel:+919746700889" class="btn btn-primary py-2 px-4 rounded-pill fw-bold">
                                    <i class="fas fa-phone-alt me-2"></i>Call +91 97467 00889
                                </a>
                                <a href="{{ url('/contact') }}" class="btn btn-outline-secondary py-2 px-4 rounded-pill">
                                    Book Online
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Sidebar Start -->
                <aside class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <!-- Service Booking Card -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4 bg-primary text-white">
                        <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-bold align-self-start mb-2">Doorstep Service</span>
                        <h3 class="h4 text-white mb-2">Kochi Appliance Repair</h3>
                        <p class="text-white-50 small mb-4">Certified technicians ready for on-site inspection in Kakkanad, Palarivattom, Edappally, and greater Ernakulam.</p>
                        <a href="tel:+919746700889" class="btn btn-light py-2 px-3 rounded-pill fw-bold text-primary mb-2">
                            <i class="fas fa-phone-alt me-2"></i>+91 97467 00889
                        </a>
                        <a href="https://wa.me/919746700889?text={{ urlencode('Hello EssenTechs, I read your article: ' . $blog->title . ' and would like to book a service visit.') }}" target="_blank" rel="noopener noreferrer" class="btn btn-success py-2 px-3 rounded-pill fw-bold">
                            <i class="fab fa-whatsapp me-2"></i>WhatsApp Booking
                        </a>
                    </div>

                    <!-- Related Guides -->
                    @if(isset($related_blogs) && $related_blogs->count() > 0)
                    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
                        <h4 class="h5 mb-3 border-bottom pb-2">Related Diagnostic Guides</h4>
                        <div class="d-flex flex-column gap-3">
                            @foreach ($related_blogs as $related)
                            <div>
                                <h5 class="h6 mb-1">
                                    <a class="text-dark text-decoration-none hover-primary" href="{{ route('blog.details', $related->slug) }}">
                                        {{ $related->title }}
                                    </a>
                                </h5>
                                <small class="text-muted"><i class="far fa-calendar-alt text-primary me-1"></i>{{ $related->published_at ? $related->published_at->format('M d, Y') : $related->created_at->format('M d, Y') }}</small>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- Appliance Service Silos -->
                    <div class="card border-0 shadow-sm rounded-4 p-4">
                        <h4 class="h5 mb-3 border-bottom pb-2">Our Appliance Services</h4>
                        <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
                            <li><a href="{{ url('/ac') }}" class="text-secondary text-decoration-none hover-primary"><i class="fas fa-chevron-right text-primary me-2"></i>Air Conditioner Repair & Servicing</a></li>
                            <li><a href="{{ url('/microwave-oven') }}" class="text-secondary text-decoration-none hover-primary"><i class="fas fa-chevron-right text-primary me-2"></i>Microwave Oven Service & Repair</a></li>
                            <li><a href="{{ url('/refrigerator') }}" class="text-secondary text-decoration-none hover-primary"><i class="fas fa-chevron-right text-primary me-2"></i>Refrigerator & Fridge Repair</a></li>
                            <li><a href="{{ url('/washing-machine') }}" class="text-secondary text-decoration-none hover-primary"><i class="fas fa-chevron-right text-primary me-2"></i>Washing Machine Service</a></li>
                            <li><a href="{{ url('/water-purifier') }}" class="text-secondary text-decoration-none hover-primary"><i class="fas fa-chevron-right text-primary me-2"></i>RO Water Purifier Repair</a></li>
                        </ul>
                    </div>
                </aside>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog Single End -->
@endsection
