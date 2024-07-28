<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Clase;

class ClaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clases =
        [
            [
                "codigo"=> "LL-111",
                "asignatura"=> "Español",
                "created_by"=> "1"
            ],
            [
                "codigo"=> "IS-112",
                "asignatura"=> "Introducción a la Computación",
                "created_by"=> "1"
            ],
            [
                "codigo"=> "MM-111",
                "asignatura"=> "Matemática I",
                "created_by"=> "1"
            ],
            [
                "codigo"=> "LCC-111",
                "asignatura"=> "Laboratorio de Procesamiento de Datos I",
                "created_by"=> "1"
            ],
            [
                "codigo"=> "MM-121",
                "asignatura"=> "Vectores y Matrices",
                "created_by"=> "1"
            ],
            [
                "codigo"=> "MM-122",
                "asignatura"=> "Geometría y Trigonometría",
                "created_by"=> "1"
            ],
            [
                "codigo"=> "LCC-122",
                "asignatura"=> "Laboratorio de Procesamiento de Datos II",
                "created_by"=> "1"
            ],
            [
                "codigo"=> "IS-131",
                "asignatura"=> " Programación I",
                "created_by"=> "1"
            ],
            [
                "codigo"=> "IS-141",
                "asignatura"=> " Programación II",
                "created_by"=> "1"
            ],
            [
                "codigo"=> "MM-131",
                "asignatura"=> " Cálculo I",
                "created_by"=> "1"
            ],
            [
                "codigo"=> "CN-130-132",
                "asignatura"=> " Área Electiva de Ciencias Naturales",
                "created_by"=> "1"
            ],
            [
                "codigo"=> "LCC-133",
                "asignatura"=> " Laboratorio de Procesamiento de Datos III",
                "created_by"=> "1"
            ],
            [
                "codigo"=> "IS-142",
                "asignatura"=> " Estructura de Datos",
                "created_by"=> "1"
            ],
            [
                "codigo"=> "MM-142",
                "asignatura"=> " Cálculo II",
                "created_by"=> "1"
            ],

        ];

        foreach ($clases as $clase) {
            Clase::forceCreate($clase);
        }
    }
}
