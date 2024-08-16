<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empleado;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Empleado::create([
            'nombre' => 'Root Root',
            'apellido' => 'Root Root',
            'identidad' => '0000-0000-00000',
            'cod_empleado' => '00000',
            'telefono' => '0000-0000',
            'email' => 'root@gmail.com',
            'fecha_nacimiento' => '1995-01-01',
            'estado_civil' => 'Soltero',
            'created_by' => null,
        ]);

        Empleado::create([
            'nombre' => 'Docente Docente',
            'apellido' => 'Docente Docente',
            'identidad' => '1111-1111-11111',
            'cod_empleado' => '11111',
            'telefono' => '1111-1111',
            'email' => 'docente@gmail.com',
            'fecha_nacimiento' => '1995-01-01',
            'estado_civil' => 'Soltero',
            'created_by' => null,
        ]);
    }
}
