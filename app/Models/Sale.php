<?php

namespace App\Models;

use App\Traits\BelongsToManyBooks;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory, BelongsToManyBooks;
    protected $guarded = [];
}