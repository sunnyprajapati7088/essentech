@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Sections</h2>
    <a href="{{ route('admin.sections.create') }}" class="btn btn-primary mb-3">Add Section</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Slug</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sections as $section)
                <tr>
                    <td>{{ $section->name }}</td>
                    <td>{{ $section->slug }}</td>
                    <td>
                        <a href="{{ route('admin.sections.edit', $section->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.sections.destroy', $section->id) }}" method="POST" style="display:inline-block;">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this section?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
