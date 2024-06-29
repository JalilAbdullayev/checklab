<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest {
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
        $rule = 'required|max:255';
        $image = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        return [
            'title' => $rule,
            'description' => 'required',
            'author' => $rule,
            'keywords' => $rule,
            'logo' => $image,
            'favicon' => $image,
        ];
    }

    public function messages() {
        $required = ' boş buraxıla bilməz.';
        $max = ' uzunluğu :max simvoldan çox ola bilməz.';
        $image = ' şəkil olmalıdır.';
        $mimes = ' bu fayl tiplərindən biri olmalıdır: jpeg, png, jpg, gif, svg.';
        $imageMax = ' ölçüsü 2MB-dan çox ola bilməz.';
        return [
            'title.required' => 'Başlıq' . $required,
            'title.max' => 'Başlıq' . $max,
            'description.required' => 'Haqqımızda' . $required,
            'author.required' => 'Müəllif adı' . $required,
            'author.max' => 'Müəllif adının' . $max,
            'keywords.required' => 'Açar sözlər' . $required,
            'keywords.max' => 'Açar sözlərin' . $max,
            'favicon.image' => 'Favicon' . $image,
            'favicon.mimes' => 'Favicon' . $mimes,
            'favicon.max' => 'Favicon' . $imageMax,
            'logo.image' => 'Loqo' . $image,
            'logo.mimes' => 'Loqo' . $mimes,
            'logo.max' => 'Loqo' . $imageMax

        ];
    }
}
