<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Propertie;
use App\Models\District;
use App\Models\Province;



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
        $this->call(PropertieSeeder::class);

         User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@material.com',
            'password' => ('secret')
        ])->assignRole('administrador');

        Province::factory()->create([
             'nombre' => 'Cuzco',
        ]);

        District::factory()->create([
            'nombre' => 'Comas',
        ]);

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
            'estado' =>1,
        ]);

        User::factory()->create([
            'name' => 'Gerente',
            'email' => 'gerente@material.com',
            'password' => ('secret'),
        ])->assignRole('gerente');

        User::factory()->count(10)->create();

    }
}
