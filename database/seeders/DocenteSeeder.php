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
            'nombre' => 'Docente Docente',
            'apellido' => 'Docente Docente',
            'identidad' => '1111-1111-11111',
            'email' => 'docente@gmail.com',
            'telefono' => '1243-6578',
            'fecha_nacimiento' => '1995-01-01',
            'sede_id' => 1,
            'empleado_id' => 2,
            'created_by' => 1,
        ]);
    }
}
