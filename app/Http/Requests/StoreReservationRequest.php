<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReservationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; //todo: logic to setup admin / reservation role
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'person_id' => 'required|exists:people',
            'room_type_id' => 'required|exists:room_types',
            'arrival_date' => 'required|date',
            'estimated_arrival_time' => 'nullable',
            'departure_date' => 'required|date',
            'estimated_departure_time' => 'nullable',
            'adults' => 'required|number|min:1',
            'children' => 'sometimes|nullable',
            'notes' => 'string',
        ];
    }
}
