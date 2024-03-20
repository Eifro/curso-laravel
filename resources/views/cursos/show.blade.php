@extends('layouts.template')

@section('title', $curso->name)

@section('content')
    <h1>CURSOS - MOSTRAR UN CURSO</h1>
    <a href="{{ route('cursos.index') }}">Ir a Cursos</a> <br>
    <a href="{{ route('cursos.edit', $curso) }}">Editar Curso</a>
    <br><br>
    <strong>Curso: </strong> <?= $curso->name ?> <br>
    <strong>Categoría: </strong> <?= $curso->category ?> <br><br>
    <?= $curso->description ?>
@endsection