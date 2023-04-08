<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Model\Propertie;

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
            'precio_noche' => 59.55,
            'informacion' => fake()->name(),
            'reglas_propiedad' => fake()->name(),
            'seguridad_propiedad' => fake()->name(),
            'politicas_cancelacion' => fake()->name(),
            'district_id' => 1,
            'estado' => 1,
        ];
    }

}
