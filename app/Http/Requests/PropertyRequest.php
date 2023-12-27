<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => 'required|integer',
            'property_name' => 'required|max:255',
            'capital' => 'required|max:32',
            'expense' => 'required|max:32',
            'loan' => 'integer|max:32',
            'loan_period' => 'max:32',
            'interest' => 'max:32',
            'rent' => 'required|max:32',
            'fixed_expenditure' => 'max:32',
            'repay' => 'max:32',
        ];
    }
}
