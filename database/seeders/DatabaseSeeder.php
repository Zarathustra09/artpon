<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Hanna Admin',
            'email' => 'hannaharpon1234567@gmail.com',
            'password'=> Hash::make('Test@123'),
            'role' => 1,
        ]);

        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'customer@example.com',
            'password'=> Hash::make('Test@123'),
            'role' => 0,
        ]);

        $this->call([
            ServiceSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
