<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Computador;

class ComputadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Computador::factory()->count(10)->create();
    }
    
}


