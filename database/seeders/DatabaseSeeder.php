<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use PhpParser\Node\Expr\Assign;

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
            PerfilSeeder::class,
            SedeSeeder::class,
            EmpleadoSeeder::class,
            DocenteSeeder::class,
            GeneralSeeder::class
        ]);

        $role = Role::find(1);
        $role2 = Role::find(2);

        User::create([
            'nombre' => 'Jaime David',
            'apellido' => 'Luna Ponce',
            'name' => 'Administrador',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'empleado_id' => 1
        ])->assignRole($role);

        User::create([
            'nombre' => 'Jaime David',
            'apellido' => 'Luna Ponce',
            'name' => 'Docente',
            'email' => 'docente@gmail.com',
            'password' => Hash::make('12345678'),
            'empleado_id' => 1
        ])->assignRole($role2);
    }
}
