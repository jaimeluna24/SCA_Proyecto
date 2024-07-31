<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Carrera;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carreras = [
            [
                'carrera' => 'Derecho',
                'created_by' => 1,
            ],
            [
                'carrera' => 'Gerencia de Negocios',
                'created_by' => 1,
            ],
            [
                'carrera' => 'Gerencia en Turismo',
                'created_by' => 1,
            ],
            [
                'carrera' => 'Ingeniería Electrónica',
                'created_by' => 1,
            ],
            [
                'carrera' => 'Ingeniería de la Producción Industrial',
                'created_by' => 1,
            ],
            [
                'carrera' => 'Ingeniería en Sistemas Computacionales',
                'created_by' => 1,
            ],
            [
                'carrera' => 'Psicología',
                'created_by' => 1,
            ],
        ];




        foreach ($carreras as $carrera) {
            Carrera::forceCreate($carrera);
        }

        //Derecho
        $carrera = Carrera::find(1);
        $carrera->clases()->attach([1,2,3,4,5,6,7,8,9,10,11,12,13,14]);

        //Gerencia de Negocios
        $carrera = Carrera::find(2);
        $carrera->clases()->attach([1,5,6,7,8,9,10,11,12,13,14]);

        //Gerencia en Turismo
        $carrera = Carrera::find(3);
        $carrera->clases()->attach([1,2,3,4,5,6,7,8,9,10,11]);

        //Ingeniería Electrónica
        $carrera = Carrera::find(4);
        $carrera->clases()->attach([1,2,3,4,5,6,7,8,9,10,11,12,13,14]);

        //Ingeniería de la Producción Industrial
        $carrera = Carrera::find(5);
        $carrera->clases()->attach([1,2,3,4,5,6,7,8,9]);

        //Ingeniería en Sistemas Computacionales
        $carrera = Carrera::find(6);
        $carrera->clases()->attach([1,2,3,4,5,6,7,8,9,10,11,12,13,14]);

        //Psicología
        $carrera = Carrera::find(7);
        $carrera->clases()->attach([1,2,3,4]);
    }


}
