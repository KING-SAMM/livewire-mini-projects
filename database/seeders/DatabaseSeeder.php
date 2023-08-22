<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Country;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $continents = [
            ['id' => 1, 'name' => 'Africa',],
            ['id' => 2, 'name' => 'Asia',],
            ['id' => 3, 'name' => 'Europe',],
            ['id' => 4, 'name' => 'North America',],
            ['id' => 5, 'name' => 'South America',],
        ];

        foreach ($continents as $continent) {
            
            \App\Models\Continent::factory()->create($continent)
                ->each(function($c) {
                    $c->countries()->saveMany(Country::factory(10)->make());
                });
        }
    }
}
