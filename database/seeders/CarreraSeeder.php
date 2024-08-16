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
        $carrera->clases()->attach([1, 4, 14, 21, 27, 36, 41, 54, 58, 68, 69, 75, 76, 79, 80, 83, 84, 88, 91, 97, 98, 99, 101, 103, 104, 105, 106, 107, 108, 109, 111, 112, 113, 115, 116, 117, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133]);

        //Gerencia de Negocios
        $carrera = Carrera::find(2);
        $carrera->clases()->attach([1, 4, 5, 14, 15, 16, 27, 36, 38, 39, 54, 58, 62, 68, 69, 75, 76, 79, 80, 83, 84, 85, 86, 87, 88, 91, 97, 98, 99, 101, 103, 104, 105, 106, 107, 108, 109, 111, 112, 113, 115, 116, 117, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133]);

        //Gerencia en Turismo
        $carrera = Carrera::find(3);
        $carrera->clases()->attach( [1, 4, 15, 16, 27, 28, 31, 36, 37, 39, 41, 45, 52, 57, 58, 68, 69, 75, 76, 78, 79, 80, 82, 84, 88, 97, 98, 99, 101, 103, 104, 105, 106, 107, 108, 109, 111, 112, 113, 115, 116, 117, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133]);

        //Ingeniería Electrónica
        $carrera = Carrera::find(4);
        $carrera->clases()->attach([1, 4, 14, 16, 17, 18, 19, 27, 36, 41, 50, 53, 54, 55, 58, 68, 69, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 86, 88, 91, 97, 98, 99, 101, 103, 104, 105, 106, 107, 108, 109, 111, 112, 113, 115, 116, 117, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133]);

        //Ingeniería de la Producción Industrial
        $carrera = Carrera::find(5);
        $carrera->clases()->attach([1, 4, 5, 14, 16, 17, 18, 19, 21, 27, 36, 39, 41, 43, 47, 50, 51, 52, 53, 54, 55, 56, 58, 68, 69, 70, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 88, 91, 97, 98, 99, 101, 103, 104, 105, 106, 107, 108, 109, 111, 112, 113, 115, 116, 117, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133]);

        //Ingeniería en Sistemas Computacionales
        $carrera = Carrera::find(6);
        $carrera->clases()->attach([1, 2, 3, 6, 7, 8, 9, 10, 11, 12, 13, 15, 18, 20, 22, 23, 25, 26, 29, 30, 32, 33, 34, 35, 37, 38, 42, 44, 46, 48, 49, 50, 53, 54, 55, 56, 59, 60, 61, 62, 63, 64, 65, 66, 67, 70, 71, 72, 73, 74, 76, 78, 80, 82, 84, 85, 87, 89, 90, 92, 93, 94, 95, 96, 100, 102, 104, 106, 108, 110, 112, 114, 116, 118, 120, 122, 124, 126, 128, 130, 132]);

        //Psicología
        $carrera = Carrera::find(7);
        $carrera->clases()->attach([1, 14, 16, 17, 18, 19, 27, 36, 38, 41, 54, 58, 61, 62, 68, 69, 75, 76, 79, 80, 83, 84, 88, 91, 97, 98, 99, 101, 103, 104, 105, 106, 107, 108, 109, 111, 112, 113, 115, 116, 117, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133]);
    }


}
