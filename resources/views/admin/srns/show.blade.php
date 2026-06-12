@extends('layouts.admin')


@section('title', 'SRN Details')


@section('page-title', 'Service Request Details')


@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.srns.index') }}">SRNs</a></li>
    <li class="breadcrumb-item active">Details</li>
@endsection


@section('content')
    <div class="card shadow-sm p-4">
        <h5 class="mb-4">Service Request #{{ $srn->srn_number }}</h5>


        <dl class="row">
          <dt class="col-md-3">Date of Request Creation</dt>
<dd class="col-md-9">
    {{ \Carbon\Carbon::parse($srn->date_of_request)->format('d-m-Y') }}
</dd>



            <dt class="col-md-3">Customer Name</dt>
            <dd class="col-md-9">{{ $srn->customer_name }}</dd>


            <dt class="col-md-3">Contact Number</dt>
            <dd class="col-md-9">{{ $srn->contact_number }}</dd>


            <dt class="col-md-3">Email</dt>
            <dd class="col-md-9">{{ $srn->email }}</dd>


            <dt class="col-md-3">Address</dt>
            <dd class="col-md-9">{{ $srn->address }}</dd>


            <dt class="col-md-3">Related Work</dt>
            <dd class="col-md-9">{{ $srn->related_work }}</dd>


            <dt class="col-md-3">Description</dt>
            <dd class="col-md-9">{{ $srn->description }}</dd>


            <dt class="col-md-3">Status</dt>
            <dd class="col-md-9">{{ $srn->status }}</dd>


            <dt class="col-md-3">Technician Assigned</dt>
            <dd class="col-md-9">{{ $srn->technician }}</dd>


            <dt class="col-md-3">Completion Date & Time</dt>
            <dd class="col-md-9">{{ $srn->completion_datetime }}</dd>


            <dt class="col-md-3">Closing Date & Time</dt>
            <dd class="col-md-9">{{ $srn->closing_datetime }}</dd>


            <dt class="col-md-3">Payment Method</dt>
            <dd class="col-md-9">{{ $srn->payment_method }}</dd>


            <dt class="col-md-3">Payment Amount</dt>
            <dd class="col-md-9">₹{{ $srn->payment_amount }}</dd>


            <dt class="col-md-3">Payment Date & Time</dt>
            <dd class="col-md-9">{{ $srn->payment_datetime }}</dd>


            <dt class="col-md-3">Payment Description</dt>
            <dd class="col-md-9">{{ $srn->payment_description }}</dd>
        </dl>


        <div class="d-flex justify-content-end mt-3">
            <a href="{{ route('admin.srns.edit', $srn->id) }}" class="btn btn-primary">Edit</a>
            <a href="{{ route('admin.srns.index') }}" class="btn btn-secondary ms-2">Back</a>
        </div>
    </div>
@endsection
