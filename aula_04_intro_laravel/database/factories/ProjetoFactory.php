<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Projeto>
 */
class ProjetoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nome" => fake()->text(20),
            "meta_de_valor" => fake()->randomFloat(2, 100, 10000),
            "dias_para_atingir" => fake()->randomNumber(3, false)
        ];
    }
}
