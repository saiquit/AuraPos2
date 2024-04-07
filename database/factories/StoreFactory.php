<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'address' => $this->faker->address(),
            'phone_number' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            // 'logo' => $this->faker->imageUrl(640, 480, 'cats', true, 'Faker'),
            // 'banner' => $this->faker->imageUrl(1280, 720, 'cats', true, 'Faker'),
            'contact_info' => $this->faker->paragraph(5, true),
            'description' => $this->faker->paragraph(5,true),
        ];
    }
}
