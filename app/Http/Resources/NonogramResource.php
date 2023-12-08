<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NonogramResource extends JsonResource
{
    protected bool $include_relations;

    public function __construct($res, $i = null, $include_relations = false) {
        parent::__construct($res);
        $this->include_relations = $include_relations;
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
            ($this->include_relations ? 'category' : 'category_id') => $this->include_relations ? new CategoryResource($this->category) : $this->category_id,
            ($this->include_relations ? 'difficulty' : 'difficulty_id') => $this->include_relations ? new DifficultyResource($this->difficulty) : $this->difficulty_id,
            'tags' => $this->tags,
            //'created_at' => $this->created_at,
            //'updated_at' => $this->updated_at,
        ];
    }
}
