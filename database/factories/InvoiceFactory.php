<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer' => fake()->name(),
            'number' => fake()->unique()->randomNumber(5, false),
            'status' => fake()->randomElement(['sent', 'delayed', 'sold', 'cancelled']),
            'sent_at' => fake()->dateTime(),
            'note' => fake()->sentence(),
            'paid_at' => fake()->dateTime()
        ];
    }
}
