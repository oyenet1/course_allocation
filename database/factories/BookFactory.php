<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $isBind = [true, false];
        $author = $this->faker->name;
        $filePath = public_path('storage/images');
        return [
            'title' => $this->faker->sentence(5),
            'author' => $author,
            'cover' => 'https://via.placeholder.com/240x400?text=' . $author,
            'quantity' => rand(1, 36),
            'isBind' => array_rand($isBind, 1),
        ];
    }
}
