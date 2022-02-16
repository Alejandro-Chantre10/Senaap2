<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{

    public function run()
    {
        $rol1 = Role::create(['name'=>'Admin']);
        $rol2 = Role::create(['name'=>'Aprendiz']);

        Permission::create(['name'=>'medico.index'])->assignRole([$rol1]);
        Permission::create(['name'=>'medico.create'])->assignRole([$rol1]);
        Permission::create(['name'=>'medico.edit'])->assignRole([$rol1]);
        Permission::create(['name'=>'medico.destroy'])->assignRole([$rol1]);

        // Permission::create(['name'=>'evento.index']);
        // Permission::create(['name'=>'evento.create']);
        // Permission::create(['name'=>'evento.edit']);
        // Permission::create(['name'=>'evento.destroy']);
    }
}
