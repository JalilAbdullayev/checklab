<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest {
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
            'phone' => 'required|max:14',
            'email' => $rule,
            'address' => $rule,
            'facebook' => $rule,
            'instagram' => $rule,
            'whatsapp' => $rule,
            'work_hours' => $rule
        ];
    }

    public function messages(): array {
        $required = ' boş buraxıla bilməz.';
        $max = ' uzunluğu :max simvoldan çox ola bilməz.';
        return [
            'phone.required' => 'Telefon' . $required,
            'email.required' => 'E-mail' . $required,
            'address.required' => 'Ünvan' . $required,
            'facebook.required' => 'Facebook' . $required,
            'instagram.required' => 'Instagram' . $required,
            'whatsapp.required' => 'WhatsApp' . $required,
            'work_hours.required' => 'İş saatları' . $required,
            'phone.max' => 'Telefon' . $max,
            'email.max' => 'E-mail' . $max,
            'address.max' => 'Ünvan' . $max,
            'facebook.max' => 'Facebook link' . $max,
            'instagram.max' => 'Instagram link' . $max,
            'whatsapp.max' => 'WhatsApp link' . $max
        ];
    }
}
