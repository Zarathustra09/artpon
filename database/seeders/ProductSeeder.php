<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Service;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'Customized Styrofoam Sculptures', 'price' => 10000, 'service' => 'Styrofoam arts', 'stock' => 10],
            ['name' => 'Decorative Styrofoam Art', 'price' => 3500, 'service' => 'Styrofoam arts', 'stock' => 15],
            ['name' => 'Themed Styrofoam Figures', 'price' => 6000, 'service' => 'Styrofoam arts', 'stock' => 8],
            ['name' => 'Event-Specific Styrofoam Decorations', 'price' => 5000, 'service' => 'Styrofoam arts', 'stock' => 12],
            ['name' => 'Landscape Paintings', 'price' => 4500, 'service' => 'Paintings', 'stock' => 20],
            ['name' => 'Portrait Paintings', 'price' => 6000, 'service' => 'Paintings', 'stock' => 10],
            ['name' => 'Abstract Paintings', 'price' => 4000, 'service' => 'Paintings', 'stock' => 15],
            ['name' => 'Custom Commissioned Paintings', 'price' => 12000, 'service' => 'Paintings', 'stock' => 5],
            ['name' => 'Themed Event Props', 'price' => 6000, 'service' => 'Props', 'stock' => 10],
            ['name' => 'Stage Props', 'price' => 8000, 'service' => 'Props', 'stock' => 8],
            ['name' => 'Photo Booth Props', 'price' => 1500, 'service' => 'Props', 'stock' => 25],
            ['name' => 'Custom Props', 'price' => 2500, 'service' => 'Props', 'stock' => 15],
            ['name' => 'Themed Costumes', 'price' => 3500, 'service' => 'Costumes', 'stock' => 20],
            ['name' => 'Custom Costumes', 'price' => 5000, 'service' => 'Costumes', 'stock' => 10],
            ['name' => 'Costume Accessories', 'price' => 1500, 'service' => 'Costumes', 'stock' => 30],
            ['name' => 'Event-Specific Costumes', 'price' => 4000, 'service' => 'Costumes', 'stock' => 15],
            ['name' => 'Wedding Backdrops', 'price' => 8000, 'service' => 'Backdrops', 'stock' => 5],
            ['name' => 'Birthday Party Backdrops', 'price' => 5000, 'service' => 'Backdrops', 'stock' => 10],
            ['name' => 'Photo Studio Backdrops', 'price' => 4000, 'service' => 'Backdrops', 'stock' => 8],
            ['name' => 'Customizable Event Backdrops', 'price' => 7500, 'service' => 'Backdrops', 'stock' => 7],
        ];

        foreach ($products as $product) {
            $service = Service::where('name', $product['service'])->first();
            Product::create([
                'name' => $product['name'],
                'price' => $product['price'],
                'service_id' => $service->id,
                'stock' => $product['stock']
            ]);
        }
    }
}
