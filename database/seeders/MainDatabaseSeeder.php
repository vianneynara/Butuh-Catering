<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Shop;
use App\Models\User;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Database\Seeder;

class MainDatabaseSeeder extends Seeder
{
    private $shops;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Ordered in a way that the foreign key constraints are satisfied
        (new UserSeeder)->run();
        (new ShopSeeder)->run();
        (new ProductSeeder)->run();
    }
}
