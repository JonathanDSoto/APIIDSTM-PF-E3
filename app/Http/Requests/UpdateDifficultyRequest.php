<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateDifficultyRequest extends FormRequest
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
        $slug = $this->difficulty->slug;
        return [
            'slug' => [ 'sometimes', 'required', 'string', Rule::unique('difficulties')->ignore($slug, 'slug') ],
            'name' => [ 'sometimes', 'required', 'string' ],
        ];
    }
}
