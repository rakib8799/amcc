<?php

namespace App\Http\Requests\Settings;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePhotoSettingsRequest extends FormRequest
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
            'logo_1' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg,webp|max:2048',
            'logo_2' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg,webp|max:2048',
            'favicon' => 'nullable|image|mimes:ico,png|max:1024',
            'banner' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ];
    }
}
