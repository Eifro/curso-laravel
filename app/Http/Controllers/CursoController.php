<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    
    public function index() 
    {
        // obtener todos los datos de la bd
        // $cursos = Curso::all();

        // obtener todos los datos en paginado (15 registros) .. para ver los otros registros agregar en la url -> ?page=2
        $cursos = Curso::paginate();

        // Cuando se llame a una vista dentro de una carpeta, primero se llama a la carpeta
        return view('cursos.index', compact('cursos')); 
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function show($curso)
    {
        // Para pasar una variable a la vista - ['curso' => $curso]
        return view('cursos.show', compact('curso'));
    }

}
