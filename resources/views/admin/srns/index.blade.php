@extends('layouts.admin')


@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>SRN List</h1>
            <a href="{{ route('admin.srns.create') }}" class="btn btn-primary">Create SRN</a>
        </div>


        <form method="GET" action="{{ route('admin.srns.index') }}" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search by SRN number or description"
                    value="{{ request('search') }}">
                <button type="submit" class="btn btn-outline-secondary">Search</button>
            </div>
        </form>


        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>SRN Number</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($srns as $srn)
                    <tr>
                        <td>{{ $srn->id }}</td>
                        <td>{{ $srn->srn_number }}</td>
                        <td>{{ $srn->description }}</td>
                        <td>{{ $srn->status }}</td>
                        <td>{{ $srn->created_at->format('d-m-Y') }}</td>
                        <td>
                            <a href="{{ route('admin.srns.show', $srn) }}" class="btn btn-sm btn-info">View</a>
                            <a href="{{ route('admin.srns.edit', $srn) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('admin.srns.destroy', $srn) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No SRNs found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>


        <div class="mt-3">
            {{ $srns->links() }}
        </div>
    </div>
@endsection
