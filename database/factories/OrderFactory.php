<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'invoice_id' => $this->faker->uuid,
            'order_date' => $this->faker->dateTimeThisYear,
            'order_address' => $this->faker->address,
            'status' => $this->faker->randomElement([
                'waiting for payment',
                'waiting for confirmation',
                'processed',
                'ongoing',
                'delivered'])
        ];
    }
}
