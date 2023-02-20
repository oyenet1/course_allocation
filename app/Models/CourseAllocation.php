<?php

namespace App\Models;

use App\Traits\BelongsToUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseAllocation extends Model
{
    use HasFactory, BelongsToUser;
    protected $guarded = [];

    protected $casts = [
        'departments' => 'array',
    ];

    function semester()
    {
        return $this->belongsTo(Semester::class);
    }
    function course()
    {
        return $this->belongsTo(Course::class);
    }
}