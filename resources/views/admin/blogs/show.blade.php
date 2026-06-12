@extends('layouts.admin')

@section('title', 'View Blog')

@section('page-title', 'View Blog: ' . $blog->title)

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.blogs.index') }}">Blogs</a></li>
    <li class="breadcrumb-item active">View</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="bi bi-eye me-2"></i>
                    Blog Details
                </h5>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-8">
                        <h4>{{ $blog->title }}</h4>
                        <p><strong>Slug:</strong> {{ $blog->slug }}</p>
                        <p><strong>Short Description:</strong> {{ $blog->short_description }}</p>
                        <p><strong>Content:</strong></p>
                        {!! $blog->content !!}
                        <p><strong>Status:</strong> <span class="badge {{ $blog->status == 'published' ? 'bg-success' : 'bg-warning' }}">{{ ucfirst($blog->status) }}</span></p>
                        <p><strong>Published At:</strong> {{ $blog->published_at }}</p>
                        <p><strong>Tags:</strong> {{ $blog->tags }}</p>
                        <p><strong>Views:</strong> {{ $blog->views_count }}</p>
                    </div>
                    <div class="col-md-4">
                       <img src="{{ $blog->featured_image ? asset('storage/' . $blog->featured_image) : asset('images/no-image.png') }}"
     alt="Featured Image"
     class="img-fluid mb-3 rounded shadow">

                        <h6>Meta Information</h6>
                        <p><strong>Meta Title:</strong> {{ $blog->meta_title }}</p>
                        <p><strong>Meta Description:</strong> {{ $blog->meta_description }}</p>
                        <p><strong>Canonical URL:</strong> {{ $blog->canonical_url }}</p>
                        <p><strong>Schema JSON:</strong> <pre>{{ $blog->schema_json }}</pre></p>
                        <h6>Open Graph</h6>
                        <p><strong>OG Title:</strong> {{ $blog->og_title }}</p>
                        <p><strong>OG Description:</strong> {{ $blog->og_description }}</p>
                        @if ($blog->og_image)
                            <img src="{{ Storage::url($blog->og_image) }}" alt="OG Image" class="img-fluid">
                        @endif
                    </div>
                </div>

                <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-success mt-3">
                    <i class="bi bi-pencil me-2"></i> Edit
                </a>
                <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary mt-3">
                    <i class="bi bi-arrow-left me-2"></i> Back to List
                </a>
            </div>
        </div>
    </div>
</div>
@endsection