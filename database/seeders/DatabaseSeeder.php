<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * Seeders, es un método que permite enviar una cantidad de datos a la base de datos.
     * Factorys, llena con datos de prueba a la base de datos especificando el tipo y la cantidad de registros.
     */

    /*
        php artisan db:seed -> ejecuta los seeders
        php artisan make:seeder nombre -> crea un nuevo seeder
        php artisan migrate:fresh --seed -> ejecuta 2 comandos (migrate:fresh | db:seed) ya que estan relacionados
    */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Ejecuta todo lo encuentra en otra clase seeder
        $this->call(CursoSeeder::class);
    }
}
