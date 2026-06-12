
<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">Service Request Number (#SRN)</label>
        <input type="text" name="srn_number" class="form-control" value="{{ old('srn_number', $srn->srn_number ?? '') }}" placeholder="Ex: 0209202501" required>
    </div>
    <div class="col-md-6 mb-3">
        <label class="form-label">Date of Request Creation</label>
        <input type="date" name="date_of_request" class="form-control"
       value="{{ old('date_of_request', isset($srn->date_of_request) ? \Carbon\Carbon::parse($srn->date_of_request)->format('Y-m-d') : '') }}"
       required>
    </div>
</div>

<h5 class="mt-3">1. Customer Information</h5>
<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">Customer Name</label>
        <input type="text" name="customer_name" class="form-control" value="{{ old('customer_name', $srn->customer_name ?? '') }}" required>
    </div>
    <div class="col-md-6 mb-3">
        <label class="form-label">Contact Number</label>
        <input type="text" name="contact_number" class="form-control" value="{{ old('contact_number', $srn->contact_number ?? '') }}" required>
    </div>
</div>
<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email', $srn->email ?? '') }}">
    </div>
    <div class="col-md-6 mb-3">
        <label class="form-label">Full Address</label>
        <textarea name="address" class="form-control">{{ old('address', $srn->address ?? '') }}</textarea>
    </div>
</div>

<h5 class="mt-3">2. Service Request Information</h5>
<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">Related Work</label>
        <select name="related_work" class="form-select">
            @foreach(['AC Repair','Refrigerator Repair','Washing Machine Repair','Microwave Oven Repair','Other Service'] as $work)
                <option value="{{ $work }}" {{ (old('related_work', $srn->related_work ?? '') == $work) ? 'selected' : '' }}>{{ $work }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-6 mb-3">
        <label class="form-label">Status</label>
        <select name="status" class="form-select">
            @foreach(['Pending','In Progress','Completed','Cancelled'] as $status)
                <option value="{{ $status }}" {{ (old('status', $srn->status ?? '') == $status) ? 'selected' : '' }}>{{ $status }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="mb-3">
    <label class="form-label">SRN Description</label>
    <textarea name="description" class="form-control">{{ old('description', $srn->description ?? '') }}</textarea>
</div>
<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">Technician Assigned</label>
        <input type="text" name="technician_assigned" class="form-control" value="{{ old('technician_assigned', $srn->technician_assigned ?? '') }}">
    </div>
    <div class="col-md-6 mb-3">
        <label class="form-label">Completion Date & Time</label>
        <input type="datetime-local" name="completion_datetime" class="form-control" value="{{ old('completion_datetime', isset($srn->completion_datetime) ? date('Y-m-d\TH:i', strtotime($srn->completion_datetime)) : '') }}">
    </div>
</div>
<div class="mb-3">
    <label class="form-label">SRN Closing Date & Time</label>
    <input type="datetime-local" name="closing_datetime" class="form-control" value="{{ old('closing_datetime', isset($srn->closing_datetime) ? date('Y-m-d\TH:i', strtotime($srn->closing_datetime)) : '') }}">
</div>

<h5 class="mt-3">3. Payment Information</h5>
<div class="row">
    <div class="col-md-4 mb-3">
        <label class="form-label">Payment Method</label>
        <select name="payment_method" class="form-select">
            @foreach(['Online','Offline','Cash','UPI','Card'] as $method)
                <option value="{{ $method }}" {{ (old('payment_method', $srn->payment_method ?? '') == $method) ? 'selected' : '' }}>{{ $method }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-4 mb-3">
        <label class="form-label">Payment Amount</label>
        <input type="number" name="payment_amount" class="form-control" value="{{ old('payment_amount', $srn->payment_amount ?? '') }}">
    </div>
    <div class="col-md-4 mb-3">
        <label class="form-label">Payment Date & Time</label>
        <input type="datetime-local" name="payment_datetime" class="form-control" value="{{ old('payment_datetime', isset($srn->payment_datetime) ? date('Y-m-d\TH:i', strtotime($srn->payment_datetime)) : '') }}">
    </div>
</div>
<div class="mb-3">
    <label class="form-label">Payment Description</label>
    <textarea name="payment_description" class="form-control">{{ old('payment_description', $srn->payment_description ?? '') }}</textarea>
</div>
