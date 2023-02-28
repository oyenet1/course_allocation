<?php

namespace App\Models;

use App\Traits\HasManyAllocation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory, HasManyAllocation;
    protected $guarded = [];

    function level()
    {
        return $this->belongsTo(Level::class);
    }
}