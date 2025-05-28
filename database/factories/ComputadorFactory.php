<?php

namespace Database\Factories;

use App\Models\Computador;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComputadorFactory extends Factory
{
    protected $model = Computador::class;

    public function definition(): array
    {
        return [
            'codigo_tienda' => $this->faker->unique()->bothify('T###'),
            'almacenamiento' => $this->faker->randomElement(['256GB SSD', '512GB SSD', '1TB HDD']),
            'ram' => $this->faker->randomElement([8, 16, 32]),
            'tarjeta_grafica' => $this->faker->randomElement(['RTX 3060', 'GTX 1660', 'Intel UHD']),
            'precio' => $this->faker->randomFloat(2, 500, 2500),
            'descripcion' => $this->faker->sentence(10),
            'imagen' => null,
            'procesador' => $this->faker->randomElement(['i5', 'i7', 'Ryzen 5', 'Ryzen 7'])
        ];
    }
}
