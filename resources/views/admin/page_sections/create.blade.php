@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Add Page Section</h2>

    <form action="{{ route('page-sections.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Page</label>
            <select name="page_id" class="form-control" required>
                <option value="">Select Page</option>
                @foreach($pages as $page)
                    <option value="{{ $page->id }}">{{ $page->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Section</label>
            <select name="section_id" class="form-control" required>
                <option value="">Select Section</option>
                @foreach($sections as $section)
                    <option value="{{ $section->id }}">{{ $section->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Order</label>
            <input type="number" name="order" class="form-control">
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="is_repeatable" value="1" class="form-check-input">
            <label class="form-check-label">Repeatable</label>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="is_common" value="1" class="form-check-input">
            <label class="form-check-label">Common</label>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('page-sections.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
