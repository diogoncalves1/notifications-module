<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notification>
 */
class NotificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "type" => $this->faker->word(),
            "notifiable_id" => $this->faker->boolean(),
            "notifiable_type" => $this->faker->word(),
            "data" => $this->faker->sentence(150),
        ];
    }
}