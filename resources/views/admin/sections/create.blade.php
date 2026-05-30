@extends('layouts.admin')

@section('title', 'Create Section')
@section('page-title', 'Create Section')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.sections.index') }}">Sections</a></li>
    <li class="breadcrumb-item active">Create</li>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h5><i class="bi bi-plus-circle me-2"></i>Create Section</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.sections.store') }}" method="POST">
            @csrf

            <!-- Name -->
            <div class="mb-3">
                <label class="form-label">Name <span class="text-danger">*</span></label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
                @error('name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <!-- Slug -->
            <div class="mb-3">
                <label class="form-label">Slug <span class="text-danger">*</span></label>
                <input type="text" id="slug" name="slug" class="form-control" value="{{ old('slug') }}" required>
                @error('slug')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <!-- Status -->
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="is_active" class="form-select">
                    <option value="1" {{ old('is_active') == '1' ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('is_active') == '0' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary"><i class="bi bi-save me-2"></i>Save Section</button>
            <a href="{{ route('admin.sections.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left me-2"></i>Back</a>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Auto-generate slug from name
    const nameInput = document.getElementById('name');
    const slugInput = document.getElementById('slug');

    if (nameInput && slugInput) {
        nameInput.addEventListener('input', function() {
            slugInput.value = this.value
                .toLowerCase()
                .trim()
                .replace(/ /g, '-')        // replace spaces with -
                .replace(/[^\w-]+/g, '');  // remove special characters
        });
    }
</script>
@endpush
