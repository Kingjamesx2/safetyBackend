<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Roles::create([
            'roles' => 'Super Admin',
            'description' => 'Super Administrator role',
        ]);

        Roles::create([
            'roles' => 'Admin',
            'description' => 'Admin role',
        ]);

        Roles::create([
            'roles' => 'Staff',
            'description' => 'Staff role',
        ]);

        Roles::create([
            'roles' => 'Students',
            'description' => 'Students role',
        ]);


    }
}