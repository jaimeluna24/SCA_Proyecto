<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aula;

class AulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Aula::create([
            'nombre' => 'Aula 101',
            'capacidad' => '40',
            'observacion' => 'Híbrida',
            'estado_id' => 1
        ]);

        Aula::create([
            'nombre' => 'Aula 102',
            'capacidad' => '40',
            'observacion' => 'Híbrida / sala de audiencia de derecho',
            'estado_id' => 1
        ]);

        Aula::create([
            'nombre' => 'Aula 103',
            'capacidad' => '40',
            'observacion' => 'Híbrida',
            'estado_id' => 1
        ]);

        Aula::create([
            'nombre' => 'Aula 104',
            'capacidad' => '40',
            'observacion' => 'Híbrida / Salón de maestría',
            'estado_id' => 1
        ]);

        Aula::create([
            'nombre' => 'Aula 105',
            'capacidad' => '40',
            'observacion' => 'Ninguna',
            'estado_id' => 1
        ]);

        Aula::create([
            'nombre' => 'Aula 106',
            'capacidad' => '40',
            'observacion' => 'Salón de eventos',
            'estado_id' => 1
        ]);

        Aula::create([
            'nombre' => 'Laboratorio de computación',
            'capacidad' => '40',
            'observacion' => 'Híbrida',
            'estado_id' => 1
        ]);

        Aula::create([
            'nombre' => 'Aula 201',
            'capacidad' => '40',
            'observacion' => 'Ninguna',
            'estado_id' => 1
        ]);

        Aula::create([
            'nombre' => 'Aula 202',
            'capacidad' => '40',
            'observacion' => 'Ninguna',
            'estado_id' => 1
        ]);

        Aula::create([
            'nombre' => 'Aula Virtual',
            'capacidad' => '40',
            'observacion' => 'Aula creada para clases en línea',
            'estado_id' => 1
        ]);
    }
}
