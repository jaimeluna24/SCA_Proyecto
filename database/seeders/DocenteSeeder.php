<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Docente;

class DocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Docente::create([
            'nombre' => 'Marcos David',
            'apellido' => 'Gutierrez Lopez',
            'identidad' => '0601-1990-00932',
            'email' => 'docente@gmail.com',
            'telefono' => '1243-6578',
            'fecha_nacimiento' => '2000-05-10',
            'sede_id' => 1,
            'empleado_id' => 1,
            'created_by' => 1,
        ]);
    }
}
