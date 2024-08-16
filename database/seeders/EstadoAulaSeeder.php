<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EstadoAula;

class EstadoAulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EstadoAula::create([
            'estado' => 'Disponible'
        ]);

        EstadoAula::create([
            'estado' => 'Fuera de servicio'
        ]);
    }
}
