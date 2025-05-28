<?php

namespace Database\Seeders;
// Permite crear lo que es nuevos registros aleatorios dentro de la base de datos.
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


