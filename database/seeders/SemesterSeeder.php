<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    public $semesters = array(
        ['name' => 'first semester', 'code' => 1],
        ['name' => 'second semester', 'code' => 2],
    );
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->semesters as $semester) {
            Semester::create($semester);
        }

    }
}