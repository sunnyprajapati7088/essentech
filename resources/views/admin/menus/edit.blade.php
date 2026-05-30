@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Menu</h2>

    <form action="{{ route('admin.menus.update', $menu->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="form-group mb-3">
            <label>Title</label>
            <input type="text" name="title" value="{{ $menu->title }}" class="form-control" required>
        </div>



        <div class="form-group mb-3">
            <label>Order</label>
            <input type="number" name="order" value="{{ $menu->order }}" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label>Status</label>
            <select name="is_active" class="form-control">
                <option value="1" {{ $menu->is_active ? 'selected' : '' }}>Active</option>
                <option value="0" {{ !$menu->is_active ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('admin.menus.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
