<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'super admin',
            'guard_name' => 'web'
        ]);
        Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);
        Role::create([
            'name' => 'user',
            'guard_name' => 'web'
        ]);

        $user = User::create([
            'name' => 'Diego Villarroel',
            'username' => 'dvillarroel',
            'dni' => '29440676',
            'email' => 'dvillarroel82@gmail.com',
            'password' => Hash::make('DieVilla'),
        ]);
        $user->assignRole('super admin');
    }
}
