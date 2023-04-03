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
        $permission2 = Permission::create(['name' => 'ver.reservas']);
        $permission3 = Permission::create(['name' => 'ver.clientes']);
        $permission4 = Permission::create(['name' => 'ver.informes']);

        $permission5 = Permission::create(['name' => 'ver.administradores']);
        $permission6 = Permission::create(['name' => 'ver.cupones']);

        $permission1->assignRole($role1);
        $permission2->assignRole($role1);
        $permission3->assignRole($role1);
        $permission4->assignRole($role1);

        $permission5->assignRole($role2);
        $permission6->assignRole($role2);


        $permission3->syncRoles([$role1, $role2]);
        $permission4->syncRoles([$role1, $role2]);


    }
}
