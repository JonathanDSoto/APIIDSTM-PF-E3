<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UpdateUserRequest extends FormRequest
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
        $username = $this->user->username;
        $email = $this->user->email;
        return [
            "username" => [ 'sometimes', 'required', 'string', Rule::unique('users')->ignore($username, 'username') ],
            "password" => [ 'sometimes', 'required', 'string', Password::min(8)->letters()->mixedCase() ],
            "email" => [ 'sometimes', 'required', 'string', 'email', Rule::unique('users')->ignore($email, 'email') ],
            "first_name" => [ 'sometimes', 'required', 'string', ],
            "last_name" => [ 'sometimes', 'required', 'string', ],
            "date_of_birth" => [ 'sometimes', 'required', 'date']
        ];
    }
}
