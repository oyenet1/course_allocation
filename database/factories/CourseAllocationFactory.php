<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourseAllocation>
 */
class CourseAllocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => random_int(2, 10),
            'course_id' => random_int(1, 10),
            'semester_id' => random_int(1, 2),
            // 'date_allocated' => now()
        ];
    }
}