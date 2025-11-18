<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreListingTimingsRequest extends FormRequest
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
            'day_status'   => 'required|array|size:7',
            'open_time'    => 'required|array|size:7',
            'close_time'   => 'required|array|size:7',

            // Validate each item *inside* the arrays
            'day_status.*' => 'required|string|in:open,24hours,closed',
            'open_time.*'  => 'nullable|date_format:H:i',

            // Ensure close_time is after open_time, but only when the status is 'open'
            'close_time.*' => 'nullable|date_format:H:i|after:open_time.*',
        ];
    }
}
