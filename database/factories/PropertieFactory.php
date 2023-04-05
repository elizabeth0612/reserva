<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Propertie;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PropertieFactory extends Factory
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
            'imagenes' => fake()->name(),
            'precio_noche' => 500.99,
            'informacion' => fake()->name(),
            'reglas_propiedad' => fake()->name(),
            'seguridad_propiedad' => fake()->name(),
            'politicas_cancelacion' => fake()->name(),
            'province_id' =>1,
            'district_id' =>1,
            'estado' =>false,
        ];
    }
}
