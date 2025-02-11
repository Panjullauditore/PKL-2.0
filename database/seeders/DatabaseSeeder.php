<?php

namespace Database\Seeders;

use App\Models\places;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            countriesSeeder::class,
            TagsSeeder::class,
            CulinarySeeder::class,
            placesSeeder::class,
            places_tagSeeder::class,
        ]);
    }
}