<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->JSONData() as $data) {
            Shop::factory()->create([
                'shop_id' => $data['shop_id'], // This will be overridden by the table's auto-incrementer
                'user_id' => $data['user_id'],
                'name' => $data['name'],
                'address' => $data['address'],
                'status' => $data['status'],
                'schedules_data' => $data['schedules_data'],
                'created_at' => $data['created_at'],
                'updated_at' => $data['updated_at']
            ]);
        }
    }

    private function JSONData(): array
    {
        return [
            [
                "shop_id" => 1,
                "user_id" => 1,
                "name" => "Rosario's Bakery",
                "address" => "Address 1",
                "status" => "open",
                "schedules_data" => "[]",
                "created_at" => "2024-06-18 20:47:28",
                "updated_at" => "2024-06-18 20:47:28"
            ],
            [
                "shop_id" => 2,
                "user_id" => 6,
                "name" => "Grimes Cakery",
                "address" => "Address 2",
                "status" => "open",
                "schedules_data" => "[]",
                "created_at" => "2024-06-18 20:47:28",
                "updated_at" => "2024-06-18 20:47:28"
            ],
            [
                "shop_id" => 3,
                "user_id" => 9,
                "name" => "Kuphal's Catering",
                "address" => "Address 3",
                "status" => "open",
                "schedules_data" => "[]",
                "created_at" => "2024-06-18 20:47:28",
                "updated_at" => "2024-06-18 20:47:28"
            ]
        ];
    }
}
