<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Position::create([
            'name' => 'ADMINISTRATIVO I'
        ]);
        Position::create([
            'name' => 'ADMINISTRATIVO II'
        ]);
        Position::create([
            'name' => 'ADMINISTRATIVO III'
        ]);
        Position::create([
            'name' => 'ADMINISTRATIVO IV'
        ]);
        Position::create([
            'name' => 'PROFESIONAL I'
        ]);
        Position::create([
            'name' => 'PROFESIONAL II'
        ]);
        Position::create([
            'name' => 'PROFESIONAL III'
        ]);
        Position::create([
            'name' => 'PROFESIONAL IV'
        ]);
    }
}
