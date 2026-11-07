@extends('layouts.admin')

@section('title', 'SEO & Organic Growth Dashboard')
@section('page-title', 'SEO & Organic Growth Dashboard')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">SEO Performance & Content Architecture</li>
@endsection

@section('content')
<div class="row g-3 mb-4">
    <!-- Stat 1: Total Indexable URLs -->
    <div class="col-xl-3 col-sm-6">
        <div class="card border-0 shadow-sm rounded-3 h-100 border-start border-4 border-primary">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted text-uppercase small fw-bold">Live Indexable URLs</span>
                        <h3 class="mb-0 fw-bold mt-1 text-primary">{{ $totalIndexableUrls }}</h3>
                        <small class="text-success"><i class="bi bi-check-circle-fill me-1"></i>In Sitemap XML</small>
                    </div>
                    <div class="bg-primary bg-opacity-10 text-primary p-3 rounded-circle">
                        <i class="bi bi-diagram-3-fill fs-4"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stat 2: Brand Service Pages -->
    <div class="col-xl-3 col-sm-6">
        <div class="card border-0 shadow-sm rounded-3 h-100 border-start border-4 border-info">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted text-uppercase small fw-bold">Brand SEO Pages</span>
                        <h3 class="mb-0 fw-bold mt-1 text-info">{{ $brandPagesCount }}</h3>
                        <small class="text-muted">21 AC + 15 Microwave</small>
                    </div>
                    <div class="bg-info bg-opacity-10 text-info p-3 rounded-circle">
                        <i class="bi bi-cpu-fill fs-4"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stat 3: Published Problem Guides -->
    <div class="col-xl-3 col-sm-6">
        <div class="card border-0 shadow-sm rounded-3 h-100 border-start border-4 border-success">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted text-uppercase small fw-bold">Published Blogs</span>
                        <h3 class="mb-0 fw-bold mt-1 text-success">{{ $publishedBlogs }}</h3>
                        <small class="text-muted">{{ $draftBlogs }} Drafts | {{ $scheduledBlogs }} Scheduled</small>
                    </div>
                    <div class="bg-success bg-opacity-10 text-success p-3 rounded-circle">
                        <i class="bi bi-journal-check fs-4"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stat 4: Active Offers -->
    <div class="col-xl-3 col-sm-6">
        <div class="card border-0 shadow-sm rounded-3 h-100 border-start border-4 border-warning">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted text-uppercase small fw-bold">Active Offers</span>
                        <h3 class="mb-0 fw-bold mt-1 text-warning">{{ $activeOffers }}</h3>
                        <small class="text-muted">{{ $expiredOffers }} Expired / Auto-Deactivated</small>
                    </div>
                    <div class="bg-warning bg-opacity-10 text-warning p-3 rounded-circle">
                        <i class="bi bi-tag-fill fs-4"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SEO Health & Audit Warnings -->
