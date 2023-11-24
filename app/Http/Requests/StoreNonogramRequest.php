<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNonogramRequest extends FormRequest
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
            'slug' => [ 'required', 'string', 'unique:nonograms' ],
            'name' => [ 'required', 'string' ],
            'colors' => [ 'required', 'array' ],
            'colors.*' => [ 'required', 'hex_color' ],
            'width' => [ 'required', 'integer' ],
            'height' => [ 'required', 'integer' ],
            'data' => [ 'required', 'array', 'size:' . $this['height'] ?? -1 ],
            'data.*' => [ 'required', 'array', 'size:' . $this['width'] ?? -1 ],
            'data.*.*' => [ 'required', 'integer' ],
        ];
    }
    
    public function passedValidation()
    {
        $this['data'] = json_encode($this['data']);
        $this['colors'] = json_encode($this['colors']);
    }
}
