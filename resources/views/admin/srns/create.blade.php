@extends('layouts.admin')


@section('title', 'Create SRN')


@section('page-title', 'Create Service Request')


@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.srns.index') }}">SRNs</a></li>
    <li class="breadcrumb-item active">Create</li>
@endsection


@section('content')
    <div class="card shadow-sm p-4">
        <h5 class="mb-4">Create Service Request</h5>


        <form action="{{ route('admin.srns.store') }}" method="POST">
            @csrf
            @include('admin.srns._form')


            <div class="d-flex justify-content-end mt-3">
                <button type="submit" class="btn btn-success">Save</button>
                <a href="{{ route('admin.srns.index') }}" class="btn btn-secondary ms-2">Cancel</a>
            </div>
        </form>
    </div>
@endsection
