<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

class MovieFactory extends Factory
{

    use WithFaker;

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected string $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'status' => $this->faker->numberBetween(1, 2),
            'name' => $this->faker->sentence,
            'rating' => $this->faker->numberBetween(1, 10),
            'description' => $this->faker->paragraph,
            'image'=>$this->faker->imageUrl(),
        ];
    }
}