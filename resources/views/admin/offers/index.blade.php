@extends('layouts.admin')

@section('title', 'Offers & Deals Management')
@section('page-title', 'Offers & Deals Management')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Offers</li>
@endsection

@section('content')
<div class="card border-0 shadow-sm rounded-3">
    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center border-bottom">
        <h5 class="mb-0 fw-bold"><i class="bi bi-tag-fill text-warning me-2"></i>Service Offers & Discount Campaigns</h5>
        <div>
            <a href="{{ route('offers.index') }}" target="_blank" class="btn btn-sm btn-outline-secondary me-2">
                <i class="bi bi-eye me-1"></i>View Public Offers Hub
            </a>
            <a href="{{ route('admin.offers.create') }}" class="btn btn-sm btn-primary">
                <i class="bi bi-plus-circle me-1"></i>Create New Offer
            </a>
        </div>
    </div>

    <div class="card-body">
        <form method="GET" action="{{ route('admin.offers.index') }}" class="row g-2 mb-4">
            <div class="col-md-5">
                <input type="text" name="q" class="form-control form-control-sm" placeholder="Search offers by title, service, discount..." value="{{ request('q') }}">
            </div>
            <div class="col-md-3">
                <select name="status" class="form-select form-select-sm">
                    <option value="">All Statuses</option>
                    <option value="active" {{ request('status') === 'active' ? 'selected' : '' }}>Active</option>
                    <option value="draft" {{ request('status') === 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="scheduled" {{ request('status') === 'scheduled' ? 'selected' : '' }}>Scheduled</option>
                    <option value="expired" {{ request('status') === 'expired' ? 'selected' : '' }}>Expired</option>
                </select>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-sm btn-primary"><i class="bi bi-filter me-1"></i>Filter</button>
                <a href="{{ route('admin.offers.index') }}" class="btn btn-sm btn-outline-secondary">Reset</a>
            </div>
        </form>

        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Title & Service</th>
                        <th>Discount</th>
                        <th>Target Location</th>
                        <th>Validity Period</th>
                        <th>Priority</th>
                        <th>Status</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($offers as $offer)
                    <tr>
                        <td>
                            <div class="fw-bold text-dark">{{ $offer->title }}</div>
                            <small class="text-muted"><i class="bi bi-tools text-primary me-1"></i>{{ $offer->applicable_service ?? 'All Appliances' }}</small>
                        </td>
                        <td>
                            <span class="badge bg-warning text-dark">{{ $offer->discount ?? 'Discount' }}</span>
                        </td>
                        <td><small>{{ $offer->location ?? 'Kochi' }}</small></td>
                        <td>
                            <small class="text-muted">
                                @if($offer->start_date && $offer->end_date)
                                    {{ $offer->start_date->format('M d') }} – {{ $offer->end_date->format('M d, Y') }}
                                @elseif($offer->end_date)
                                    Till {{ $offer->end_date->format('M d, Y') }}
                                @else
                                    Ongoing
                                @endif
                            </small>
                        </td>
                        <td><span class="badge bg-light text-dark border">{{ $offer->priority }}</span></td>
                        <td>
                            @if($offer->status === 'active')
                                <span class="badge bg-success">Active</span>
                            @elseif($offer->status === 'expired')
                                <span class="badge bg-danger">Expired</span>
                            @elseif($offer->status === 'scheduled')
                                <span class="badge bg-info">Scheduled</span>
                            @else
                                <span class="badge bg-secondary">Draft</span>
                            @endif
                        </td>
                        <td class="text-end">
                            <a href="{{ route('offers.show', $offer->slug) }}" target="_blank" class="btn btn-sm btn-outline-info" title="Preview Live">
                                <i class="bi bi-box-arrow-up-right"></i>
                            </a>
                            <a href="{{ route('admin.offers.edit', $offer->id) }}" class="btn btn-sm btn-outline-primary" title="Edit">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('admin.offers.destroy', $offer->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this offer?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center py-4 text-muted">No offers found. Click "Create New Offer" to add one.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($offers->hasPages())
        <div class="mt-4">
            {{ $offers->links() }}
        </div>
        @endif
    </div>
</div>
@endsection
