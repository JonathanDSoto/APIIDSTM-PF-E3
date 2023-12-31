<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class SignUpRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "username" => [ 'required', 'string', 'unique:users' ],
            "password" => [ 'required', 'string', Password::min(8)->letters()->mixedCase() ],
            "email" => [ 'required', 'string', 'email', 'unique:users' ],
            "first_name" => [ 'required', 'string', ],
            "last_name" => [ 'sometimes', 'required', 'string', ],
            "date_of_birth" => [ 'required', 'date'],
            "terms" => [ 'accepted' ]
        ];
    }
}
