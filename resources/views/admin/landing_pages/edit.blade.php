@extends('layouts.admin')

@section('title', 'Edit Landing Page: ' . $page->title)

@section('content')
<div class="row mb-3 align-items-center">
    <div class="col-md-8">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-1">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.landing-pages.index') }}">Ad Landing Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit: {{ $page->title }}</li>
            </ol>
        </nav>
        <h2 class="mb-0 fw-bold text-dark">Edit Landing Page</h2>
    </div>
    <div class="col-md-4 text-md-end mt-2 mt-md-0">
        <a href="{{ url($page->slug) }}" target="_blank" class="btn btn-outline-primary me-2">
            <i class="bi bi-box-arrow-up-right me-1"></i> View Live
        </a>
        <a href="{{ route('admin.landing-pages.index') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-1"></i> Back to List
        </a>
    </div>
</div>

<form action="{{ route('admin.landing-pages.update', $page->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @include('admin.landing_pages._form')
</form>
@endsection
