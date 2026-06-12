@extends('layouts.app')

@section('title', $page->meta_title ?? $page->title)
@section('meta_description', $page->meta_description ?? '')
@section('meta_keywords', $page->meta_keywords ?? '')

@section('content')

    <!-- Page Header -->

    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">{{ $page->title }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url($menu->slug) }}">{{ $menu->title }}</a></li>
                    <li class="breadcrumb-item active">{{ $page->title }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Banner Image + Short Description Row -->
@if ($page->banner_image || $page->short_description)
<div class="container my-4">
    <div class="row align-items-center">
        
        <!-- Banner Image -->
        @if ($page->banner_image)
            <div class="col-md-6 text-center">
                <img src="{{ \Illuminate\Support\Facades\Storage::url($page->banner_image) }}" 
                     alt="{{ $page->title }}"
                     class="img-fluid mb-3 mb-md-0 rounded featured-image"
                     loading="lazy">
            </div>
        @endif

        <!-- Short Description -->
        @if ($page->short_descrption)
            <div class="col-md-6">
                <p class="mb-0">{{ $page->short_descrption }}</p>
            </div>
        @endif

    </div>
</div>
@endif

    <!-- Page Content -->
    @if (!empty($page->content))
        <div class="container my-5">
            {!! $page->content !!}
        </div>
    @endif
    <!-- Dynamic Sections -->
    @foreach ($page->sections as $section)
        @includeIf('common.' . $section->slug, ['section' => $section, 'page' => $page])
    @endforeach
@endsection
