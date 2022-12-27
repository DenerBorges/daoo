<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recompensa>
 */
class RecompensaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "titulo" => fake()->text(10),
            "descricao" => fake()->sentence(15),
            "valor" => fake()->randomFloat(2, 100, 10000)
        ];
    }
}
