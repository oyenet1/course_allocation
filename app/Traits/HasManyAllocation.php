<?php

namespace App\Traits;

use App\Models\CourseAllocation;

trait HasManyAllocation
{
  function allocations()
  {
    return $this->hasMany(CourseAllocation::class);
  }
}