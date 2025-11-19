<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Card;

class StoreCardRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }


    /**
     * GENERATE DATA HERE
     * This runs BEFORE validation rules.
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'user_id' => auth()->id(),
            'card_number' => $this->generateUniqueCardNumber(),
            'valid_until' => now()->addYears(3)->toDateString(),
            'card_status' => false, // Default to inactive
        ]);
    }

    /**
     * VALIDATE DATA HERE
     */
    public function rules(): array
    {
        return [
            // We validate 'user_id' to ensure the "One Card" rule is enforced
            'user_id' => ['required', 'integer', 'unique:cards,user_id'],
            'card_number' => ['required', 'numeric', 'unique:cards,card_number'],
            'valid_until' => ['required', 'date'],
            'card_status' => ['boolean'],
        ];
    }

    public function messages()
    {
        return [
            'user_id.unique' => 'You have already requested a card. Please check your profile.',
        ];
    }

    /**
     * Helper to generate 16-digit unique number
     */
    private function generateUniqueCardNumber()
    {
        do {
            $number = random_int(100000000000, 999999999999);
        } while (Card::where('card_number', $number)->exists());

        return $number;
    }

}
