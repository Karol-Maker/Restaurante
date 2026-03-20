<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\pratos;

class pratoseeder extends Seeder
{
    public function run(): void
    {
        pratos::factory()->count(10)->create();
    }
}