@extends('layouts.template')

@section('title', 'Cursos - Crear')

@section('content')
    <h1>CURSOS - FORMULARIO PARA CREAR UN CURSO</h1>
    
    {{-- Cada vez que se envía información por metodo POST se tiene que enviar un token csrf (medida de seguridad) --}}
    <form action="{{ route('cursos.store') }}" method="POST">
        {{-- crea un input oculto que genera un token --}}
        @csrf

        <label for="name">Nombre:</label> <br>
        <input type="text" name="name"> <br><br>
        <label for="description">Descripción:</label> <br>
        <textarea name="description" rows="5"></textarea> <br><br>
        <label for="category">Categoría:</label> <br>
        <input type="text" name="category"> <br><br>
        <button type="submit">Enviar Formulario</button>
    </form>
@endsection