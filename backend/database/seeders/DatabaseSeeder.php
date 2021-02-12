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
        // \App\Models\User::factory(10)->create();
        Artists::factory(10)->create();
        Movies::factory(10)->create();
    }
}
