<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class ProfileUpdateRequest extends FormRequest
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
        $userId = $this->user()->id;

        return [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name'  => ['required', 'string', 'max:255'],

            // ✅ Ignore the current user's ID for unique check
            'email'      => ['required', 'email', Rule::unique('users')->ignore($userId)],

            'phone'      => ['required', 'string', 'max:20'],
            'address'    => ['required', 'string', 'max:500'],
            'country'    => ['required', 'string', 'max:2'],
            'city'       => ['required', 'string', 'max:100'],
            'district'   => ['required', 'string', 'max:100'],
            'pincode'    => ['required', 'string', 'max:20'],
            'profile_picture' => ['required', 'image', 'max:5120'], // Max 5MB
        ];
    }
}
