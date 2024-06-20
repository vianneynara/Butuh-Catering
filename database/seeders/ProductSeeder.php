<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'namaProduk' => 'Paket A',
            'detail' => 'Nasi + Sayur + Ayam + Telor',
            'harga' => 20000,
            'image_url' => 'E:\File Penting\USD\SEMESTER 4\Platform\Butuh-Catering\public\nasi-kotak-23k.png', // Adjust the path to your image
        ]);

        Product::create([
            'namaProduk' => 'Paket Ayam Kecap',
            'detail' => 'Nasi + Sayur + Ayam Kecap',
            'harga' => 18000,
            'image_url' => 'E:\File Penting\USD\SEMESTER 4\Platform\Butuh-Catering\public\Nasi Kotak 2.png', // Adjust the path to your image
        ]);
    }
}
