<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Propertie;
use App\Models\Booking;
use App\Models\PaymentReservation;

class PropertieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Propertie::factory()->count(10)->create();
        Booking::factory()->count(10)->create();
        PaymentReservation::factory()->count(10)->create();

    }
}
