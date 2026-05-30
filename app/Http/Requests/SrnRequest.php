<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class SrnRequest extends FormRequest
{
    public function authorize()
    {
        // adjust as needed; keep true for now
        return true;
    }


    public function rules()
    {
        $srnId = optional($this->route('srn'))->id; // works with route-model binding


        return [
            'srn_number' => [
                'required',
                'string',
                'max:100',
                Rule::unique('srns', 'srn_number')->ignore($srnId),
            ],
            'date_of_request' => ['nullable', 'date'],
            'customer_name' => ['required', 'string', 'max:255'],
            'contact_number' => ['nullable', 'string', 'max:30'],
            'email' => ['nullable', 'email', 'max:191'],
            'address' => ['nullable', 'string'],
            'related_work' => ['nullable', 'string', 'max:191'],
            'description' => ['nullable', 'string'],
            'status' => ['required', Rule::in(['Pending', 'In Progress', 'Completed', 'Cancelled'])],
            'technician_assigned' => ['nullable', 'string', 'max:191'],
            'completion_datetime' => ['nullable', 'date'],
            'closing_datetime' => ['nullable', 'date'],
            'payment_method' => ['nullable', Rule::in(['Online', 'Offline', 'Cash', 'UPI', 'Card'])],
            'payment_amount' => ['nullable', 'numeric', 'min:0'],
            'payment_datetime' => ['nullable', 'date'],
            'payment_description' => ['nullable', 'string'],
        ];
    }
}
