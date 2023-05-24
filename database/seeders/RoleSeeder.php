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
       $role1 = Role::create(['name' => 'Admin']);
       $role2 = Role::create(['name' => 'Coorporativo KP']);
       $role3 = Role::create(['name' => 'Supervisor']);
       $role4 = Role::create(['name' => 'Coordinador']);
       $role5 = Role::create(['name' => 'Inspector KP']);

       Permission::create(['name' => 'Bienvenida'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);

       Permission::create(['name' => 'Usuarios'])->syncRoles([$role1, $role2]);
       Permission::create(['name' => 'Lista de roles'])->syncRoles([$role1, $role2]);
       Permission::create(['name' => 'Empresas'])->syncRoles([$role1, $role2]);
       Permission::create(['name' => 'Ubicaciones'])->syncRoles([$role1, $role2]);

       Permission::create(['name' => 'Lista de patios'])->syncRoles([$role1, $role2]);
       Permission::create(['name' => 'Lista de Vías'])->syncRoles([$role1, $role2]);
       Permission::create(['name' => 'Lista de tramos'])->syncRoles([$role1, $role2]);
       Permission::create(['name' => 'Lista de Herrajes'])->syncRoles([$role1, $role2]);

       Permission::create(['name' => 'Lista de Inspecciones'])->syncRoles([$role1, $role2]);
       Permission::create(['name' => 'Realizar una inspeccion'])->syncRoles([$role1, $role2]);



    }
}
