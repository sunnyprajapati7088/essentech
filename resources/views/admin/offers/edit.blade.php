@extends('layouts.admin')

@section('title', 'Edit Offer - ' . $offer->title)
@section('page-title', 'Edit Service Offer')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.offers.index') }}">Offers</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="card border-0 shadow-sm rounded-3">
    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center border-bottom">
        <h5 class="mb-0 fw-bold"><i class="bi bi-pencil-square text-primary me-2"></i>Edit Offer: {{ $offer->title }}</h5>
        <a href="{{ route('offers.show', $offer->slug) }}" target="_blank" class="btn btn-sm btn-outline-info">
            <i class="bi bi-box-arrow-up-right me-1"></i>View Live Page
        </a>
    </div>
    <div class="card-body p-4">
        <form action="{{ route('admin.offers.update', $offer->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row g-3 mb-4">
                <div class="col-md-8">
                    <label class="form-label fw-bold">Offer Title <span class="text-danger">*</span></label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $offer->title) }}" required>
                    @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-bold">Slug <span class="text-danger">*</span></label>
                    <input type="text" name="slug" class="form-control" value="{{ old('slug', $offer->slug) }}" required>
                </div>
            </div>

            <div class="row g-3 mb-4">
                <div class="col-md-4">
                    <label class="form-label fw-bold">Discount Label</label>
                    <input type="text" name="discount" class="form-control" value="{{ old('discount', $offer->discount) }}">
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-bold">Applicable Service</label>
                    <select name="applicable_service" class="form-select">
                        <option value="All Appliances" {{ $offer->applicable_service === 'All Appliances' ? 'selected' : '' }}>All Home Appliances</option>
                        <option value="AC Repair & Service" {{ $offer->applicable_service === 'AC Repair & Service' ? 'selected' : '' }}>AC Repair & Service</option>
                        <option value="Microwave Oven Service" {{ $offer->applicable_service === 'Microwave Oven Service' ? 'selected' : '' }}>Microwave Oven Service</option>
                        <option value="Refrigerator Repair" {{ $offer->applicable_service === 'Refrigerator Repair' ? 'selected' : '' }}>Refrigerator Repair</option>
                        <option value="Washing Machine Service" {{ $offer->applicable_service === 'Washing Machine Service' ? 'selected' : '' }}>Washing Machine Service</option>
                        <option value="RO Water Purifier Service" {{ $offer->applicable_service === 'RO Water Purifier Service' ? 'selected' : '' }}>RO Water Purifier Service</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-bold">Applicable Brand</label>
                    <input type="text" name="applicable_brand" class="form-control" value="{{ old('applicable_brand', $offer->applicable_brand) }}">
                </div>
            </div>

            <div class="row g-3 mb-4">
                <div class="col-md-4">
                    <label class="form-label fw-bold">Target Location</label>
                    <input type="text" name="location" class="form-control" value="{{ old('location', $offer->location) }}">
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-bold">Start Date</label>
                    <input type="date" name="start_date" class="form-control" value="{{ old('start_date', $offer->start_date ? $offer->start_date->format('Y-m-d') : '') }}">
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-bold">End Date</label>
                    <input type="date" name="end_date" class="form-control" value="{{ old('end_date', $offer->end_date ? $offer->end_date->format('Y-m-d') : '') }}">
                </div>
            </div>

            <div class="row g-3 mb-4">
                <div class="col-md-4">
                    <label class="form-label fw-bold">Status</label>
                    <select name="status" class="form-select">
                        <option value="active" {{ old('status', $offer->status) === 'active' ? 'selected' : '' }}>Active</option>
                        <option value="draft" {{ old('status', $offer->status) === 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="scheduled" {{ old('status', $offer->status) === 'scheduled' ? 'selected' : '' }}>Scheduled</option>
                        <option value="expired" {{ old('status', $offer->status) === 'expired' ? 'selected' : '' }}>Expired</option>
                        <option value="archived" {{ old('status', $offer->status) === 'archived' ? 'selected' : '' }}>Archived</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-bold">Display Priority</label>
                    <input type="number" name="priority" class="form-control" value="{{ old('priority', $offer->priority) }}">
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-bold">CTA Text</label>
                    <input type="text" name="cta_text" class="form-control" value="{{ old('cta_text', $offer->cta_text) }}">
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold">Offer Description & Terms <span class="text-danger">*</span></label>
                <textarea name="description" rows="5" class="form-control @error('description') is-invalid @enderror" required>{{ old('description', $offer->description) }}</textarea>
                @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="row g-3 mb-4">
                <div class="col-md-6">
                    <label class="form-label fw-bold">Update Offer Image</label>
                    <input type="file" name="image" class="form-control" accept="image/*">
                    @if($offer->image)
                    <div class="mt-2 small text-muted">
                        Current: <a href="{{ asset('storage/' . $offer->image) }}" target="_blank">View image</a>
                    </div>
                    @endif
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold">Image Alt Text</label>
                    <input type="text" name="image_alt" class="form-control" value="{{ old('image_alt', $offer->image_alt) }}">
                </div>
            </div>

            <!-- SEO Overrides -->
            <div class="card bg-light border-0 p-3 mb-4 rounded-3">
                <h6 class="fw-bold mb-3"><i class="bi bi-google text-primary me-2"></i>SEO & Search Intent Metadata</h6>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label small fw-bold">SEO Meta Title</label>
                        <input type="text" name="seo_title" class="form-control form-control-sm" value="{{ old('seo_title', $offer->seo_title) }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small fw-bold">Focus Keyword</label>
                        <input type="text" name="focus_keyword" class="form-control form-control-sm" value="{{ old('focus_keyword', $offer->focus_keyword) }}">
                    </div>
                    <div class="col-12">
                        <label class="form-label small fw-bold">Meta Description</label>
                        <textarea name="meta_description" rows="2" class="form-control form-control-sm">{{ old('meta_description', $offer->meta_description) }}</textarea>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end gap-2">
                <a href="{{ route('admin.offers.index') }}" class="btn btn-outline-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary px-4"><i class="bi bi-save me-1"></i>Update Offer</button>
            </div>
        </form>
    </div>
</div>
@endsection
