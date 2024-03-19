<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

// Usar un controlador
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Las rutas creadas tienen que tener una estructura ordenada

Route::get('/', HomeController::class);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          

//Route::get('cursos', [CursoController::class, 'index']);

//Route::get('cursos/create', [CursoController::class, 'create']);

// Pasar un parámetro a la ruta
//Route::get('cursos/{curso}', [CursoController::class, 'show']);

// Pasar más de un parámetro a la ruta
/* Route::get('cursos/{curso}/{categoria}', function($curso, $categoria) {
    return "Página del curso de <b>$curso</b> de la categoría <b>$categoria</b>";
}); */

// Cuando hay rutas parecidas se puede unir en una sola ruta haciendo que el segundo parámetro sea opcional
/* Route::get('cursos/{curso}/{categoria?}', function($curso, $categoria = null) {
    if (is_null($categoria)) {
        return "Página de Cursos del curso de <b>$curso</b>";
    } else {
        return "Página del curso de <b>$curso</b> de la categoría <b>$categoria</b>";
    }
}); */

// Grupo de rutas
Route::controller(CursoController::class)->group(function() {
    Route::get('cursos', 'index')->name('cursos.index'); // añadiendo un identificador a la ruta con el método name()
    Route::get('cursos/create', 'create')->name('cursos.create');
    Route::get('cursos/{id}', 'show')->name('cursos.show');
});