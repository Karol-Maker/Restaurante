<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prato;

class PratoSeeder extends Seeder
{
    public function run(): void
    {
        Prato::factory()->count(10)->create();
    }
}