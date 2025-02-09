<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sede;

class SedeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sede::create([
            'nombre' => 'Choluteca',
            'ubicacion' => 'Choluteca centro',
            'created_by' => 1
        ]);
    }
}
