<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreListingAddressRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // 1. Get the 'listing' model from the route
        $listing = $this->route('listing');

        // 2. Check if the authenticated user's ID

        return $listing && $this->user()->id === $listing->user_id;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'address'      => 'required|string|max:191',
            'pincode'      => 'required|string|size:6',
            'city'         => 'required|string|max:191',
            'state'        => 'required|string|max:191',
            'latitude'     => 'required|numeric|between:-90,90',
            'longitude'    => 'required|numeric|between:-180,180',

        ];
    }
}
