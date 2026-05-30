@extends('layouts.admin')

@section('title', 'View Page')

@section('page-title', 'View Page: ' . $page->title)

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.pages.index') }}">Pages</a></li>
    <li class="breadcrumb-item active">View</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">

                <div class="card-header">
                    <h5 class="mb-0">
                        <i class="bi bi-eye me-2"></i>
                        Page Details
                    </h5>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <div class="row">
                        <div class="col-md-8">
                            <h4>{{ $page->title }}</h4>
                            <p><strong>Slug:</strong> {{ $page->slug }}</p>
                            <p><strong>Status:</strong>
                                <span
                                    class="badge {{ $page->status == 'published' ? 'bg-success' : ($page->status == 'draft' ? 'bg-warning' : 'bg-secondary') }}">
                                    {{ ucfirst($page->status) }}
                                </span>
                            </p>
                            <p><strong>Short Desc:</strong></p>
                            {{ $page->short_descrption }}
                            <p><strong>Content:</strong></p>
                            {!! $page->content !!}

                            @if ($page->sections && $page->sections->count())
                                <h5>Sections:</h5>
                                <ul>
                                    @foreach ($page->sections as $section)
                                        <li>{{ $section->name }}</li>
                                    @endforeach
                                </ul>

                            @endif
                        </div>

                        <div class="col-md-4">
                            <h6>Banner Image</h6>
                            <img src="{{ $page->banner_image ? asset('storage/' . $page->banner_image) : asset('images/no-image.png') }}"
                                alt="Banner Image" class="img-fluid mb-3 rounded shadow">

                            <h6>Meta Information</h6>
                            <p><strong>Meta Title:</strong> {{ $page->meta_title }}</p>
                            <p><strong>Meta Description:</strong> {{ $page->meta_description }}</p>
                            <p><strong>Schema JSON:</strong>
                                <pre>{{ $page->schema }}</pre>
                            </p>
                        </div>
                    </div>

                    <a href="{{ route('admin.pages.edit', $page->id) }}" class="btn btn-success mt-3">
                        <i class="bi bi-pencil me-2"></i> Edit
                    </a>
                    <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary mt-3">
                        <i class="bi bi-arrow-left me-2"></i> Back to List
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection
