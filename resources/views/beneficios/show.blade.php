
@extends ('layout')

@section ('title', 'Beneficio | '. $beneficio->title)

@section('content')
<hr>
<h1> {{ $beneficio->title }}</h1>


<ul> {{ $beneficio->description }}</ul>
<ul> {{ $beneficio->requisitos }}</ul>
<ul> La convocatoria está abierta hasta el {{ $beneficio->vigencia }}</ul>

    <a href="{{ route('beneficios.index') }}">Volver</a>

@endsection