<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
                "name" => ['required', 'min:3', 'max:100', 'unique:movies'],
                "rating" => ['required', 'integer', 'min:1', 'max:10'],
                "date_watched" => ['required']
            ];
    }

    public function messages(): array
    {
        return [
            "name.required" => "The name field must be filled",
            "name.min" => "The name of the movie must have at least 3 characters",
            "name.max" => "The name of the movie must have less than 100 characters",
            "name.unique" => "This movie is already registered",

            "rating.required" => "The rating field must be filled",
            "rating.integer" => "The movie rating must be a value between 1 and 10",
            "rating.min" => "The movie rating must be a value between 1 and 10",
            "rating.max" => "The movie rating must be a value between 1 and 10",

            "date_watched.required" => "The date watched field must be filled"
        ];
    }
}
