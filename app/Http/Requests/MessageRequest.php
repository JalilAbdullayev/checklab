<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest {
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
        return [
            'name' => $rule,
            'email' => $rule,
            'subject' => $rule,
            'message' => 'required'
        ];
    }

    public function messages(): array {
        $required = ' boş buraxıla bilməz.';
        $max = ' uzunluğu :max simvoldan çox ola bilməz.';
        return [
            'name.required' => 'Ad' . $required,
            'email.required' => 'E-mail' . $required,
            'subject.required' => 'Mövzu' . $required,
            'message.required' => 'Mesaj' . $required,
            'name.max' => 'Ad' . $max,
            'email.max' => 'E-mail' . $max,
            'subject.max' => 'Mövzu' . $max
        ];
    }
}
