<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreListingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return  auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'           => 'required|string|max:255',
            'description'    => 'required|string',
            'email'          => 'required|email|max:255',
            'contact_person' => 'required|string|max:255',
            'mobile'         => 'required|string|max:20',
            'alt_mobile'         => 'required|string|max:20',
            'whatsapp_no'    => 'nullable|string|max:20',
            'gst_number'     => 'nullable|string|max:15',
        ];
    }
}
