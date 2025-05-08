<?php

namespace App\Http\Requests\Settings;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMapSettingsRequest extends FormRequest
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
            'map_heading' => 'nullable|string|max:255',
            'map_sub_heading' => 'nullable|string|max:255',
            'map_1_country_name' => 'nullable|string|max:255',
            'map_2_country_name' => 'nullable|string|max:255',
            'map_1_country_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'map_2_country_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'map_1' => 'nullable|string',
            'map_2' => 'nullable|string'
        ];
    }
}
