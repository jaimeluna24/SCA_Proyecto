<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EstadoAsistencia;


class EstadoAsistenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EstadoAsistencia::create([
            'estado' => 'Pendiente'
        ]);
        EstadoAsistencia::create([
            'estado' => 'Presente'
        ]);
        EstadoAsistencia::create([
            'estado' => 'Ausente'
        ]);
        EstadoAsistencia::create([
            'estado' => 'Falta Justificada'
        ]);
    }
}
