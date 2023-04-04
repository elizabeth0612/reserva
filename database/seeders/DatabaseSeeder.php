<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;



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
            'password' => ('secret')
        ])->assignRole('gerente');

        User::factory()->count(10)->create();

    }
}
