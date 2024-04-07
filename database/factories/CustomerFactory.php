<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'phone' => $this->faker->unique()->phoneNumber(),
            'address' => $this->faker->optional()->address(),
            'gender' => $this->faker->optional()->randomElement(['Male', 'Female']),
            'date_of_birth' => $this->faker->optional()->date(),
            'is_active' => true,
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('password'),
            'remember_token' => $this->faker->optional()->uuid(),
            'email_verified_at' => $this->faker->optional()->dateTime(),
        ];
    }
}
