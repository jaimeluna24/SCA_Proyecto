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
            'nombre' => 'Ernesto Adolfo',
            'apellido' => 'Cardona Perez',
            'identidad' => '0601-1990-00932',
            'cod_empleado' => '00001',
            'telefono' => '1234-5678',
            'email' => 'docente@gmail.com',
            'fecha_nacimiento' => '2000-05-10',
            'estado_civil' => 'Soltero',
            'created_by' => null,
        ]);
    }
}
