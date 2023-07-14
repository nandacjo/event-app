<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\City;
use App\Models\Country;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $countries = [
            'Indonesia',
            'Malaysia',
            'United Kingdom',
            'Tahiland'
        ];

        for ($i=0; $i < count($countries); $i++) { 
            Country::create([
                'name' => $countries[$i],
            ]);
        }

        City::create(['country_id' => 1, 'name' => 'Aceh']);
        City::create(['country_id' => 1, 'name' => 'Medan']);
        City::create(['country_id' => 1, 'name' => 'Palembang']);
        City::create(['country_id' => 2, 'name' => 'Johor']);
        City::create(['country_id' => 2, 'name' => 'Kuala Lumpur']);
        City::create(['country_id' => 2, 'name' => 'Kuala']);

        Tag::create(['name' => 'Larvel', 'slug' => 'laravel']);
        Tag::create(['name' => 'Vue JS', 'slug' => 'vue-js']);
        Tag::create(['name' => 'Livewire', 'slug' => 'livewire']);
    }
}
