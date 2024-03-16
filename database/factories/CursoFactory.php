<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
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
