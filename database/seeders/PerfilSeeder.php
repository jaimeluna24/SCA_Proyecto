<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Administrador', 'descripcion' => 'Perfil para administradores']);
        $role2 = Role::create(['name' => 'Docente', 'descripcion' => 'Perfil para docentes']);

        Permission::create(['name' => 'Administrador', 'descripcion' => 'Permiso para administrador'])->assignRole($role1);
        Permission::create(['name' => 'Docente', 'descripcion' => 'Permiso para docente'])->assignRole($role2);

    }
}
