@extends('layout')

@section('title', 'Crear Beneficio')

@section('content')

<h1>Crear Beneficios</h1>

<form method="POST" action="{{ route('beneficios.store') }}">
    @csrf
    <label for="">
        Nombre del Beneficio <br>
        <input type="text" name='title'>
    </label>
    <br>
    <label for="">
        Descripción del Beneficio <br>
        <textarea name="description"> </textarea>
    </label>
    <br>
    <label for="">
        Requisitos del Beneficio <br>
        <input type="text" name='requisitos'>
    </label>
    <br>
    <label for="">
        Vigencia <br>
        <input type="date" name='vigencia' placeholder="Ingrese la fecha hasta cuando está vigente el beneficio">
    </label>
    <br>
    <br>
    <button>Crear Nuevo Beneficio</button>
</form>
<br>
<hr>
<br>
@endsection

