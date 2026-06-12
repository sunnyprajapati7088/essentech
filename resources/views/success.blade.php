@extends('layouts.app')

@section('title', 'Message Sent Successfully | Essen Techs')

@section('content')
    <div class="container-xxl py-5 text-center">
        <div class="container">
            <i class="fas fa-check-circle fa-5x text-success mb-4"></i>
            <h1 class="display-6 mb-3">Thank You!</h1>
            <p class="mb-4">Your message has been sent successfully. We will contact you soon.</p>
            <a href="{{ route('welcome') }}" class="btn btn-primary">Back to Home</a>
        </div>
    </div>
@endsection
