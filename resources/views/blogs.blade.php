@extends('layouts.app')

@section('title', 'Blog | EssenTechs - AC Repair and Appliance Services in Kerala')
@section('meta_description', 'Explore our blog for expert tips on AC repair in Kerala, washing machine repair,
    refrigerator repair & service, microwave oven repair, and home appliance maintenance tips.')
@section('meta_keywords', 'AC repair in Kerala, washing machine repair Kerala, refrigerator repair Kerala, microwave
    oven repair Kerala, best AC repair mechanic in Kerala, appliance services Kerala')
@section('content')
    <!-- Blog Listing Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-5">Our Blog - Tips & Insights on Home Appliance Repairs in Kerala</h1>
                <p class="mb-4">Stay updated with simple, practical advice on AC repair in Kerala, washing machine repair,
                    refrigerator repair & service, microwave oven repair, and more. Our blogs help you maintain your
                    appliances easily at home.</p>
            </div>
            <div class="row g-4">
                <div class="row g-4">
                    @foreach ($blogs as $index => $blog)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ ($index + 1) * 0.1 }}s">
                            <div class="service-item position-relative overflow-hidden rounded">
                                <img class="img-fluid"
                                    src="{{ $blog->featured_image ? asset('storage/' . $blog->featured_image) : asset('img/default-blog.jpg') }}"
                                    alt="{{ $blog->title }}">
                                <div class="service-text rounded p-4">
                                    <h4 class="mb-3">{{ $blog->title }}</h4>
                                    <p class="mb-4">{{ Str::limit($blog->short_description, 120) }}</p>
                                    <a class="small fw-medium" href="{{ route('blog.details', $blog->slug) }}">
                                        Read More<i class="fa fa-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Listing End -->
@endsection
