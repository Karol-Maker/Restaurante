<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cliente;
use App\Models\pratos;

class PedidoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'cliente_id' => Cliente::inRandomOrder()->first()->id,
            'pratos_id' => pratos::inRandomOrder()->first()->id,
            'quantidade' => fake()->numberBetween(1, 5),
        ];
    }
}