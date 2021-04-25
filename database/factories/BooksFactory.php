<?php

namespace Database\Factories;

use App\Models\books;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class BooksFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = books::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name' => $this->faker->name,
            'publisher' => $this->faker->name,
            'series' => $this->faker->name,
            'stock' => Str::random(10),
            'price' => Str::random(10),
            'total_issued' => Str::random(10),

        ];
    }
}