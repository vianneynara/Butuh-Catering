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
    public function run(): void
    {
        foreach ($this->JSONData() as $data) {
            Product::factory()->create([
                'product_id' => $data['product_id'], // This will be overridden by the table's auto-incrementer
                'shop_id' => $data['shop_id'],
                'name' => $data['name'],
                'description' => $data['description'],
                'min_order' => $data['min_order'],
                'max_order' => $data['max_order'],
                'price' => $data['price'],
                'image_url' => $data['image_url'],
                'created_at' => $data['created_at'],
                'updated_at' => $data['updated_at']
            ]);
        }
    }
    private function JSONData(): array
    {
        return [
            [
                "product_id" => 1,
                "shop_id" => 1,
                "name" => "Simple Sandwich",
                "description" => "Simple original sandwich, non veggies",
                "min_order" => "5",
                "max_order" => "500",
                "price" => "12.000",
                "image_url" => "https:\\",
                "created_at" => "2024-06-18 20:47:28",
                "updated_at" => "2024-06-18 20:47:28"
            ],
            [
                "product_id" => 2,
                "shop_id" => 1,
                "name" => "Fruits Sandwich",
                "description" => "Original fruit sandwich, veggies",
                "min_order" => "5",
                "max_order" => "500",
                "price" => "10000",
                "image_url" => "https:\\",
                "created_at" => "2024-06-18 20:47:28",
                "updated_at" => "2024-06-18 20:47:28"
            ],
            [
                "product_id" => 3,
                "shop_id" => 1,
                "name" => "Cheese & Beef Sandwich",
                "description" => "Beef sandwich with extra beef, non veggies",
                "min_order" => "5",
                "max_order" => "500",
                "price" => "15000",
                "image_url" => "https:\\",
                "created_at" => "2024-06-18 20:47:28",
                "updated_at" => "2024-06-18 20:47:28"
            ],
            [
                "product_id" => 4,
                "shop_id" => 2,
                "name" => "Cheese Cakes",
                "description" => "Fluffy cheese cakes",
                "min_order" => "1",
                "max_order" => "250",
                "price" => "75000",
                "image_url" => "https:\\",
                "created_at" => "2024-06-18 20:47:28",
                "updated_at" => "2024-06-18 20:47:28"
            ],
            [
                "product_id" => 5,
                "shop_id" => 2,
                "name" => "Classics Tarts",
                "description" => "Throwback oldies birthday cakes",
                "min_order" => "1",
                "max_order" => "5",
                "price" => "150000",
                "image_url" => "https:\\",
                "created_at" => "2024-06-18 20:47:28",
                "updated_at" => "2024-06-18 20:47:28"
            ],
            [
                "product_id" => 6,
                "shop_id" => 2,
                "name" => "Wedding Cakes",
                "description" => "For your special's day",
                "min_order" => "1",
                "max_order" => "5",
                "price" => "300000",
                "image_url" => "https:\\",
                "created_at" => "2024-06-18 20:47:28",
                "updated_at" => "2024-06-18 20:47:28"
            ],
            [
                "product_id" => 7,
                "shop_id" => 3,
                "name" => "Indian Full Courses",
                "description" => "Authenthics indian taste",
                "min_order" => "1",
                "max_order" => "5",
                "price" => "5000000",
                "image_url" => "https:\\",
                "created_at" => "2024-06-18 20:47:28",
                "updated_at" => "2024-06-18 20:47:28"
            ],
            [
                "product_id" => 8,
                "shop_id" => 3,
                "name" => "Western Full Courses",
                "description" => "Authenthics Western taste",
                "min_order" => "1",
                "max_order" => "5",
                "price" => "8000000",
                "image_url" => "https:\\",
                "created_at" => "2024-06-18 20:47:28",
                "updated_at" => "2024-06-18 20:47:28"
            ],
            [
                "product_id" => 9,
                "shop_id" => 3,
                "name" => "Kuphal's Special Selections",
                "description" => "Our recommended choices from our menus",
                "min_order" => "1",
                "max_order" => "5",
                "price" => "4500000",
                "image_url" => "https:\\",
                "created_at" => "2024-06-18 20:47:28",
                "updated_at" => "2024-06-18 20:47:28"
            ],
            [
                "product_id" => 10,
                "shop_id" => 4,
                "name" => "Rock Age Cookie Sets",
                "description" => "Uuuga Buuga Tobanggaaaa",
                "min_order" => "1",
                "max_order" => "5",
                "price" => "89999",
                "image_url" => "https:\\",
                "created_at" => "2024-06-18 20:47:28",
                "updated_at" => "2024-06-18 20:47:28"
            ],
            [
                "product_id" => 11,
                "shop_id" => 4,
                "name" => "T-Rex BBQ Sets",
                "description" => "We Are The Predator's",
                "min_order" => "1",
                "max_order" => "5",
                "price" => "156999",
                "image_url" => "https:\\",
                "created_at" => "2024-06-18 20:47:28",
                "updated_at" => "2024-06-18 20:47:28"
            ],
            [
                "product_id" => 12,
                "shop_id" => 4,
                "name" => "Godzilla BBQ Sets",
                "description" => "We Are The Predator's 2",
                "min_order" => "1",
                "max_order" => "5",
                "price" => "296999",
                "image_url" => "https:\\",
                "created_at" => "2024-06-18 20:47:28",
                "updated_at" => "2024-06-18 20:47:28"
            ]
        ];
    }
}
