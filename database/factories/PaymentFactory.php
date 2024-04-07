<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sale_id' => $this->faker->unique()->randomNumber(9),
            'amount' => $this->faker->randomFloat(2, 0, 9999.99),
            'status' => $this->faker->randomElement(['paid', 'unpaid']),
            'payment_method' => $this->faker->randomElement(['cash', 'credit', 'cheque']),
            'notes' => $this->faker->optional()->paragraph(),
        ];
    }
}
