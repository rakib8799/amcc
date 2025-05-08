<?php

namespace App\Http\Requests\Settings;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSeoSettingsRequest extends FormRequest
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
            'seo_company_name' => 'nullable|string|max:255',
            'seo_title' => 'nullable|string|max:255',
            'seo_short_description' => 'nullable|string|max:255',   
            'seo_keywords' => 'nullable|array|max:255'
        ];
    }
}
