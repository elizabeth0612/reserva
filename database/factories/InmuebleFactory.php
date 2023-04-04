<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Propertie;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class InmuebleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'nombre' => fake()->name(),
            'descripcion' => fake()->name(),
            'precio_noche' => fake()->name(),
            'informacion' => fake()->name(),
            'reglas_propiedad' => fake()->name(),

        ];
    }
}
