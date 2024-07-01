<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array {
        return [
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'text' => 'required',
            'category_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages(): array {
        return [
            'title.required' => 'Başlıq daxil edilməlidir',
            'description.required' => 'Açıqlama daxil edilməlidir',
            'text.required' => 'Məzmun daxil edilməlidir',
            'category_id.required' => 'Kateqoriya daxil edilməlidir',
            'title.max' => 'Başlıq 255 simvoldan artıq ola bilməz',
            'description.max' => 'Açıqlama 255 simvoldan artıq ola bilməz',
            'text.max' => 'Məzmun 255 simvoldan artıq ola bilməz',
            'image.image' => 'Şəkil şəkil olmalıdır.',
            'image.mimes' => 'Şəkil bu fayl tiplərindən biri olmalıdır: jpeg, png, jpg, gif, svg.',
            'image.max' => 'Şəkil ölçüsü 2MB-dan çox ola bilməz.'
        ];
    }
}
