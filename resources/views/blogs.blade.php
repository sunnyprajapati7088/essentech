@extends('layouts.app')

@section('title', 'Appliance Repair Blog & DIY Troubleshooting Tips | EssenTechs Kochi')
@section('meta_description', 'Expert appliance repair tips and troubleshooting guides for AC, refrigerator, washing machine, and microwave ovens in Kochi and Kerala by EssenTechs technicians.')
@section('meta_keywords', 'appliance repair blog, AC troubleshooting Kochi, fridge not cooling, washing machine repair guide, microwave repair tips Kerala')
@section('canonical', url('/blog'))

@section('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@graph": [
    {
      "@@type": "Blog",
      "@@id": "{{ url('/blog') }}#blog",
      "name": "EssenTechs Appliance Repair Blog",
      "url": "{{ url('/blog') }}",
      "description": "Expert advice, common fault guides, and DIY maintenance tips for household appliances in Kochi, Kerala.",
      "publisher": {
        "@@type": "LocalBusiness",
        "@@id": "https://essentechs.com/#localbusiness",
        "name": "Essentechs"
      }
    },
    {
      "@@type": "BreadcrumbList",
      "@@id": "{{ url('/blog') }}#breadcrumb",
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
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-3">Diagnostic Guides & Tips</span>
            <h1 class="display-4 text-white animated slideInDown mb-3">Home Appliance Repair Blog & Insights</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Blog</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Blog Listing Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp mb-5" data-wow-delay="0.1s" style="max-width: 700px;">
                <span class="text-primary text-uppercase fw-bold">Knowledge Base</span>
                <h2 class="display-6 mb-3">Troubleshooting Solutions for Kerala Households</h2>
                <p class="text-muted">In-depth guides on identifying common appliance issues, understanding error codes, maintaining energy efficiency, and knowing when to call certified technicians in Kochi.</p>
            </div>

            <div class="row g-4">
                @forelse ($blogs as $index => $blog)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ ($index % 3 + 1) * 0.1 }}s">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden d-flex flex-column">
                            <div class="position-relative overflow-hidden" style="height: 220px;">
                                <img class="w-100 h-100" style="object-fit: cover;"
                                    src="{{ $blog->featured_image ? (str_starts_with($blog->featured_image, 'http') ? $blog->featured_image : (file_exists(public_path('storage/' . $blog->featured_image)) ? asset('storage/' . $blog->featured_image) : asset('img/' . $blog->featured_image))) : asset('img/carousel-1.jpg') }}"
                                    alt="{{ $blog->image_alt ?? $blog->title }}" width="400" height="220" loading="lazy">
                                @if(!empty($blog->category))
                                <span class="badge bg-primary position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill shadow-sm">
                                    {{ ucfirst($blog->category) }}
                                </span>
                                @endif
                            </div>

                            <div class="card-body p-4 d-flex flex-column flex-grow-1">
                                <div class="text-muted small mb-2 d-flex align-items-center gap-3">
                                    <span><i class="far fa-calendar-alt text-primary me-1"></i>{{ $blog->published_at ? $blog->published_at->format('M d, Y') : $blog->created_at->format('M d, Y') }}</span>
                                    <span><i class="far fa-user text-primary me-1"></i>{{ $blog->author_name ?? 'EssenTechs' }}</span>
                                </div>

                                <h3 class="h5 card-title mb-3">
                                    <a class="text-dark text-decoration-none hover-primary" href="{{ route('blog.details', $blog->slug) }}">
                                        {{ $blog->title }}
                                    </a>
                                </h3>

                                <p class="card-text text-muted small flex-grow-1">
                                    {{ Str::limit(strip_tags($blog->short_description ?? $blog->content), 125) }}
                                </p>

                                <div class="mt-3 pt-3 border-top">
                                    <a class="small fw-bold text-primary text-decoration-none" href="{{ route('blog.details', $blog->slug) }}">
                                        Read Complete Guide <i class="fa fa-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <div class="p-5 bg-light rounded-4">
                            <i class="fas fa-newspaper fa-3x text-muted mb-3"></i>
                            <h3 class="h5">No articles available yet</h3>
                            <p class="text-muted">Our technical team is currently preparing troubleshooting guides for you.</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- Blog Listing End -->
@endsection
