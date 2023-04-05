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

        Coupon::create([
            'descuento' => 50.49,
            'estado' => false,
        ]);

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





        Propertie::factory()->create([
            'nombre' => 'juan',
            'descripcion' => 'juan@material.com',
            'imagenes' => 'muygrande',
            'precio_noche' => 100.99,
            'informacion' => 'admin@material.com',
            'reglas_propiedad' => 'admin@material.com',
            'seguridad_propiedad' => 'admin@material.com',
            'politicas_cancelacion' => 'admin@material.com',
            'province_id' => 1,
            'district_id' => 1,
            'estado' => 1,
        ]);

        Booking::factory()->create([
            'precio' => 2500,
            'huespedes' => 3,
            'cantidad_dias' => 5,
            'fecha_entrada' => '2023-04-06',
            'fecha_salida' => '2023-04-11',
            'fecha_registro' => '2023-04-05',
            'estado' => false,
            'user_id' => 1,
            'coupon_id' => 1,
            'propertie_id' => 1
        ]);

        PaymentReservation::factory()->create([
            'booking_id' => 2,
            'type_payment_id' => 1,
            'numero_celular' => '987456123',
            'document_type_id' => 1,
            'numero_documento' => '72844014',
            'numero_tarjeta' => '784563219874512354',
            'card_type_id' => 1,
            'pago_costo' => 300.01,
        ]);




    }
}
