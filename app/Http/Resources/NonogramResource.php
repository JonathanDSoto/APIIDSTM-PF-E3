<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NonogramResource extends JsonResource
{
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
            'colors' => json_decode($this->colors),
            'data' => json_decode($this->data),
            'category' => new CategoryResource($this->category)
            //'created_at' => $this->created_at,
            //'updated_at' => $this->updated_at,
        ];
    }
}
