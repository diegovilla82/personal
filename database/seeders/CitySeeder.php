<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::create([
            'name' => 'Resistencia'
        ]);
        City::create([
            'name' => 'Saenz Peña'
        ]);
        City::create([
            'name' => 'Villa Angela'
        ]);
        City::create([
            'name' => 'Saenz Peña'
        ]);
        City::create([
            'name' => 'San Martín'
        ]);
        City::create([
            'name' => 'Quitilipi'
        ]);
        City::create([
            'name' => 'Gancedo'
        ]);
        City::create([
            'name' => 'Corrientes'
        ]);
        City::create([
            'name' => 'Puerto Tirol'
        ]);
        City::create([
            'name' => 'San Bernardo'
        ]);
        City::create([
            'name' => 'Fontana'
        ]);
        City::create([
            'name' => 'Barranqueras'
        ]);
        City::create([
            'name' => 'Basail'
        ]);
        City::create([
            'name' => 'Puerto Vilelas'
        ]);
    }
}
