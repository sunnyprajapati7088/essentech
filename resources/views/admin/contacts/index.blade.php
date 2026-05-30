@extends('layouts.admin')

@section('title', 'Contacts List')

@section('page-title', 'Contacts List')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Contacts</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="mb-0">
                                <i class="bi bi-person-lines-fill me-2"></i>
                                Contacts Management
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Search -->
                    <div class="row mb-3">
    <div class="col-md-6">
        <form action="{{ route('admin.contacts.index') }}" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" name="q" value="{{ $q ?? '' }}"
                    placeholder="Search by name, email or mobile...">
                <button class="btn btn-outline-secondary" type="submit">
                    <i class="bi bi-search"></i>
                </button>
                @if (!empty($q))
                    <a href="{{ route('admin.contacts.index') }}" class="btn btn-outline-danger">
                        <i class="bi bi-x-circle"></i>
                    </a>
                @endif
            </div>
        </form>
    </div>

    <div class="col-md-6 text-end">
        <a href="{{ route('admin.contacts.export.csv') }}" class="btn btn-success">
            <i class="bi bi-download"></i> Download CSV
        </a>
    </div>
</div>


                    <!-- Data Table -->
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Service</th>
                                    <th>Message</th>


                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->id }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->mobile }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->subject }}</td>
                                        <td>{{ $contact->service }}</td>
                                        <td>{{ Str::limit($contact->message, 50) }}</td>

                                        <td>{{ $contact->created_at->format('Y-m-d H:i') }}</td>
                                        <td>
                                            <div class="btn-group btn-group-sm">

                                                <form action="{{ route('admin.contacts.destroy', $contact) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger" title="Delete"
                                                        onclick="return confirm('Are you sure you want to delete this contact?')">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10" class="text-center">No contacts found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- Pagination -->
                  {{ $contacts->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
@endsection
