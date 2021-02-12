<?php

namespace Database\Factories;

use App\Models\Artists;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

class ArtistsFactory extends Factory
{

    use WithFaker;

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected string $model = Artists::class;

    private array $titles = [
        'star',
        'writer',
        'director',
    ];

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => "{$this->faker->firstName} {$this->faker->lastName}",
            'title' => $this->titles[rand(0, count($this->titles) - 1)],
        ];
    }
}
