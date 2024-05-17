<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StagiaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->w,
            'lastname'=>fake()->lastName(),
            'age'=>fake()->randomDigit(18,30)
            // 'diplome'=>fake()->rand omElement(['dev','ing','medcin']),
        ];
    }
}
