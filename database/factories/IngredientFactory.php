<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ingredient>
 */
class IngredientFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            "name" => fake()->realText(32),
            "category" => fake()->colorName(),
            "times_used" => fake()->numberBetween(0, 20),
            "last_used" => fake()->dateTimeThisMonth(),
        ];
    }
}
