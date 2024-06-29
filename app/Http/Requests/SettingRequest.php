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
            'description' => $rule,
            'author' => $rule,
            'keywords' => $rule,
            'logo' => $image,
            'favicon' => $image,
        ];
    }

    public function messages() {
        $required = 'The :attribute field is required.';
        $max = 'The :attribute may not be greater than :max characters.';
        $image = 'The :attribute must be an image.';
        $mimes = 'The :attribute must be a file of type: jpeg, png, jpg, gif, svg.';
        $imageMax = 'The :attribute may not be greater than :max kilobytes.';
        return [
            'title.required' => $required,
            'title.max' => $max,
            'description.required' => $required,
            'description.max' => $max,
            'author.required' => $required,
            'author.max' => $max,
            'keywords.required' => $required,
            'keywords.max' => $max,
            'favicon.image' => $image,
            'favicon.mimes' => $mimes,
            'favicon.max' => $imageMax,
            'logo.image' => $image,
            'logo.mimes' => $mimes,
            'logo.max' => $imageMax

        ];
    }
}
