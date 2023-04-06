<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Propertie;
use App\Models\District;
use App\Models\Province;
use App\Models\Coupon;
use App\Models\TypePayment;
use App\Models\DocumentTypes;
use App\Models\CardType;
use App\Models\Booking;
use App\Models\PaymentReservation;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@material.com',
            'password' => ('secret')
        ])->assignRole('administrador');

        User::factory()->create([
            'name' => 'Gerente',
            'email' => 'gerente@material.com',
            'password' => ('secret'),
        ])->assignRole('gerente');

        Province::create([
            'nombre' => 'Arequipa',
        ]);

        District::create([
           'nombre' => 'Comas',
        ]);

        TypePayment::create([
            'nombre' => 'Tajeta',
        ]);

        DocumentTypes::create([
            'nombre' => 'DNI',
        ]);

       CardType::create([
           'nombre' => 'Visa',
        ]);




        User::factory()->count(10)->create();
        $this->call(PropertieSeeder::class);
        $this->call(CouponSeeder::class);
        $this->call(BookingSeeder::class);
        $this->call(PaymentReservationSeeder::class);

    }
}
