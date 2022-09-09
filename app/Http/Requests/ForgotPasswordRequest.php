<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ForgotPasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "email" => "required|email|exists:users,email"
        ];
    }

    public function messages()
    {
        return [
            "email.required" => "You need to put your account e-mail here",
            "email.email" => "You need to put a valid e-mail here",
            "email.exists" => "This e-mail doesn't exists in your database"
        ];
    }
}
