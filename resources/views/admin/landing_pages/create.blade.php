@extends('layouts.admin')

@section('title', 'Create Ad Landing Page')

@section('content')
<div class="row mb-3 align-items-center">
    <div class="col-md-8">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-1">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.landing-pages.index') }}">Ad Landing Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create New</li>
            </ol>
        </nav>
        <h2 class="mb-0 fw-bold text-dark">Create Ad Landing Page</h2>
    </div>
    <div class="col-md-4 text-md-end mt-2 mt-md-0">
        <a href="{{ route('admin.landing-pages.index') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-1"></i> Back to All Pages
        </a>
    </div>
</div>

<form action="{{ route('admin.landing-pages.store') }}" method="POST" enctype="multipart/form-data">
    @include('admin.landing_pages._form')
</form>
@endsection
