<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Model\Booking;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
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
            'precio' => 500,
            'huespedes' =>fake()->numberBetween(1, 5),
            'cantidad_dias' =>fake()->numberBetween(1, 7),
            'fecha_entrada' => '2023-05-10',
            'fecha_salida' => '2023-05-14',
            'fecha_registro' => '2023-05-08',
            'pago_costo' => 20.99,
            'estado' => false,
            'user_id' =>fake()->numberBetween(1, 10),
            'type_payment_id' =>fake()->numberBetween(1, 2),
            'coupon_id' =>fake()->numberBetween(1, 10),
            'propertie_id' =>fake()->numberBetween(1, 10),
        ];
    }
}
