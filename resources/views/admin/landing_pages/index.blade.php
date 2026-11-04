@extends('layouts.admin')

@section('title', 'Ad Landing Pages Management')

@section('content')
<div class="row mb-4 align-items-center">
    <div class="col-md-6">
        <h2 class="mb-1 fw-bold text-dark">Ad Landing Pages</h2>
        <p class="text-muted mb-0">Create, manage, and optimize high-converting service landing pages with dynamic SEO.</p>
    </div>
    <div class="col-md-6 text-md-end mt-3 mt-md-0">
        <a href="{{ route('admin.landing-pages.create') }}" class="btn btn-primary px-4 py-2 fw-semibold shadow-sm">
            <i class="bi bi-plus-circle me-1"></i> Create New Landing Page
        </a>
    </div>
</div>

<!-- Stats Counters -->
<div class="row g-3 mb-4">
    <div class="col-md-4">
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body d-flex align-items-center">
                <div class="rounded-circle bg-primary bg-opacity-10 p-3 me-3 text-primary fs-3">
                    <i class="bi bi-file-earmark-code"></i>
                </div>
                <div>
                    <h6 class="text-muted mb-1 text-uppercase fs-7 fw-semibold">Total Landing Pages</h6>
                    <h3 class="mb-0 fw-bold">{{ $stats['total'] }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body d-flex align-items-center">
                <div class="rounded-circle bg-success bg-opacity-10 p-3 me-3 text-success fs-3">
                    <i class="bi bi-check-circle"></i>
                </div>
                <div>
                    <h6 class="text-muted mb-1 text-uppercase fs-7 fw-semibold">Live / Published</h6>
                    <h3 class="mb-0 fw-bold">{{ $stats['published'] }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body d-flex align-items-center">
                <div class="rounded-circle bg-warning bg-opacity-10 p-3 me-3 text-warning fs-3">
                    <i class="bi bi-pencil-square"></i>
                </div>
                <div>
                    <h6 class="text-muted mb-1 text-uppercase fs-7 fw-semibold">Drafts</h6>
                    <h3 class="mb-0 fw-bold">{{ $stats['draft'] }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Filters & Search -->
<div class="card border-0 shadow-sm rounded-3 mb-4">
    <div class="card-body">
        <form method="GET" action="{{ route('admin.landing-pages.index') }}" class="row g-3 align-items-center">
            <div class="col-md-6 col-lg-5">
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-search text-muted"></i></span>
                    <input type="text" name="q" class="form-control bg-light border-start-0" placeholder="Search by title, headline or slug..." value="{{ request('q') }}">
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <select name="status" class="form-select bg-light">
                    <option value="">All Statuses</option>
                    <option value="published" {{ request('status') === 'published' ? 'selected' : '' }}>Published</option>
                    <option value="draft" {{ request('status') === 'draft' ? 'selected' : '' }}>Draft</option>
                </select>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-outline-primary w-100 fw-semibold">Filter</button>
            </div>
            @if(request()->hasAny(['q', 'status']))
                <div class="col-auto">
                    <a href="{{ route('admin.landing-pages.index') }}" class="btn btn-link text-muted px-0 text-decoration-none">
                        <i class="bi bi-x-circle me-1"></i> Clear filters
                    </a>
                </div>
            @endif
        </form>
    </div>
</div>

<!-- Table -->
<div class="card border-0 shadow-sm rounded-3">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="ps-4">Page Title & Slug</th>
                        <th>Hero Headline</th>
                        <th>Contact / Phone</th>
                        <th>SEO Health</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th class="text-end pe-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pages as $page)
                        <tr>
                            <td class="ps-4">
                                <div class="fw-bold text-dark">{{ $page->title }}</div>
                                <div class="small">
                                    <a href="{{ url($page->slug) }}" target="_blank" class="text-decoration-none text-primary">
                                        /{{ $page->slug }} <i class="bi bi-box-arrow-up-right fs-8"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-light text-dark border">{{ $page->hero_badge }}</span>
                                <div class="small fw-semibold mt-1">{{ Str::limit($page->hero_title, 35) }}</div>
                            </td>
                            <td>
                                <div class="small"><i class="bi bi-telephone text-muted me-1"></i>{{ $page->primary_phone ?: '—' }}</div>
                                <div class="small text-success"><i class="bi bi-whatsapp me-1"></i>{{ $page->whatsapp_number ?: '—' }}</div>
                            </td>
                            <td>
                                @php
                                    $seoScore = 0;
                                    if(!empty($page->meta_title)) $seoScore += 25;
                                    if(!empty($page->meta_description)) $seoScore += 25;
                                    if(!empty($page->focus_keyword)) $seoScore += 25;
                                    if(!empty($page->og_image) || !empty($page->hero_image)) $seoScore += 25;
                                @endphp
                                <div class="d-flex align-items-center">
                                    <div class="progress flex-grow-1 me-2" style="height: 6px; width: 60px;">
                                        <div class="progress-bar {{ $seoScore >= 75 ? 'bg-success' : ($seoScore >= 50 ? 'bg-warning' : 'bg-danger') }}" 
                                             style="width: {{ $seoScore }}%"></div>
                                    </div>
                                    <span class="small fw-semibold text-muted">{{ $seoScore }}%</span>
                                </div>
                                <div class="fs-8 text-muted mt-1">
                                    @if($seoScore === 100)
                                        <span class="text-success"><i class="bi bi-check2-all"></i> Full SEO</span>
                                    @else
                                        <span>Meta ready</span>
                                    @endif
                                </div>
                            </td>
                            <td>
                                @if($page->status === 'published')
                                    <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1">
                                        <i class="bi bi-check-circle-fill me-1"></i> Published
                                    </span>
                                @else
                                    <span class="badge bg-secondary-subtle text-secondary border border-secondary-subtle px-2 py-1">
                                        <i class="bi bi-file-earmark-lock me-1"></i> Draft
                                    </span>
                                @endif
                            </td>
                            <td>
                                <div class="small text-muted">{{ $page->created_at->format('M d, Y') }}</div>
                            </td>
                            <td class="text-end pe-4">
                                <div class="btn-group">
                                    <a href="{{ url($page->slug) }}" target="_blank" class="btn btn-sm btn-outline-secondary" title="View Live">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.landing-pages.edit', $page->id) }}" class="btn btn-sm btn-outline-primary" title="Edit Page & SEO">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.landing-pages.duplicate', $page->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-outline-info" title="1-Click Duplicate">
                                            <i class="bi bi-copy"></i>
                                        </button>
                                    </form>
                                    <form action="{{ route('admin.landing-pages.destroy', $page->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this landing page?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center py-5 text-muted">
                                <i class="bi bi-file-earmark-x fs-1 d-block mb-3 text-secondary"></i>
                                <h5>No landing pages found</h5>
                                <p class="small mb-3">Get started by creating your first dynamic ad landing page.</p>
                                <a href="{{ route('admin.landing-pages.create') }}" class="btn btn-primary btn-sm">
                                    Create Landing Page
                                </a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($pages->hasPages())
            <div class="p-3 border-top">
                {{ $pages->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
