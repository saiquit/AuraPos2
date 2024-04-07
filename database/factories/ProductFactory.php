<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'unit_id' => 1,
            'name' => $this->faker->words(3, true),
            'sku' => $this->faker->unique()->uuid(),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->optional()->paragraph(),
            'cost' => $this->faker->randomFloat(2, 0, 1000),
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'tax' => $this->faker->randomFloat(2, 0, 1000),
            'is_active' => $this->faker->boolean(),
            'dimension' => $this->faker->optional()->word(),
            'weight' => $this->faker->optional()->word(),
            'is_new' => $this->faker->boolean(),
            'is_sale' => $this->faker->boolean(),
            'sale_start_date' => $this->faker->optional()->dateTime(),
            'sale_end_date' => $this->faker->optional()->dateTime(),
            'size' => $this->faker->optional()->word(),
            'color' => $this->faker->optional()->word(),
            'skin_type' => $this->faker->optional()->word(),
            'type_of_eye' => $this->faker->optional()->word(),
            'type_of_skin' => $this->faker->optional()->word(),
        ];
    }
}
