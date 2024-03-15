<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/*
    Eloquent, es un ORM que permite tomar la base de datos como si fuera un objeto de mapeo relacional.
    php artisan make:model Nombre -> crea un modelo, se toma la convención del inglés, tiene que tener relación con la tabla de la base de datos (User // users)
    php artisan tinker -> entramos a la consola tinker que permite interactuar con el modelo (base de datos)
    -> $curso = new Curso // instanciar el modelo
    -> $curso->name = 'Laravel' // asigna un valor para el campo name
    -> $curso->description = 'Framework de PHP' // asigna un valor para el campo description
    -> $curso->save() // graba los valores en la base de datos
    -> $curso->description = 'El mejor Framework de PHP' // actualiza el valor del campo description
    -> $curso2 = new Curso // instanciar otra vez el modelo para grabar nuevo dato o fila
*/

class Curso extends Model
{
    use HasFactory;

    // protected $table = 'users'; // ignora la convención y usa la tabla users
}
