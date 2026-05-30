@extends('layouts.admin')

@section('title', 'Data Tables')

@section('page-title', 'Data Tables')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Data Tables</li>
@endsection

@section('content')
<div data-page="tables">
    <!-- Users Table -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="mb-0">
                                <i class="bi bi-people me-2"></i>
                                Users Management
                            </h5>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-primary btn-sm">
                                <i class="bi bi-plus-circle me-1"></i>
                                Add User
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Filters and Search -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-search"></i>
                                </span>
                                <input type="text" class="form-control table-search" data-table="usersTable" placeholder="Search users...">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select" id="statusFilter">
                                <option value="">All Status</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                                <option value="pending">Pending</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select" id="roleFilter">
                                <option value="">All Roles</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                                <option value="moderator">Moderator</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Bulk Actions -->
                    <div id="bulkActions" class="alert alert-info" style="display: none;">
                        <div class="row align-items-center">
                            <div class="col">
                                <span id="selectedCount">0</span> user(s) selected
                            </div>
                            <div class="col-auto">
                                <div class="btn-group btn-group-sm">
                                    <button class="btn btn-outline-success" data-confirm="Are you sure you want to activate selected users?">
                                        <i class="bi bi-check-circle me-1"></i>Activate
                                    </button>
                                    <button class="btn btn-outline-warning" data-confirm="Are you sure you want to deactivate selected users?">
                                        <i class="bi bi-pause-circle me-1"></i>Deactivate
                                    </button>
                                    <button class="btn btn-outline-danger" data-confirm="Are you sure you want to delete selected users?">
                                        <i class="bi bi-trash me-1"></i>Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Data Table -->
                    <div class="table-responsive">
                        <table class="table table-hover data-table" id="usersTable">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="selectAll">
                                        </div>
                                    </th>
                                    <th data-sort="name" class="sortable">
                                        Name
                                        <i class="bi bi-arrow-up-down ms-1"></i>
                                    </th>
                                    <th data-sort="email" class="sortable">
                                        Email
                                        <i class="bi bi-arrow-up-down ms-1"></i>
                                    </th>
                                    <th data-sort="role" class="sortable">
                                        Role
                                        <i class="bi bi-arrow-up-down ms-1"></i>
                                    </th>
                                    <th data-sort="status" class="sortable">
                                        Status
                                        <i class="bi bi-arrow-up-down ms-1"></i>
                                    </th>
                                    <th data-sort="created" class="sortable">
                                        Created
                                        <i class="bi bi-arrow-up-down ms-1"></i>
                                    </th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="user-avatar me-2">
                                                <i class="bi bi-person-circle text-primary fs-4"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">John Doe</div>
                                                <small class="text-muted">ID: 001</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>john.doe@example.com</td>
                                    <td>
                                        <span class="badge bg-danger">Admin</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-success">Active</span>
                                    </td>
                                    <td>2024-01-15</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-outline-primary" data-bs-toggle="tooltip" title="View">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-outline-success" data-bs-toggle="tooltip" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-outline-danger" data-bs-toggle="tooltip" title="Delete" data-confirm="Are you sure you want to delete this user?">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="2">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="user-avatar me-2">
                                                <i class="bi bi-person-circle text-success fs-4"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Jane Smith</div>
                                                <small class="text-muted">ID: 002</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>jane.smith@example.com</td>
                                    <td>
                                        <span class="badge bg-info">User</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-success">Active</span>
                                    </td>
                                    <td>2024-01-14</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-outline-primary" data-bs-toggle="tooltip" title="View">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-outline-success" data-bs-toggle="tooltip" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-outline-danger" data-bs-toggle="tooltip" title="Delete" data-confirm="Are you sure you want to delete this user?">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="3">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="user-avatar me-2">
                                                <i class="bi bi-person-circle text-warning fs-4"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Mike Johnson</div>
                                                <small class="text-muted">ID: 003</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>mike.johnson@example.com</td>
                                    <td>
                                        <span class="badge bg-warning">Moderator</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-warning">Pending</span>
                                    </td>
                                    <td>2024-01-13</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-outline-primary" data-bs-toggle="tooltip" title="View">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-outline-success" data-bs-toggle="tooltip" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-outline-danger" data-bs-toggle="tooltip" title="Delete" data-confirm="Are you sure you want to delete this user?">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="4">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="user-avatar me-2">
                                                <i class="bi bi-person-circle text-danger fs-4"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Sarah Wilson</div>
                                                <small class="text-muted">ID: 004</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>sarah.wilson@example.com</td>
                                    <td>
                                        <span class="badge bg-info">User</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-danger">Inactive</span>
                                    </td>
                                    <td>2024-01-12</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-outline-primary" data-bs-toggle="tooltip" title="View">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-outline-success" data-bs-toggle="tooltip" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-outline-danger" data-bs-toggle="tooltip" title="Delete" data-confirm="Are you sure you want to delete this user?">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="5">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="user-avatar me-2">
                                                <i class="bi bi-person-circle text-info fs-4"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Tom Brown</div>
                                                <small class="text-muted">ID: 005</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>tom.brown@example.com</td>
                                    <td>
                                        <span class="badge bg-info">User</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-success">Active</span>
                                    </td>
                                    <td>2024-01-11</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-outline-primary" data-bs-toggle="tooltip" title="View">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-outline-success" data-bs-toggle="tooltip" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-outline-danger" data-bs-toggle="tooltip" title="Delete" data-confirm="Are you sure you want to delete this user?">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="6">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="user-avatar me-2">
                                                <i class="bi bi-person-circle text-secondary fs-4"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Lisa Davis</div>
                                                <small class="text-muted">ID: 006</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>lisa.davis@example.com</td>
                                    <td>
                                        <span class="badge bg-warning">Moderator</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-success">Active</span>
                                    </td>
                                    <td>2024-01-10</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-outline-primary" data-bs-toggle="tooltip" title="View">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-outline-success" data-bs-toggle="tooltip" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-outline-danger" data-bs-toggle="tooltip" title="Delete" data-confirm="Are you sure you want to delete this user?">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Pagination -->
                    <div class="row align-items-center mt-3">
                        <div class="col-md-6">
                            <p class="text-muted mb-0">Showing 1 to 6 of 24 entries</p>
                        </div>
                        <div class="col-md-6">
                            <nav aria-label="Table pagination">
                                <ul class="pagination justify-content-end mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">
                                            <i class="bi bi-chevron-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">
                                            <i class="bi bi-chevron-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Orders Table -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="mb-0">
                                <i class="bi bi-cart me-2"></i>
                                Recent Orders
                            </h5>
                        </div>
                        <div class="col-auto">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-outline-secondary">
                                    <i class="bi bi-download me-1"></i>
                                    Export
                                </button>
                                <button class="btn btn-primary">
                                    <i class="bi bi-plus-circle me-1"></i>
                                    New Order
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer</th>
                                    <th>Product</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="fw-semibold">#ORD-001</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="user-avatar me-2">
                                                <i class="bi bi-person-circle text-primary fs-5"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">John Doe</div>
                                                <small class="text-muted">john@example.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <div class="fw-semibold">Premium Plan</div>
                                            <small class="text-muted">Monthly subscription</small>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="fw-semibold text-success">$99.00</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-success">Completed</span>
                                    </td>
                                    <td>2024-01-15</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-outline-primary" data-bs-toggle="tooltip" title="View Details">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-outline-info" data-bs-toggle="tooltip" title="Print Invoice">
                                                <i class="bi bi-printer"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="fw-semibold">#ORD-002</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="user-avatar me-2">
                                                <i class="bi bi-person-circle text-success fs-5"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Jane Smith</div>
                                                <small class="text-muted">jane@example.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <div class="fw-semibold">Basic Plan</div>
                                            <small class="text-muted">Annual subscription</small>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="fw-semibold text-success">$299.00</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-warning">Processing</span>
                                    </td>
                                    <td>2024-01-14</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-outline-primary" data-bs-toggle="tooltip" title="View Details">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-outline-info" data-bs-toggle="tooltip" title="Print Invoice">
                                                <i class="bi bi-printer"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="fw-semibold">#ORD-003</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="user-avatar me-2">
                                                <i class="bi bi-person-circle text-warning fs-5"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Mike Johnson</div>
                                                <small class="text-muted">mike@example.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <div class="fw-semibold">Enterprise Plan</div>
                                            <small class="text-muted">Custom package</small>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="fw-semibold text-success">$599.00</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-danger">Cancelled</span>
                                    </td>
                                    <td>2024-01-13</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-outline-primary" data-bs-toggle="tooltip" title="View Details">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-outline-info" data-bs-toggle="tooltip" title="Print Invoice">
                                                <i class="bi bi-printer"></i>
                                            </button>
                                        </div>
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

