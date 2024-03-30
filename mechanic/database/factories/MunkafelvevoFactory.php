<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Munkafelvevo>
 */
class MunkafelvevoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'azonosito' => fake()->bothify("??####"),
            'nev' => fake()->name(),
            'jelszo' => fake()->password(),
        ];
    }
}
