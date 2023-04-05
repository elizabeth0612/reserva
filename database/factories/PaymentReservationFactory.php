<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Model\PaymentReservation;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PaymentReservationFactory extends Factory
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
            'booking_id'=>5,
            'type_payment_id'=>1,
            'numero_celular'=>fake()->name(),
            'document_type_id'=>1,
            'numero_documento'=>fake()->name(),
            'numero_tarjeta'=>fake()->name(),
            'card_type_id'=>1,
            'pago_costo'=>199.99,
        ];
    }
}
