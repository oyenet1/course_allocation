<?php

namespace Database\Seeders;

use App\Models\CourseAllocation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseAllocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseAllocation::factory(15)->create();
    }
}