<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Movie;
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
        Movie::factory(10)->create()->each(function ($movie) {
            $artists = Artist::factory(10)->create();
            $movie->artists()->saveMany($artists);
        });
    }
}