@push('styles')
<style>
    .sortable {
        cursor: pointer;
        user-select: none;
    }
    
    .sortable:hover {
        background-color: rgba(0, 0, 0, 0.05);
    }
    
    .sort-asc .bi-arrow-up-down::before {
        content: "\f148"; /* bi-arrow-up */
        color: var(--primary-color);
    }
    
    .sort-desc .bi-arrow-up-down::before {
        content: "\f149"; /* bi-arrow-down */
        color: var(--primary-color);
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize filters
        initTableFilters();
        
        // Demo action buttons
        initActionButtons();
    });
    
    function initTableFilters() {
        const statusFilter = document.getElementById('statusFilter');
        const roleFilter = document.getElementById('roleFilter');
        const table = document.getElementById('usersTable');
        
        // Status filter
        if (statusFilter) {
            statusFilter.addEventListener('change', function() {
                filterTableByColumn(table, 4, this.value.toLowerCase()); // Status column index
            });
        }
        
        // Role filter
        if (roleFilter) {
            roleFilter.addEventListener('change', function() {
                filterTableByColumn(table, 3, this.value.toLowerCase()); // Role column index
            });
        }
    }
    
    function filterTableByColumn(table, columnIndex, filterValue) {
        const rows = table.querySelectorAll('tbody tr');
        
        rows.forEach(row => {
            const cell = row.cells[columnIndex];
            const cellText = cell.textContent.toLowerCase();
            
            if (filterValue === '' || cellText.includes(filterValue)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
        
        updateVisibleRowsCount();
    }
    
    function updateVisibleRowsCount() {
        const table = document.getElementById('usersTable');
        const visibleRows = table.querySelectorAll('tbody tr:not([style*="display: none"])');
        const totalRows = table.querySelectorAll('tbody tr').length;
        
        // Update pagination info (you would typically get this from server)
        const paginationInfo = document.querySelector('.text-muted');
        if (paginationInfo) {
            paginationInfo.textContent = `Showing ${visibleRows.length} of ${totalRows} entries`;
        }
    }
    
    function initActionButtons() {
        // View buttons
        document.querySelectorAll('[title="View"], [title="View Details"]').forEach(btn => {
            btn.addEventListener('click', function() {
                AdminUtils.showToast('View functionality would open details modal/page', 'info');
            });
        });
        
        // Edit buttons
        document.querySelectorAll('[title="Edit"]').forEach(btn => {
            btn.addEventListener('click', function() {
                AdminUtils.showToast('Edit functionality would open edit form', 'info');
            });
        });
        
        // Print buttons
        document.querySelectorAll('[title="Print Invoice"]').forEach(btn => {
            btn.addEventListener('click', function() {
                AdminUtils.showToast('Print functionality would generate PDF', 'info');
            });
        });
        
        // Export button
        document.querySelector('[title="Export"], .btn:has(.bi-download)').addEventListener('click', function() {
            AdminUtils.showToast('Export functionality would download CSV/Excel file', 'info');
        });
        
        // Add buttons
        document.querySelectorAll('.btn:has(.bi-plus-circle)').forEach(btn => {
            btn.addEventListener('click', function() {
                AdminUtils.showToast('Add functionality would open create form', 'info');
            });
        });
        
        // Bulk action buttons
        document.querySelectorAll('#bulkActions .btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const action = this.textContent.trim();
                AdminUtils.showToast(`Bulk ${action} action would be performed on selected items`, 'info');
            });
        });
    }
</script>
@endpush