<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'data' => $this->faker->date(),
            'mesa' => $this->faker->numberBetween(1,20),
        ];
    }
}