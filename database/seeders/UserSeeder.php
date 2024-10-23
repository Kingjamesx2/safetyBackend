<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'James',
            'email' => 'jaafaber@gmail.com',
            'password' => Hash::make('password'), // Hash the password using Bcrypt
            'role_id' => 1
        ]);

         User::create([
            'name'=>'David',
            'email' => 'jaaf@gmail.com',
            'password' => Hash::make('password'), // Hash the password using Bcrypt
            'role_id' => 2
        ]);
        
        User::create([
            'name'=>'Andrew',
            'email' => 'jaber@gmail.com',
            'password' => Hash::make('password'), // Hash the password using Bcrypt
            'role_id' => 3
        ]);
        
        User::create([
            'name'=>'Beverly',
            'email' => 'jfabe@gmail.com',
            'password' => Hash::make('password'), // Hash the password using Bcrypt
            'role_id' => 4
        ]);
    }
}