@extends('layouts.admin')
@section('content')
<div class="container">
    <h2>Edit Section</h2>

    <form action="{{ route('admin.sections.update', $section->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="form-group mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ $section->name }}" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label>Slug</label>
            <input type="text" name="slug" value="{{ $section->slug }}" class="form-control" required>
        </div>

        {{-- <div class="form-group mb-3">
            <label>Content</label>
            <textarea name="content" class="form-control">{{ $section->content }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label>Is Repeatable?</label>
            <select name="is_repeatable" class="form-control">
                <option value="0" {{ !$section->is_repeatable ? 'selected' : '' }}>No</option>
                <option value="1" {{ $section->is_repeatable ? 'selected' : '' }}>Yes</option>
            </select>
        </div> --}}

        <div class="form-group mb-3">
            <label>Status</label>
            <select name="is_active" class="form-control">
                <option value="1" {{ $section->is_active ? 'selected' : '' }}>Active</option>
                <option value="0" {{ !$section->is_active ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('admin.sections.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
