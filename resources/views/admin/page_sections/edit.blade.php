@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Page Section</h2>

    <form action="{{ route('page-sections.update', $pageSection->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Page</label>
            <select name="page_id" class="form-control" required>
                @foreach($pages as $page)
                    <option value="{{ $page->id }}" {{ $pageSection->page_id == $page->id ? 'selected' : '' }}>
                        {{ $page->title }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Section</label>
            <select name="section_id" class="form-control" required>
                @foreach($sections as $section)
                    <option value="{{ $section->id }}" {{ $pageSection->section_id == $section->id ? 'selected' : '' }}>
                        {{ $section->title }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Order</label>
            <input type="number" name="order" class="form-control" value="{{ $pageSection->order }}">
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="is_repeatable" value="1" class="form-check-input" {{ $pageSection->is_repeatable ? 'checked' : '' }}>
            <label class="form-check-label">Repeatable</label>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="is_common" value="1" class="form-check-input" {{ $pageSection->is_common ? 'checked' : '' }}>
            <label class="form-check-label">Common</label>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('page-sections.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
