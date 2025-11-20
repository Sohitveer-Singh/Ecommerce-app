<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class FinancialUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'upi_id'        => ['required', 'string', 'max:50'],
            'pan_number'    => ['required', 'string', 'max:10'],
            'father_name'   => ['required', 'string', 'max:100'],
            'aadhar_number' => ['required', 'string', 'max:20'],

            // Files: Allow JPG/PNG/PDF, Max 5MB
            'pan_photo'     => ['nullable', 'file', 'mimes:jpg,jpeg,png,pdf', 'max:5120'],
            'aadhar_photo'  => ['nullable', 'file', 'mimes:jpg,jpeg,png,pdf', 'max:5120'],
            'upi_qr'        => ['nullable', 'image', 'max:5120'],
        ];
    }
}
