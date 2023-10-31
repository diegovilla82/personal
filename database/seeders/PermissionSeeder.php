<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create([
            'name' => 'listar_personal',
            'description' => 'Lista todi el personal.'
        ]);
        Permission::create([
            'name' => 'listar_roles',
            'description' => 'Lista todos los roles.'
        ]);
        Permission::create([
            'name' => 'listar_permisos',
            'description' => 'Lista todos los permisos.'
        ]);
        Permission::create([
            'name' => 'listar_licencias',
            'description' => 'Lista todas las licencias.'
        ]);
    }
}
