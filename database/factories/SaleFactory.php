<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'serial_number' => $this->faker->unique()->uuid(),
            'total_amount' => $this->faker->randomFloat(2, 0, 1000),
            'status' => $this->faker->randomElement(['pending', 'completed', 'cancelled']),
            'total_price' => $this->faker->randomFloat(2, 0, 1000),
            'total_discount' => $this->faker->randomFloat(2, 0, 1000),
            'total_tax' => $this->faker->randomFloat(2, 0, 1000),
            'total_shipping' => $this->faker->randomFloat(2, 0, 1000),

            // Define foreign keys
            // 'seller_id' => function () {
            //     return \App\Models\User::factory()->create()->id;
            // },
            // 'customer_id' => function () {
            //     return \App\Models\Customer::factory()->create()->id;
            // },
        ];
    }
}
