<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
        return
            [
                "name" => ['required', 'min:3', 'max:30'],
                "last_name" => ['required', 'min:3', 'max:50'],
                "email" => ['required', 'email', 'min:3', 'max:80', 'unique:users'],
                "password" => ['required', 'min:6'],
                "password_confirmation" => ['required', 'same:password']
            ];
    }

    public function messages(): array
    {
        return [
            "name.required" => "The name field must be filled",
            "name.min" => "The name field must have at least 3 characters",
            "name.max" => "The name field must have less than 30 characters",

            "last_name.required" => "The last name field must be filled",
            "last_name.min" => "The last name field must have at least 3 characters",
            "last_name.max" => "The last name field must have less than 50 characters",

            "email.required" => "The email address field must be filled",
            "email.email" => "The email address field must contain a valid email",
            "email.min" => "The email address field must have at least 3 characters",
            "email.max" => "The email address field must have less than 80 characters",
            "email.unique" => "The email address insert already has been registered",

            "password.required" => "The password must contain at least 6 characters",
            "password.min" => "The password must contain at least 6 characters",

            "password_confirmation.required" => "The password and the confirmation must match",
            "password_confirmation.min" => "The password and the confirmation must match"
        ];
    }
}
