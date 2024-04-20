<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cocktail>
 */
class CocktailFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            "name" => fake()->word(),
            "notes" => fake()->sentences(4, true),
            "times_used" => fake()->numberBetween(0, 20),
            "last_used" => fake()->dateTimeThisMonth(),
        ];
    }
}
