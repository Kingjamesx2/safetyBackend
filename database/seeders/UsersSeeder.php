<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Users::create([
            'name'=>'James',
            'email' => 'jaafaber@gmail.com',
            'password' => Hash::make('password'), // Hash the password using Bcrypt
            'role_id' => 1
        ]);

         Users::create([
            'name'=>'David',
            'email' => 'jaaf@gmail.com',
            'password' => Hash::make('password'), // Hash the password using Bcrypt
            'role_id' => 2
        ]);
        
        Users::create([
            'name'=>'Andrew',
            'email' => 'jaber@gmail.com',
            'password' => Hash::make('password'), // Hash the password using Bcrypt
            'role_id' => 3
        ]);
        
        Users::create([
            'name'=>'Beverly',
            'email' => 'jfabe@gmail.com',
            'password' => Hash::make('password'), // Hash the password using Bcrypt
            'role_id' => 4
        ]);
    }
}