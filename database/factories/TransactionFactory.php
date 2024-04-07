<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'reference' => $this->faker->word,
            'description' => $this->faker->sentence,
            'payment_id' => \App\Models\Payment::factory()->create()->id,
            'type' => $this->faker->randomElement(['sale', 'expense']),
            'status' => $this->faker->randomElement(['paid', 'unpaid']),
            'amount' => $this->faker->randomFloat(2, 0, 1000),
            'notes' => $this->faker->paragraph,
            'customer_id' => \App\Models\Customer::factory()->create()->id,
        ];
    }
}
