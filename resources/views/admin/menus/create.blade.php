@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Create Menu</h2>

    <form action="{{ route('admin.menus.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        {{-- <div class="form-group mb-3">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" required>
        </div> --}}

        {{-- <div class="form-group mb-3">
            <label>URL</label>
            <input type="text" name="url" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label>Parent Menu</label>
            <select name="parent_id" class="form-control">
                <option value="">-- None --</option>
                @foreach($parents as $id => $title)
                    <option value="{{ $id }}">{{ $title }}</option>
                @endforeach
            </select>
        </div> --}}

        <div class="form-group mb-3">
            <label>Order</label>
            <input type="number" name="order" value="0" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label>Status</label>
            <select name="is_active" class="form-control">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('admin.menus.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
