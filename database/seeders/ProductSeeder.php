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
            ['name' => 'Customized Styrofoam Sculptures', 'min_price' => 5000, 'max_price' => 25000, 'service' => 'Styrofoam arts', 'stock' => 10],
            ['name' => 'Decorative Styrofoam Art', 'min_price' => 2000, 'max_price' => 10000, 'service' => 'Styrofoam arts', 'stock' => 15],
            ['name' => 'Themed Styrofoam Figures', 'min_price' => 4000, 'max_price' => 15000, 'service' => 'Styrofoam arts', 'stock' => 8],
            ['name' => 'Event-Specific Styrofoam Decorations', 'min_price' => 3000, 'max_price' => 12000, 'service' => 'Styrofoam arts', 'stock' => 12],
            ['name' => 'Landscape Paintings', 'min_price' => 2500, 'max_price' => 8000, 'service' => 'Paintings', 'stock' => 20],
            ['name' => 'Portrait Paintings', 'min_price' => 3000, 'max_price' => 15000, 'service' => 'Paintings', 'stock' => 10],
            ['name' => 'Abstract Paintings', 'min_price' => 2500, 'max_price' => 10000, 'service' => 'Paintings', 'stock' => 15],
            ['name' => 'Custom Commissioned Paintings', 'min_price' => 5000, 'max_price' => 25000, 'service' => 'Paintings', 'stock' => 5],
            ['name' => 'Themed Event Props', 'min_price' => 3000, 'max_price' => 12000, 'service' => 'Props', 'stock' => 10],
            ['name' => 'Stage Props', 'min_price' => 4000, 'max_price' => 20000, 'service' => 'Props', 'stock' => 8],
            ['name' => 'Photo Booth Props', 'min_price' => 500, 'max_price' => 3000, 'service' => 'Props', 'stock' => 25],
            ['name' => 'Custom Props', 'min_price' => 1000, 'max_price' => 5000, 'service' => 'Props', 'stock' => 15],
            ['name' => 'Themed Costumes', 'min_price' => 1500, 'max_price' => 6000, 'service' => 'Costumes', 'stock' => 20],
            ['name' => 'Custom Costumes', 'min_price' => 2000, 'max_price' => 8000, 'service' => 'Costumes', 'stock' => 10],
            ['name' => 'Costume Accessories', 'min_price' => 500, 'max_price' => 3000, 'service' => 'Costumes', 'stock' => 30],
            ['name' => 'Event-Specific Costumes', 'min_price' => 1500, 'max_price' => 7000, 'service' => 'Costumes', 'stock' => 15],
            ['name' => 'Wedding Backdrops', 'min_price' => 3000, 'max_price' => 15000, 'service' => 'Backdrops', 'stock' => 5],
            ['name' => 'Birthday Party Backdrops', 'min_price' => 2500, 'max_price' => 12000, 'service' => 'Backdrops', 'stock' => 10],
            ['name' => 'Photo Studio Backdrops', 'min_price' => 2500, 'max_price' => 10000, 'service' => 'Backdrops', 'stock' => 8],
            ['name' => 'Customizable Event Backdrops', 'min_price' => 3000, 'max_price' => 15000, 'service' => 'Backdrops', 'stock' => 7],
        ];

        foreach ($products as $product) {
            $service = Service::where('name', $product['service'])->first();
            Product::create([
                'name' => $product['name'],
                'min_price' => $product['min_price'],
                'max_price' => $product['max_price'],
                'service_id' => $service->id,
                'stock' => $product['stock']
            ]);
        }
    }
}
