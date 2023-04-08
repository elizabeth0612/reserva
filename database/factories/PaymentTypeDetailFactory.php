<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Model\PaymentTypeDetail;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PaymentTypeDetailFactory extends Factory
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
            'nombre' =>fake()->name(),
            'imagen' => fake()->name(),
            'type_payment_id' => fake()->numberBetween(1 , 2),

        ];
    }
}
