@extends('layouts.template')

@section('title', 'Cursos - Home')

@section('content')
    <h1>CURSOS - PAGINA PRINCIPAL</h1>
    <a href="{{ route('cursos.create') }}">Crear Curso</a>
    {{-- Mostrar datos de la bd / @foreach es una directiva --}}
    <ul>
        @foreach ($cursos as $curso)
            <li>{{ $curso->name }}</li>
        @endforeach
    </ul>

    {{-- Muestra los números de paginas --}}
    {{ $cursos->links() }}

@endsection