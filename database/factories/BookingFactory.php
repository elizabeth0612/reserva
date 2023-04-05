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
            'huespedes' => 3,
            'cantidad_dias' => 4,
            'fecha_entrada' => '2023-05-10',
            'fecha_salida' => '2023-05-14',
            'fecha_registro' => '2023-05-08',
            'estado' => false,
            'user_id' => 1,
            'coupon_id' => 1,
            'propertie_id' => 1,
        ];
    }
}
