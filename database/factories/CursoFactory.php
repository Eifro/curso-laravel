<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */

/*
    Eloquent es un ORM que trata a la base de datos, registros y consultas sql como si fueran objetos.
    use App\Models\Curso
    $cursos = Curso::all(); // obtener todos los registros
    $cursos = Curso::where('category', 'Diseño')->get(); // obtener todos los registros donde category=Diseño
    $cursos = Curso::where('category', 'Diseño')->orderBy('id', 'desc')->get(); // obtiene todos los registros en un orden
    $cursos = Curso::where('category', 'Diseño')->orderBy('name', 'asc')->first(); // obtiene el primer registro
    $cursos = Curso::select('name', 'description')->get(); // muestra los campos name y description
    $cursos = Curso::select('name as title', 'description')->first(); // agrega un alias al campo name
    $cursos = Curso::select('name','description')->orderBy('name','asc')->take(5)->get(); // toma los 5 primeros registros de una consulta
    $cursos = Curso::find(2); // buscar por id
    $cursos->name; // mostrar el valor del campo name
    $cursos = Curso::where('id','>',40)->get(); // obtiene los cursos mayor al id | se puede usar >,<,>=,<=,<>
    $cursos = Curso::where('name','like','% dolorum %')->get(); // obtiene los registros en donde se encuentre un valor de 'dolorum'
*/
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(), // oración
            'description' => $this->faker->paragraph(), // párrafo
            'category' => $this->faker->randomElement(['Desarrollo Web', 'Aplicaciones Móviles', 'Diseño']) // escoge un elemento random del array
        ];
    }
}
