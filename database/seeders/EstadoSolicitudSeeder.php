<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EstadoSolicitud;

class EstadoSolicitudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EstadoSolicitud::create([
            'estado' => 'En espera',
            'created_by' => 1
        ]);

        EstadoSolicitud::create([
            'estado' => 'Aprobada',
            'created_by' => 1
        ]);

        EstadoSolicitud::create([
            'estado' => 'Rechazada',
            'created_by' => 1
        ]);
    }
}
