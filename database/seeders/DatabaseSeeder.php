<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Common User',
            'email' => 'user@gmail.com',
            'password' => '12345678',
            'type' => 0,
        ]);
        User::factory()->create([
            'name' => 'Common Admin',
            'email' => 'admin@gmail.com',
            'password' => '12345678',
            'type' => 1,
        ]);
    }
}
