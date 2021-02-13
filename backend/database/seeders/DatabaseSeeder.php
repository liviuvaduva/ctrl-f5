<?php

namespace Database\Seeders;

use App\Models\Artists;
use App\Models\Movies;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Movies::factory(10)->create()->each(function ($movie) {
            $artists = Artists::factory(10)->create();
            $movie->artists()->saveMany($artists);
        });
    }
}
