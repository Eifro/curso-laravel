@extends('layouts.template')

@section('title', $curso->name)

@section('content')
    <h1>CURSOS - MOSTRAR UN CURSO</h1>
    <strong>Curso: </strong> <?= $curso->name ?> <br>
    <strong>Categoría: </strong> <?= $curso->category ?> <br><br>
    <?= $curso->description ?>
@endsection