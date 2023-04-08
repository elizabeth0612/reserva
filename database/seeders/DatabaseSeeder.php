<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Propertie;
use App\Models\District;
use App\Models\Province;
use App\Models\Coupon;
use App\Models\TypePayment;
use App\Models\Booking;
use App\Models\PaymentTypeDetail;


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
            'nombre' => 'lima',
        ]);

        District::create([
           'nombre' => 'Comas',
           'province_id' => 1,
        ]);

        TypePayment::create([
            'nombre' => 'Tajeta',
        ]);

        TypePayment::create([
            'nombre' => 'billetera',
        ]);

        PaymentTypeDetail::create([
            'nombre' => 'yape',
            'imagen' => 'yape.pnj',
            'type_payment_id' => 1,
        ]);


        User::factory()->count(10)->create();
        $this->call(PropertieSeeder::class);
        $this->call(CouponSeeder::class);
        $this->call(BookingSeeder::class);

    }
}
