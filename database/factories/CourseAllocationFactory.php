<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourseAllocation>
 */
class CourseAllocationFactory extends Factory
{
    public $departments = [
        "Animal Science" => "Animal Science",
        "Crop Science" => "Crop Science",
        "Soil Science" => "Soil Science",
        "Computer Science" => "Computer Science",
        "Educational Management" => "Educational Management",
        "Science and Environmental Education" => "Science and Environmental Education",
        "Chemical Engineering" => "Chemical Engineering",
        "Civil Engineering" => "Civil Engineering",
        "Mechanical Engineering" => "Mechanical Engineering",
        "Electrical/Electronic Engineering" => "Electrical/Electronic Engineering",
        "Public Law" => "Public Law",
        "Accounting" => "Accounting",
        "Business Administration" => "Business Administration",
        "Public Administration" => "Public Administration",
        "Mathematics" => "Mathematics"
    ];
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
            'departments' => json_encode([$this->departments[array_rand($this->departments)] => $this->departments[array_rand($this->departments)]]),
        ];
    }
}