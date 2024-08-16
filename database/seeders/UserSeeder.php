<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $role = Role::find(1);
        $role2 = Role::find(2);

        User::create([
            'nombre' => 'Root Root',
            'apellido' => 'Root Root',
            'name' => 'Root',
            'email' => 'root@gmail.com',
            'password' => Hash::make('12345678'),
            'empleado_id' => 1
        ])->assignRole($role);

        User::create([
            'nombre' => 'Docente Docente',
            'apellido' => 'Docente',
            'name' => 'Docente',
            'email' => 'docente@gmail.com',
            'password' => Hash::make('12345678'),
            'empleado_id' => 2
        ])->assignRole($role2);
    }
}
