<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User dengan usia >= 18 tahun (bisa akses)
        User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => Hash::make('password'),
            'age' => 20,
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'password' => Hash::make('password'),
            'age' => 22,
            'role' => 'user',
        ]);

        // User dengan usia < 18 tahun (tidak bisa akses)
        User::create([
            'name' => 'Bob Young',
            'email' => 'bob@example.com',
            'password' => Hash::make('password'),
            'age' => 16,
            'role' => 'user',
        ]);

        // User tanpa usia (tidak bisa akses)
        User::create([
            'name' => 'Alex Unknown',
            'email' => 'alex@example.com',
            'password' => Hash::make('password'),
            'age' => null,
            'role' => 'guest',
        ]);
    }
}