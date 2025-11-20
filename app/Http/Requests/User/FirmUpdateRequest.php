<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class FirmUpdateRequest extends FormRequest
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
            'firm_name'          => ['required', 'string', 'max:255'],
            'gst_number'         => ['required', 'string', 'max:15'], // GST is 15 chars
            'firm_type'          => ['required', 'string', 'in:Proprietorship,Partnership,LLP,Pvt Ltd,Public Ltd,Other'],
            'firm_address'       => ['required', 'string', 'max:500'],
            'composition_number' => ['nullable', 'string', 'max:50'],
        ];
    }
}
