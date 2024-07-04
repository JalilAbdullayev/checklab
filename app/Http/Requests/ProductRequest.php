<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest {
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
            'title' => 'max:255',
            'description' => 'max:255',
            'price' => 'required|numeric|min:0',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages(): array {
        $required = ' daxil edilməlidir.';
        $max = ' :max simvoldan artıq ola bilməz.';
        $min = ' :min-dan az ola bilməz.';
        $numeric = ' rəqəm olmalıdır.';
        return [
            'title.required' => 'Ad' . $required,
            'title.max' => 'Ad' . $max,
            'description.required' => 'Açıqlama' . $required,
            'description.max' => 'Açıqlama' . $max,
            'price.required' => 'Qiymət' . $required,
            'price.min' => 'Qiymət' . $min,
            'price.numeric' => 'Qiymət' . $numeric,
            'image.image' => 'Şəkil şəkil olmalıdır.',
            'image.mimes' => 'Şəkil bu fayl tiplərindən biri olmalıdır: jpeg, png, jpg, gif, svg.',
            'image.max' => 'Şəkil ölçüsü 2MB-dan çox ola bilməz.'
        ];
    }
}
