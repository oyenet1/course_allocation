<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    public $departments = array(
        ['name' => 'Animal Science'],
        ['name' => 'Crop Science'],
        ['name' => 'Soil Science'],
        ['name' => 'Computer Science'],
        ['name' => 'Educational Management'],
        ['name' => 'Science and Environmental Education'],
        ['name' => 'Chemical Engineering'],
        ['name' => 'Civil Engineering'],
        ['name' => 'Mechanical Engineering'],
        ['name' => 'Electrical/Electronic Engineering'],
        ['name' => 'Public Law'],
        ['name' => 'Accounting'],
        ['name' => 'Business Administration'],
        ['name' => 'Public Administration'],
        ['name' => 'Mathematics'],
    );
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->departments as $department) {
            Department::create($department);
        }
    }
}