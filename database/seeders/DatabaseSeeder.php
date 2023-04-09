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
            'last_name' => "Smit",
            'dni' => 72844014,
            'email' => 'admin@material.com',
            'password' => ('secret'),
            'role' => 1,
        ])->assignRole('administrador');

        User::factory()->create([
            'name' => 'Gerente',
            'last_name' => "Montalvo",
            'dni' => 78451254,
            'email' => 'gerente@material.com',
            'password' => ('secret'),
            'role' => 2,
        ])->assignRole('gerente');

        User::factory()->create([
            'name' => 'cliente',
            'last_name' => "juan",
            'dni' => 23456789,
            'email' => 'juan@material.com',
            'password' => ('secret'),
            'role' => 3,
        ])->assignRole('cliente');


        User::factory()->create([
            'name' => 'cliente',
            'last_name' => "david",
            'dni' => 12345678,
            'email' => 'david@material.com',
            'password' => ('secret'),
            'role' => 3,
        ])->assignRole('gerente');



        Province::create([
            'nombre' => 'lima',
        ]);

        Province::create([
            'nombre' => 'Arequipa',
        ]);

        District::create([
           'nombre' => 'Comas',
           'province_id' => 1,
        ]);

        District::create([
            'nombre' => 'San juan',
            'province_id' => 2,
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
