<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Paket A',
            'description' => 'Nasi + Sayur + Ayam + Telor',
            'price' => 20000,
            'min_order' => 1,
            'max_order' => 10,
            'image_url' => 'nasi-kotak-23k.png',
            'shop_id' => 1,
        ]);

        Product::create([
            'name' => 'Paket B',
            'description' => 'Nasi + Sayur + Daging + Tempe',
            'price' => 25000,
            'min_order' => 1,
            'max_order' => 5,
            'image_url' => 'nasi-kotak-25k.png',
            'shop_id' => 1,
        ]);

        // ... data lainnya
    }
}
