<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreListingCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check() && auth()->user()->hasRole('admin') ;;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'   => 'required|string|max:255',
             'slug'   => 'required|string|max:255',
            'status' => 'required|boolean',
            'image'  => $this->method() === 'PUT' ? 'nullable' : 'required' . '|image|mimes:jpg,jpeg,png,webp|max:2048',
        ];
    }
}
