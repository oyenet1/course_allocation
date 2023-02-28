<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LevelSeeder extends Seeder
{
    public $levels = array(
        ['name' => 100],
        ['name' => 200],
        ['name' => 300],
        ['name' => 400],
        ['name' => 500],
        ['name' => 600]
    );
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->levels as $level) {
            Level::create($level);
        }
    }
}