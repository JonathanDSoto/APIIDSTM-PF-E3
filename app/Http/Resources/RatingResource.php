<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RatingResource extends JsonResource
{
    public $load_user_data = true;

    public function __construct($res, $load_user_data = true) {
        parent::__construct($res);
        $this->load_user_data = $load_user_data;
    }

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->load_user_data ? $this->user : $this->user_id,
            'nonogram_id' => $this->nonogram_id,
        ];
    }
}
