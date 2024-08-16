<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoAula;

class TipoAulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoAula::create([
            'tipo' => 'Híbrida',
            'created_by' => 1
        ]);

        TipoAula::create([
            'tipo' => 'Virtual',
            'created_by' => 1
        ]);

        TipoAula::create([
            'tipo' => 'Presencial',
            'created_by' => 1
        ]);
    }
}
