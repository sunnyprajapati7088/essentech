@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Page Sections</h2>
    <a href="{{ route('page-sections.create') }}" class="btn btn-primary mb-3">Add Page Section</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Page</th>
                <th>Section</th>
                <th>Order</th>
                <th>Repeatable</th>
                <th>Common</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pageSections as $ps)
                <tr>
                    <td>{{ $ps->id }}</td>
                    <td>{{ $ps->page->title }}</td>
                    <td>{{ $ps->section->title }}</td>
                    <td>{{ $ps->order }}</td>
                    <td>{{ $ps->is_repeatable ? 'Yes' : 'No' }}</td>
                    <td>{{ $ps->is_common ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="{{ route('page-sections.edit', $ps->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('page-sections.destroy', $ps->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
