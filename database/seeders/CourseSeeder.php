<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public $courses = array(
        ['level_id' => 1, 'title' => 'Algebra and Computation', 'code' => 'MAT 101', 'unit' => 3],
        ['level_id' => 1, 'title' => 'Use of English I', 'code' => 'GSS 101', 'unit' => 2],
        ['level_id' => 1, 'title' => 'Nigerian People and Culture', 'code' => 'GSS 107', 'unit' => 2],
        ['level_id' => 1, 'title' => 'Physics I', 'code' => 'PHY 101', 'unit' => 3],
        ['level_id' => 1, 'title' => 'Nature of Environmental Sciences', 'code' => 'ENV 111', 'unit' => 2],
        ['level_id' => 1, 'title' => 'Introduction to Architecture II', 'code' => 'ARC 114', 'unit' => 2],
        ['level_id' => 1, 'title' => 'Basic Elements of Planning', 'code' => 'ARC 132', 'unit' => 2],
        ['level_id' => 2, 'title' => 'Computer Programming', 'code' => 'CSE 101', 'unit' => 2],
        ['level_id' => 2, 'title' => 'Basic Surveying I', 'code' => 'SVI 181', 'unit' => 3],
        ['level_id' => 2, 'title' => 'Architectural Design I', 'code' => 'ARC 211', 'unit' => 4],
        ['level_id' => 2, 'title' => 'Building Materials I', 'code' => 'ARC 243', 'unit' => 2],
        ['level_id' => 2, 'title' => 'Quantity Techniques', 'code' => 'GME 232', 'unit' => 1],
        ['level_id' => 3, 'title' => 'Introduction to Entrepreneurial Skills', 'code' => 'GES 301', 'unit' => 2],
        ['level_id' => 3, 'title' => 'Professional Practice II', 'code' => 'ASE 305', 'unit' => 3],
        ['level_id' => 3, 'title' => 'Philosophy of Education', 'code' => 'CEF 304', 'unit' => 3],
        ['level_id' => 3, 'title' => 'Measurement & Evaluation', 'code' => 'GCE 302', 'unit' => 3],
        ['level_id' => 3, 'title' => 'Research Methods in Education', 'code' => 'STE 302', 'unit' => 3],
        ['level_id' => 3, 'title' => 'Applied Ecology', 'code' => 'BIO 303', 'unit' => 3],
        ['level_id' => 3, 'title' => 'Taxonomy of Higher Plants and Animals', 'code' => 'BIO 309', 'unit' => 3],
        ['level_id' => 4, 'title' => 'Professional Practice III', 'code' => 'ASE 405', 'unit' => 3],
        ['level_id' => 4, 'title' => 'Developmental Psychology', 'code' => 'GCE 406', 'unit' => 3],
        ['level_id' => 4, 'title' => 'Educational Administration', 'code' => 'EME 411', 'unit' => 3],
        ['level_id' => 4, 'title' => 'Comparative Education', 'code' => 'CEF 407', 'unit' => 3],
        ['level_id' => 4, 'title' => 'Origin, phylogeny and Biology of Insects', 'code' => 'ZOO 420', 'unit' => 3],
    );
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->courses as $course) {
            Course::create($course);
        }
    }
}