<?php

namespace App\Models;

use App\Traits\BelongsToUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $casts = [
        'published_at' => 'date',
    ];

    use HasFactory, BelongsToUser;
    protected $guarded = [];

    function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}