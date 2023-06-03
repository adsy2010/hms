<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePersonRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => 'sometimes|nullable|exists:users',
            'hotel_id' => 'required|exists:hotels',
            'first_name' => 'required|string|min:2',
            'last_name' => 'required|string|min:2',
            'email' => 'required|email',
            'date_of_birth' => 'sometimes|nullable|date',
            'gender' => 'sometimes|nullable|string',
            'contact_number' => 'sometimes|nullable|string',
            'address' => 'sometimes|nullable|json',
            'postcode' => 'sometimes|nullable|required_with:address|string',
            'country' => 'sometimes|nullable|string',
        ];
    }
}
