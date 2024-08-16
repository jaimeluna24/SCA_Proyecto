<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $this->call([
            EmpleadoSeeder::class,
            PerfilSeeder::class,
            UserSeeder::class,
            EstadoAulaSeeder::class,
            SedeSeeder::class,
            DocenteSeeder::class,
            AulaSeeder::class,
            TipoAulaSeeder::class,
            EstadoSolicitudSeeder::class,
            ClaseSeeder::class,
            CarreraSeeder::class,
            EstadoAsistenciaSeeder::class
        ]);


    }
}
