<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateNonogramRequest extends FormRequest
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
        $slug = $this->nonogram->slug;
        $width = $this['width'] ?? $this->nonogram->width;
        $height = $this['height'] ?? $this->nonogram->height;
        return [
            'slug' => [ 'sometimes', 'required', 'string', Rule::unique('nonograms')->ignore($slug, 'slug') ],
            'name' => [ 'sometimes', 'required', 'string' ],
            'colors' => [ 'sometimes', 'required', 'array' ],
            'colors.*' => [ 'required', 'string', 'regex:/^(rgb\((\s*([0-1]?[0-9]?[0-9]?|2[0-4][0-9]|25[0-5])\,){2}(\s*([0-1]?[0-9]?[0-9]?|2[0-4][0-9]|25[0-5]))\s*\))|(rgba\((\s*([0-1]?[0-9]?[0-9]?|2[0-4][0-9]|25[0-5])\,){3}\s*([0-1]?[0-9]?[0-9]?|2[0-4][0-9]|25[0-5])\s*\))|(#[0-9A-Fa-f]{6})|(#[0-9A-Fa-f]{3})$/' ],
            'width' => [ 'sometimes', 'required', 'integer' ],
            'height' => [ 'sometimes', 'required', 'integer' ],
            'data' => [ 'sometimes', 'required', 'array', filter_var($width, FILTER_VALIDATE_INT) ? 'size:' . $width  : ''],
            'data.*' => [ 'required', 'array', filter_var($height, FILTER_VALIDATE_INT) ? 'size:' . $height : '' ],
            'data.*.*' => [ 'required', 'integer' ],
        ];
    }
    
    public function passedValidation()
    {
        $this['data'] && ($this['data'] = json_encode($this['data']));
        $this['colors'] && ($this['colors'] = json_encode($this['colors']));
    }
}
