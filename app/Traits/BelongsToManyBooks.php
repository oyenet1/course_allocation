<?php

namespace App\Traits;

use App\Models\Book;


trait BelongsToManyBooks
{
    function books()
    {
        return $this->belongsToMany(Book::class);
    }

    function book()
    {
        return $this->belongsTo(Book::class);
    }
}