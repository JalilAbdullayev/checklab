<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest {
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
        $required = 'required';
        return [
            'title' => $required . '|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'about' => $required,
        ];
    }

    public function messages(): array {
        $required = ' boş buraxıla bilməz.';
        return [
            'title.required' => 'Başlıq' . $required,
            'title.max' => 'Başlıq uzunluğu 255 simvoldan çox ola bilməz.',
            'about.required' => 'Mətn' . $required,
            'logo.image' => 'Şəkil şəkil olmalıdır.',
            'logo.mimes' => 'Şəkil bu fayl tiplərindən biri olmalıdır: jpeg, png, jpg, gif, svg.',
            'logo.max' => 'Şəkil ölçüsü 2MB-dan çox ola bilməz.'
        ];
    }
}
