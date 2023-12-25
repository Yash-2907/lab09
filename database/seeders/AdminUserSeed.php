<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeed extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role_id' => 1,
            'password' => Hash::make('Nagpur2023!'),
        ]);
        User::create([
            'name' => 'Tushar Joshi',
            'email' => 'tushar@gmail.com',
            'role_id' => 2,
            'password' => Hash::make('Nagpur2023!'),
        ]);
    }
}

class AdminRoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create([
            'name' => 'Administrator'
        ]);
        Role::create([
            'name' => 'Author'
        ]);
    }
}
