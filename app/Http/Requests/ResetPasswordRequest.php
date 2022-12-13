<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8', 'confirmed']
        ];
    }

    public function messages(): array
    {
        return [
            "token.required" => "The token is required",

            "email.required" => "The email input is required",
            "email.email" => "A valid email must be put in here",

            "password" => "The password input is required",
            "password.min" => "The password input must have at least 8 characters",
            "password.confirmed" => "The password input must match with the confirm password input"
        ];
    }
}
