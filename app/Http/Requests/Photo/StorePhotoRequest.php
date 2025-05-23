<?php

namespace App\Http\Requests\Photo;

use Illuminate\Foundation\Http\FormRequest;

class StorePhotoRequest extends FormRequest
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
            'photo_category_id' => 'required|exists:photo_categories,id',
            'photo' => 'required',
            'photo.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:5120'
        ];
    }
}
