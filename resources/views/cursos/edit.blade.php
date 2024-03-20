@extends('layouts.template')

@section('title', 'Cursos - Crear')

@section('content')
    <h1>CURSOS - FORMULARIO PARA EDITAR UN CURSO</h1>
    
    {{-- Cada vez que se envía información por metodo POST se tiene que enviar un token csrf (medida de seguridad) --}}
    <form action="{{ route('cursos.update', $curso) }}" method="POST">
        {{-- crea un input oculto que genera un token --}}
        @csrf

        {{-- html no reconoce method="put", se necesita colocar esta directiva --}}
        @method('put')

        <label for="name">Nombre:</label> <br>
        <input type="text" name="name" value="{{ $curso->name }}"> <br><br>
        <label for="description">Descripción:</label> <br>
        <textarea name="description" rows="5">{{ $curso->description }}</textarea> <br><br>
        <label for="category">Categoría:</label> <br>
        <input type="text" name="category" value="{{ $curso->category }}"> <br><br>
        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection