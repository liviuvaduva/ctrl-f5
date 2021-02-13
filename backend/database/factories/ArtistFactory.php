<?php

namespace Database\Factories;

use App\Models\Artist;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

class ArtistFactory extends Factory
{

    use WithFaker;

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected string $model = Artist::class;

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
