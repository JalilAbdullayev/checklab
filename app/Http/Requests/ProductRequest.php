<?php

namespace App\Http\Requests;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array {
        $rule = 'required|max:255';
        return [
            'title' => $rule,
            'description' => $rule,
            'brand' => $rule,
            'form' => $rule,
            'color' => $rule,
            'price' => 'required|numeric|min:0',
            'discount' => 'min:0|max:100',
            'quantity' => 'required|numeric|min:0',
            'text' => 'required',
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
            'brand.required' => 'Brend' . $required,
            'brand.max' => 'Brend' . $max,
            'form.required' => 'Forma' . $required,
            'form.max' => 'Forma' . $max,
            'color.required' => 'Rəng' . $required,
            'color.max' => 'Rəng' . $max,
            'price.required' => 'Qiymət' . $required,
            'price.min' => 'Qiymət' . $min,
            'price.numeric' => 'Qiymət' . $numeric,
            'discount.min' => 'Endirim' . $min,
            'discount.max' => 'Endirim 100-dan artıq ola bilməz',
            'quantity.required' => 'Say' . $required,
            'quantity.min' => 'Say' . $min,
            'quantity.numeric' => 'Say' . $numeric,
            'text.required' => 'Məzmun' . $required,
            'image.image' => 'Şəkil şəkil olmalıdır.',
            'image.mimes' => 'Şəkil bu fayl tiplərindən biri olmalıdır: jpeg, png, jpg, gif, svg.',
            'image.max' => 'Şəkil ölçüsü 2MB-dan çox ola bilməz.'
        ];
    }
}
