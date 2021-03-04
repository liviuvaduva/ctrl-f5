<?php

namespace Database\Factories;

use Exception;
use App\Models\Movie;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{

    use WithFaker;

    private const MOVIE_IMAGES = 'http://localhost:8080/images/movies-images/';

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

    protected string $model = Movie::class;

    private array $images = ['forest-gump.jpg', 'joker.jpg', 'space-force.jpg'];

    /**
     * Define the model's default state.
     *
     * @return array
     * @throws Exception
     */
    public function definition(): array
    {
        return [
            'status' => $this->faker->numberBetween(1, 2),
            'name' => $this->faker->sentence,
            'rating' => $this->faker->numberBetween(1, 10),
            'description' => $this->faker->paragraph,
            'image' => '' . self::MOVIE_IMAGES . '' . $this->images[random_int(0, count($this->images) - 1)],
        ];
    }
}
