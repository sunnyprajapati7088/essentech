@extends('layouts.admin')

@section('title', 'Dashboard')

@section('page-title', 'Dashboard')

@section('breadcrumb')
    <li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
<div data-page="dashboard">
    <!-- Stats Cards Row -->
    <div class="row mb-4">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card stats-card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="stats-number">1,234</div>
                            <div class="stats-label">Total Users</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-people stats-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card stats-card success">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="stats-number">$45,678</div>
                            <div class="stats-label">Total Revenue</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-currency-dollar stats-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card stats-card warning">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="stats-number">567</div>
                            <div class="stats-label">Pending Orders</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-clock stats-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card stats-card info">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="stats-number">89</div>
                            <div class="stats-label">New Messages</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-envelope stats-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Charts and Tables Row -->
    <div class="row">
        <!-- Recent Activity -->
        <div class="col-lg-8 mb-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">
                        <i class="bi bi-graph-up me-2"></i>
                        Sales Overview
                    </h5>
                    <div class="dropdown">
                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            Last 7 days
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Last 7 days</a></li>
                            <li><a class="dropdown-item" href="#">Last 30 days</a></li>
                            <li><a class="dropdown-item" href="#">Last 3 months</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Chart placeholder -->
                    <div class="chart-container" style="height: 300px; background: linear-gradient(45deg, #f8fafc, #e2e8f0); border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; color: #64748b;">
                        <div class="text-center">
                            <i class="bi bi-bar-chart-line" style="font-size: 3rem; margin-bottom: 1rem;"></i>
                            <p class="mb-0">Chart.js or other charting library can be integrated here</p>
                            <small>Sample data: Sales increased by 23% this week</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Quick Actions -->
        <div class="col-lg-4 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        <i class="bi bi-lightning me-2"></i>
                        Quick Actions
                    </h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="button">
                            <i class="bi bi-plus-circle me-2"></i>
                            Add New User
                        </button>
                        <button class="btn btn-success" type="button">
                            <i class="bi bi-file-earmark-plus me-2"></i>
                            Create Order
                        </button>
                        <button class="btn btn-info" type="button">
                            <i class="bi bi-envelope me-2"></i>
                            Send Newsletter
                        </button>
                        <button class="btn btn-warning" type="button">
                            <i class="bi bi-gear me-2"></i>
                            System Settings
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- System Status -->
            <div class="card mt-4">
                <div class="card-header">
                    <h5 class="mb-0">
                        <i class="bi bi-cpu me-2"></i>
                        System Status
                    </h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="small">CPU Usage</span>
                            <span class="small">45%</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-primary" style="width: 45%"></div>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="small">Memory Usage</span>
                            <span class="small">67%</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-warning" style="width: 67%"></div>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="small">Disk Space</span>
                            <span class="small">23%</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-success" style="width: 23%"></div>
                        </div>
                    </div>
                    
                    <div class="text-center mt-3">
                        <span class="badge bg-success">
                            <i class="bi bi-check-circle me-1"></i>
                            All Systems Operational
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Recent Activity Table -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">
                        <i class="bi bi-clock-history me-2"></i>
                        Recent Activity
                    </h5>
                    <a href="#" class="btn btn-sm btn-outline-primary">View All</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Action</th>
                                    <th>Details</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="user-avatar me-2">
                                                <i class="bi bi-person-circle text-primary fs-4"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">John Doe</div>
                                                <small class="text-muted">john@example.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-primary">Login</span>
                                    </td>
                                    <td>Successful login from Chrome</td>
                                    <td>2 minutes ago</td>
                                    <td>
                                        <span class="badge bg-success">Success</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="user-avatar me-2">
                                                <i class="bi bi-person-circle text-success fs-4"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Jane Smith</div>
                                                <small class="text-muted">jane@example.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-info">Update</span>
                                    </td>
                                    <td>Updated profile information</td>
                                    <td>15 minutes ago</td>
                                    <td>
                                        <span class="badge bg-success">Success</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="user-avatar me-2">
                                                <i class="bi bi-person-circle text-warning fs-4"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Mike Johnson</div>
                                                <small class="text-muted">mike@example.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-warning">Order</span>
                                    </td>
                                    <td>Created new order #1234</td>
                                    <td>1 hour ago</td>
                                    <td>
                                        <span class="badge bg-warning">Pending</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="user-avatar me-2">
                                                <i class="bi bi-person-circle text-danger fs-4"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Sarah Wilson</div>
                                                <small class="text-muted">sarah@example.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-danger">Error</span>
                                    </td>
                                    <td>Failed payment attempt</td>
                                    <td>2 hours ago</td>
                                    <td>
                                        <span class="badge bg-danger">Failed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="user-avatar me-2">
                                                <i class="bi bi-person-circle text-info fs-4"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Tom Brown</div>
                                                <small class="text-muted">tom@example.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-success">Register</span>
                                    </td>
                                    <td>New user registration</td>
                                    <td>3 hours ago</td>
                                    <td>
                                        <span class="badge bg-success">Success</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Dashboard-specific JavaScript
    document.addEventListener('DOMContentLoaded', function() {
        // Animate stats numbers on page load
        animateNumbers();
        
        // Update progress bars periodically (demo)
        setInterval(updateSystemStatus, 30000);
    });
    
    function animateNumbers() {
        const statsNumbers = document.querySelectorAll('.stats-number');
        
        statsNumbers.forEach(element => {
            const finalNumber = element.textContent.replace(/[^0-9]/g, '');
            if (finalNumber) {
                animateValue(element, 0, parseInt(finalNumber), 2000);
            }
        });
    }
    
    function animateValue(element, start, end, duration) {
        const range = end - start;
        const minTimer = 50;
        let stepTime = Math.abs(Math.floor(duration / range));
        stepTime = Math.max(stepTime, minTimer);
        
        const startTime = new Date().getTime();
        const endTime = startTime + duration;
        let timer;
        
        function run() {
            const now = new Date().getTime();
            const remaining = Math.max((endTime - now) / duration, 0);
            const value = Math.round(end - (remaining * range));
            
            // Format the number based on original content
            if (element.textContent.includes('$')) {
                element.textContent = '$' + value.toLocaleString();
            } else {
                element.textContent = value.toLocaleString();
            }
            
            if (value === end) {
                clearInterval(timer);
            }
        }
        
        timer = setInterval(run, stepTime);
        run();
    }
    
    function updateSystemStatus() {
        // Simulate system status updates
        const progressBars = document.querySelectorAll('.progress-bar');
        
        progressBars.forEach(bar => {
            const currentWidth = parseInt(bar.style.width);
            const variation = Math.floor(Math.random() * 10) - 5; // -5 to +5
            const newWidth = Math.max(0, Math.min(100, currentWidth + variation));
            
            bar.style.width = newWidth + '%';
            bar.parentElement.previousElementSibling.querySelector('.small:last-child').textContent = newWidth + '%';
            
            // Update color based on usage
            bar.className = 'progress-bar';
            if (newWidth < 30) {
                bar.classList.add('bg-success');
            } else if (newWidth < 70) {
                bar.classList.add('bg-warning');
            } else {
                bar.classList.add('bg-danger');
            }
        });
    }
</script>
@endpush