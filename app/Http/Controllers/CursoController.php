<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    
    public function index() 
    {
        // Cuando se llame a una vista dentro de una carpeta, primero se llama a la carpeta
        return view('cursos.index'); 
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
