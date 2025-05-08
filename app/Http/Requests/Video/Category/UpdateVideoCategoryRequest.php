<?php

namespace App\Http\Requests\Video\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVideoCategoryRequest extends FormRequest
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
        $videoCategoryId = $this->route('video_category')->id;
        return [
            'name' => 'required|unique:video_categories,name,' . $videoCategoryId,
            'location' => 'nullable|string',
            'date' => 'nullable|string'
        ];
    }
}
