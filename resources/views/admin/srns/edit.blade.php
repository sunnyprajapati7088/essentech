@extends('layouts.admin')


@section('title', 'Edit SRN')


@section('page-title', 'Edit Service Request')


@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item"><a href="{{ route('admin.srns.index') }}">SRNs</a></li>
<li class="breadcrumb-item active">Edit</li>
@endsection


@section('content')
<div class="card shadow-sm p-4">
<h5 class="mb-4">Edit Service Request</h5>


<form action="{{ route('admin.srns.update', $srn->id) }}" method="POST">
@csrf
@method('PUT')
@include('admin.srns._form', ['srn' => $srn])


<div class="d-flex justify-content-end mt-3">
<button type="submit" class="btn btn-primary">Update</button>
<a href="{{ route('admin.srns.index') }}" class="btn btn-secondary ms-2">Cancel</a>
</div>
</form>
</div>
@endsection
