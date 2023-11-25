<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NonogramResource extends JsonResource
{
    protected bool $include_category;

    public function __construct($res, $include_category = false) {
        parent::__construct($res);
        $this->include_category = $include_category;
    }

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'slug' => $this->slug,
            'name' => $this->name,
            'width' => $this->width,
            'height' => $this->height,
            'colors' => $this->colors,
            'data' => $this->data,
            ($this->include_category ? 'category' : 'category_id') => $this->include_category ? new CategoryResource($this->category) : $this->category_id,
            //'created_at' => $this->created_at,
            //'updated_at' => $this->updated_at,
        ];
    }
}