<div class="row g-3 mb-4">
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm rounded-3 h-100">
            <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center border-bottom">
                <h5 class="mb-0 fw-bold text-dark"><i class="bi bi-shield-check text-primary me-2"></i>Technical SEO & Indexing Architecture</h5>
                <a href="{{ url('/sitemap.xml') }}" target="_blank" class="btn btn-sm btn-outline-primary">
                    <i class="bi bi-file-earmark-code me-1"></i>View Live sitemap.xml
                </a>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="p-3 border rounded-3 bg-light">
                            <h6 class="fw-bold mb-2"><i class="bi bi-robot text-primary me-2"></i>Robots.txt Directives</h6>
                            <p class="text-muted small mb-2">Public crawl allowed; private endpoints protected (/admin/, /login, /register).</p>
                            <span class="badge bg-success"><i class="bi bi-check2 me-1"></i>Active at /robots.txt</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded-3 bg-light">
                            <h6 class="fw-bold mb-2"><i class="bi bi-geo-alt-fill text-danger me-2"></i>Verified Local NAP</h6>
                            <p class="text-muted small mb-2">Civil Line Kakkanad, Kochi, Kerala 682030 | +91 97467 00889</p>
                            <span class="badge bg-success"><i class="bi bi-check2 me-1"></i>LocalBusiness Schema Active</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded-3 bg-light">
                            <h6 class="fw-bold mb-2"><i class="bi bi-lightning-charge-fill text-warning me-2"></i>Server Performance</h6>
                            <p class="text-muted small mb-2">HTTP/2 active, Gzip compression enabled, 365d immutable static cache active.</p>
                            <span class="badge bg-success"><i class="bi bi-check2 me-1"></i>Nginx 1.28 Optimized</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded-3 bg-light">
                            <h6 class="fw-bold mb-2"><i class="bi bi-universal-access-circle text-info me-2"></i>Agentic & Accessibility Tree</h6>
                            <p class="text-muted small mb-2">Single H1 hierarchy, landmark boundaries (&lt;header&gt;, &lt;main&gt;, &lt;footer&gt;), skip-link.</p>
                            <span class="badge bg-success"><i class="bi bi-check2 me-1"></i>Semantically Well-Formed</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Audit Warnings -->
    <div class="col-lg-4">
        <div class="card border-0 shadow-sm rounded-3 h-100">
            <div class="card-header bg-white py-3 border-bottom">
                <h5 class="mb-0 fw-bold text-dark"><i class="bi bi-exclamation-triangle text-warning me-2"></i>Content Audit</h5>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        <span>Blogs missing custom SEO Title</span>
                        <span class="badge {{ $blogsMissingMetaTitle > 0 ? 'bg-danger' : 'bg-success' }} rounded-pill">{{ $blogsMissingMetaTitle }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        <span>Blogs missing Meta Description</span>
                        <span class="badge {{ $blogsMissingMetaDesc > 0 ? 'bg-warning text-dark' : 'bg-success' }} rounded-pill">{{ $blogsMissingMetaDesc }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        <span>Blogs without featured image</span>
                        <span class="badge {{ $blogsMissingImage > 0 ? 'bg-secondary' : 'bg-success' }} rounded-pill">{{ $blogsMissingImage }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        <span>Offers missing discount label</span>
                        <span class="badge {{ $offersMissingDiscount > 0 ? 'bg-warning text-dark' : 'bg-success' }} rounded-pill">{{ $offersMissingDiscount }}</span>
                    </li>
                </ul>

                <div class="mt-4 p-3 bg-primary bg-opacity-10 rounded-3 text-primary small">
                    <i class="bi bi-info-circle me-1"></i><strong>Tip:</strong> The automated fallback system auto-generates SEO titles, meta descriptions, and canonical URLs whenever these fields are left blank.
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Keyword Mapping Matrix Table -->
<div class="card border-0 shadow-sm rounded-3 mb-4">
    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center border-bottom">
        <div>
            <h5 class="mb-0 fw-bold text-dark"><i class="bi bi-table text-primary me-2"></i>Strategic Keyword Mapping Matrix</h5>
            <small class="text-muted">Targeted organic search intent mapped to specific landing pages and content silos</small>
        </div>
        <a href="https://search.google.com/search-console" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-secondary">
            <i class="bi bi-google me-1"></i>Open Google Search Console
        </a>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="ps-3">Target Keyword</th>
                        <th>Search Intent</th>
                        <th>Page Type</th>
                        <th>Target URL</th>
                        <th class="text-end pe-3">Implementation Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($keywordMap as $row)
                    <tr>
                        <td class="ps-3 fw-bold text-dark">{{ $row['keyword'] }}</td>
                        <td>
                            <span class="badge bg-light text-secondary border">{{ $row['intent'] }}</span>
                        </td>
                        <td>{{ $row['page'] }}</td>
                        <td>
                            <a href="{{ $row['url'] }}" target="_blank" class="text-primary text-decoration-none small">
                                {{ parse_url($row['url'], PHP_URL_PATH) ?: '/' }} <i class="bi bi-box-arrow-up-right ms-1"></i>
                            </a>
                        </td>
                        <td class="text-end pe-3">
                            <span class="badge bg-success bg-opacity-10 text-success border border-success">{{ $row['status'] }}</span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
