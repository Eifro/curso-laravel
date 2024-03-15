<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    /*
        php artisan db:seed -> ejecuta los seeders
    */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $curso = new Curso();
        $curso->name = 'Laravel';
        $curso->descripcion = 'Framework de PHP';
        $curso->category = 'Desarrollo Web Backend';
        $curso->save();
    }
}
