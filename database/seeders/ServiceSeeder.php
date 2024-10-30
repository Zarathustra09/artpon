<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            'Styrofoam arts',
            'Paintings',
            'Props',
            'Costumes',
            'Backdrops'
        ];

        foreach ($services as $service) {
            Service::create(['name' => $service]);
        }
    }
}
