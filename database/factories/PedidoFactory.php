<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cliente;
use App\Models\Prato;

class PedidoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'cliente_id' => Cliente::inRandomOrder()->first()->id,
            'prato_id' => Prato::inRandomOrder()->first()->id,
            'quantidade' => fake()->numberBetween(1, 5),
        ];
    }
}