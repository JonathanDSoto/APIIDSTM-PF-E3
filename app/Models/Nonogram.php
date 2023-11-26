<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Nonogram extends Model
{
    use HasFactory;
    
    public $fillable = [
        'slug',
        'name',
        'data',
        'colors',
        'width',
        'height',
        'category_id',
    ];

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    protected $casts = [
        'colors' => 'array',
        'data' => 'array',
    ];
}