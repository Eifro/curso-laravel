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
        $cursos = Curso::orderBy('id', 'desc')->paginate();

        // Cuando se llame a una vista dentro de una carpeta, primero se llama a la carpeta
        return view('cursos.index', compact('cursos')); 
    }

    public function create()
    {
        return view('cursos.create');
    }

    // obtiene información de un form
    public function store(Request $request) 
    {
        // return $request->all(); // muestra lo que se envió del form
        $curso  = new Curso();
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;
        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }

    public function show(Curso $curso)
    {
        // buscar curso por id
        // $curso = Curso::find($id);

        // Para pasar una variable a la vista - ['curso' => $curso]
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso) // forma corta de usar Curso::find()
    {
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso)
    {
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;   
        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }
}
