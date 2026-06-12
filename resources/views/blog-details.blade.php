@extends('layouts.app')

@section('title', $title)
@section('meta_description', $meta_description)
@section('meta_keywords', $meta_keywords)

@section('content')
<!-- Blog Single Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-start">
            <!-- Main Blog Content -->
            <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="display-6 mb-4">{{ $title }}</h1>
                <img class="img-fluid rounded mb-4" src="{{ asset('img/' . $image) }}" alt="{{ $title }}">
                {!! $content !!}
                <div class="mt-4">
                    <p>Need help with your appliances? EssenTechs offers the best AC repair in Kerala, washing machine repair, refrigerator repair & service, and microwave oven repair. Call us now!</p>
                    <a href="tel:+919746700889" class="btn btn-primary">Call Now for Service</a>
                </div>
            </div>
            <!-- Sidebar (Related Blogs and Call to Action) -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-light p-4 mb-4">
                    <h5 class="mb-3">Related Blogs</h5>
                    @foreach ($related_blogs as $related)
                        <a class="d-block mb-2" href="{{ route('blog.details', $related['slug']) }}">{{ $related['title'] }}</a>
                    @endforeach
                </div>
                <div class="bg-light p-4">
                    <h5 class="mb-3">Need Appliance Repair?</h5>
                    <p>Contact EssenTechs for fast, reliable service across Kerala.</p>
                    <a href="tel:+919746700889" class="btn btn-primary">Call Now</a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Blog Single End -->
@endsection
