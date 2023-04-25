<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Programacion']);
        $role3 = Role::create(['name' => 'Programas']);
        $role4 = Role::create(['name' => 'Noticias']);
        $role5 = Role::create(['name' => 'Banners']);
        $role6 = Role::create(['name' => 'Miniaturas']);


        Permission::create(['name' => 'admin.home'])->syncRoles([$role1, $role2, $role3, $role4, $role5, $role6]);

        Permission::create(['name' => 'users.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'users.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'users.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'users.destroy'])->syncRoles([$role1]);

        Permission::create(['name' => 'programacion.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'programacion.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'programacion.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'programacion.destroy'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'programas.index'])->syncRoles([$role1, $role3]);
        Permission::create(['name' => 'programas.create'])->syncRoles([$role1, $role3]);
        Permission::create(['name' => 'programas.edit'])->syncRoles([$role1, $role3]);
        Permission::create(['name' => 'programas.destroy'])->syncRoles([$role1, $role3]);

        Permission::create(['name' => 'noticias.index'])->syncRoles([$role1, $role4]);
        Permission::create(['name' => 'noticias.create'])->syncRoles([$role1, $role4]);
        Permission::create(['name' => 'noticias.edit'])->syncRoles([$role1, $role4]);
        Permission::create(['name' => 'noticias.destroy'])->syncRoles([$role1, $role4]);

        Permission::create(['name' => 'banners.index'])->syncRoles([$role1, $role5]);
        Permission::create(['name' => 'banners.create'])->syncRoles([$role1, $role5]);
        Permission::create(['name' => 'banners.edit'])->syncRoles([$role1, $role5]);
        Permission::create(['name' => 'banners.destroy'])->syncRoles([$role1, $role5]);

        Permission::create(['name' => 'miniaturas.index'])->syncRoles([$role1, $role6]);
        Permission::create(['name' => 'miniaturas.create'])->syncRoles([$role1, $role6]);
        Permission::create(['name' => 'miniaturas.edit'])->syncRoles([$role1, $role6]);
        Permission::create(['name' => 'miniaturas.destroy'])->syncRoles([$role1, $role6]);
    }
    
}
