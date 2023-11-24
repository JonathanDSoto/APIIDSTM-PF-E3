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
        $colors = $this['colors'];
        return [
            'slug' => [ 'required', 'string', 'unique:nonograms' ],
            'name' => [ 'required', 'string' ],
            'colors' => [ 'required', 'array' ],
            'colors.*' => [ 'required', 'regex:/^(rgb\((\s*([0-1]?[0-9]?[0-9]?|2[0-4][0-9]|25[0-5])\,){2}(\s*([0-1]?[0-9]?[0-9]?|2[0-4][0-9]|25[0-5]))\s*\))|(rgba\((\s*([0-1]?[0-9]?[0-9]?|2[0-4][0-9]|25[0-5])\,){3}\s*([0-1]?[0-9]?[0-9]?|2[0-4][0-9]|25[0-5])\s*\))|(#[0-9A-Fa-f]{6})|(#[0-9A-Fa-f]{3})$/' ],
            'width' => [ 'required', 'integer' ],
            'height' => [ 'required', 'integer' ],
            'data' => [ 'required', 'array', 'size:' . $this['height'] ?? -1 ],
            'data.*' => [ 'required', 'array', 'size:' . $this['width'] ?? -1 ],
            'data.*.*' => [ 'required', 'integer', 'min:0', is_array($colors) ? 'max:' . (count($colors) - 1) : ''],
        ];
    }
    
    public function passedValidation()
    {
        $this['data'] = json_encode($this['data']);
        $this['colors'] = json_encode($this['colors']);
    }
}
