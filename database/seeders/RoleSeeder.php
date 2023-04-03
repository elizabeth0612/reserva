<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role1 = Role::create(['name' => 'administrador']);
        $role2 = Role::create(['name' => 'gerente']);
        $role3 = Role::create(['name' => 'cliente']);

        $permission1 = Permission::create(['name' => 'ver.inmuebles']);
        $permission2 = Permission::create(['name' => 'ver.reservas.realizadas']);
        $permission3 = Permission::create(['name' => 'ver.reservas.pendientes']);
        $permission4 = Permission::create(['name' => 'ver.clientes']);
        $permission5 = Permission::create(['name' => 'ver.informes.mensuales']);
        $permission6 = Permission::create(['name' => 'ver.informes.anuales']);

        $permission7 = Permission::create(['name' => 'ver.administradores']);
        $permission8 = Permission::create(['name' => 'ver.cupones.vigente']);
        $permission9 = Permission::create(['name' => 'ver.cupones.consumidos']);

        $permission1->assignRole($role1);
        $permission2->assignRole($role1);
        $permission3->assignRole($role1);
        $permission4->assignRole($role1);
        $permission5->assignRole($role1);
        $permission6->assignRole($role1);

        $permission7->assignRole($role2);
        $permission8->assignRole($role2);
        $permission9->assignRole($role2);

        $permission4->syncRoles([$role1, $role2]);


    }
}
