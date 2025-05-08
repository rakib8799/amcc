<?php

namespace App\Http\Requests\Settings;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactSettingsRequest extends FormRequest
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
            'contact_address_1' => 'nullable|string|max:255',
            'contact_phone_1' => 'nullable|string|max:20',
            'contact_email_1' => 'nullable|email|max:255',
            'contact_address_2' => 'nullable|string|max:255',
            'contact_phone_2' => 'nullable|string|max:20',
            'contact_email_2' => 'nullable|email|max:255'
        ];
    }
}
