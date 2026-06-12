<!-- resources/views/admin/dashboard.blade.php (Extends layout) -->

@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <h5 class="card-title">Total Blogs</h5>
                   <p class="card-text display-4">{{ App\Models\User::count() }}</p>
                    {{-- <p class="card-text display-4">{{ App\Models\Blog::count() }}</p> <!-- Example stat --> --}}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    <h5 class="card-title">Total Services</h5>
                    <p class="card-text display-4">{{ App\Models\User::count() }}</p>
                    {{-- <p class="card-text display-4">{{ App\Models\Service::count() }}</p> <!-- Example stat --> --}}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-info text-white mb-4">
                <div class="card-body">
                    <h5 class="card-title">Total Users</h5>
                    <p class="card-text display-4">{{ App\Models\User::count() }}</p> <!-- Example stat -->
                </div>
            </div>
        </div>
    </div>
    <!-- Add more dashboard elements like charts if needed (e.g., via Chart.js CDN) -->
@endsection