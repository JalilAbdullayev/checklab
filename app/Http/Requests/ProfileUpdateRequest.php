<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest {
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
        ];
    }

    public function messages() {
        $required = ' boş buraxıla bilməz.';
        $max = ' uzunluğu :max simvoldan çox ola bilməz.';
        return [
            'name.required' => 'Ad' . $required,
            'name.max' => 'Ad' . $max,
            'email.email' => 'Düzgün e-mail daxil edin.',
            'email.lowercase' => 'E-mailinizi kiçik hərflərlə daxil edin.',
            'email.unique' => 'E-mail artıq mövcuddur.',
            'email.max' => 'E-mail' . $max,
            'email.required' => 'E-mail' . $required,
        ];
    }
}
