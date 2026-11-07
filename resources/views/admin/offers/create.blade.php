@extends('layouts.admin')

@section('title', 'Create Service Offer')
@section('page-title', 'Create Service Offer')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.offers.index') }}">Offers</a></li>
    <li class="breadcrumb-item active">Create</li>
@endsection

@section('content')
<div class="card border-0 shadow-sm rounded-3">
    <div class="card-header bg-white py-3 border-bottom">
        <h5 class="mb-0 fw-bold"><i class="bi bi-plus-circle text-primary me-2"></i>Create New Service Offer</h5>
    </div>
    <div class="card-body p-4">
        <form action="{{ route('admin.offers.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row g-3 mb-4">
                <div class="col-md-8">
                    <label class="form-label fw-bold">Offer Title <span class="text-danger">*</span></label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" placeholder="e.g. Seasonal AC Deep Cleaning & Gas Inspection Discount" required>
                    @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-bold">Custom Slug (Optional)</label>
                    <input type="text" name="slug" class="form-control" value="{{ old('slug') }}" placeholder="Auto-generated if empty">
                </div>
            </div>

            <div class="row g-3 mb-4">
                <div class="col-md-4">
                    <label class="form-label fw-bold">Discount Label</label>
                    <input type="text" name="discount" class="form-control" value="{{ old('discount') }}" placeholder="e.g. ₹200 OFF or 15% OFF">
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-bold">Applicable Service</label>
                    <select name="applicable_service" class="form-select">
                        <option value="All Appliances">All Home Appliances</option>
                        <option value="AC Repair & Service">AC Repair & Service</option>
                        <option value="Microwave Oven Service">Microwave Oven Service</option>
                        <option value="Refrigerator Repair">Refrigerator Repair</option>
                        <option value="Washing Machine Service">Washing Machine Service</option>
                        <option value="RO Water Purifier Service">RO Water Purifier Service</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-bold">Applicable Brand (Optional)</label>
                    <input type="text" name="applicable_brand" class="form-control" value="{{ old('applicable_brand') }}" placeholder="e.g. Samsung, LG, IFB, or All">
                </div>
            </div>

            <div class="row g-3 mb-4">
                <div class="col-md-4">
                    <label class="form-label fw-bold">Target Location</label>
                    <input type="text" name="location" class="form-control" value="{{ old('location', 'Kochi, Kakkanad & Ernakulam') }}">
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-bold">Start Date</label>
                    <input type="date" name="start_date" class="form-control" value="{{ old('start_date') }}">
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-bold">End Date</label>
                    <input type="date" name="end_date" class="form-control" value="{{ old('end_date') }}">
                </div>
            </div>

            <div class="row g-3 mb-4">
                <div class="col-md-4">
                    <label class="form-label fw-bold">Status</label>
                    <select name="status" class="form-select">
                        <option value="active" {{ old('status') === 'active' ? 'selected' : '' }}>Active (Publish on /offers)</option>
                        <option value="draft" {{ old('status') === 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="scheduled" {{ old('status') === 'scheduled' ? 'selected' : '' }}>Scheduled</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-bold">Display Priority</label>
                    <input type="number" name="priority" class="form-control" value="{{ old('priority', 0) }}" placeholder="Higher shows first">
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-bold">Call To Action (CTA) Text</label>
                    <input type="text" name="cta_text" class="form-control" value="{{ old('cta_text', 'Claim Offer Now') }}">
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold">Offer Description & Terms <span class="text-danger">*</span></label>
                <textarea name="description" rows="5" class="form-control @error('description') is-invalid @enderror" placeholder="Describe the offer details, what is included, inspection steps, and validity conditions..." required>{{ old('description') }}</textarea>
                @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="row g-3 mb-4">
                <div class="col-md-6">
                    <label class="form-label fw-bold">Offer Image (Optional)</label>
                    <input type="file" name="image" class="form-control" accept="image/*">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold">Image Alt Text</label>
                    <input type="text" name="image_alt" class="form-control" value="{{ old('image_alt') }}" placeholder="Descriptive image alt text">
                </div>
            </div>

            <!-- SEO Overrides -->
            <div class="card bg-light border-0 p-3 mb-4 rounded-3">
                <h6 class="fw-bold mb-3"><i class="bi bi-google text-primary me-2"></i>SEO & Search Intent Metadata (Auto-generated if empty)</h6>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label small fw-bold">SEO Meta Title</label>
                        <input type="text" name="seo_title" class="form-control form-control-sm" value="{{ old('seo_title') }}" placeholder="e.g. AC Service Offers & Discounts in Kochi | EssenTechs">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small fw-bold">Focus Keyword</label>
                        <input type="text" name="focus_keyword" class="form-control form-control-sm" value="{{ old('focus_keyword') }}" placeholder="e.g. AC service offer in Kochi">
                    </div>
                    <div class="col-12">
                        <label class="form-label small fw-bold">Meta Description</label>
                        <textarea name="meta_description" rows="2" class="form-control form-control-sm" placeholder="120-155 characters summarizing the discount...">{{ old('meta_description') }}</textarea>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end gap-2">
                <a href="{{ route('admin.offers.index') }}" class="btn btn-outline-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary px-4"><i class="bi bi-save me-1"></i>Save & Publish Offer</button>
            </div>
        </form>
    </div>
</div>
@endsection
