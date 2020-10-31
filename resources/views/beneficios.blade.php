@extends('layout')

@section('content')

<h1>Beneficios</h1>

@auth
<a href="{{ route('beneficios.create') }}">Crear Nuevo Beneficio</a>
@endauth

<ul>


	@forelse($beneficios as $beneficiosItem)
		<li> <h3> <a href="{{  route('beneficios.show', $beneficiosItem) }}">{{ $beneficiosItem->title }}</h3></a><small>Inscripciones abiertas hasta:  {{ $beneficiosItem->vigencia  }}</small></li>
	@empty
		<li>No Hay Beneficios actualmente activos</li>
	@endforelse

	<img src="../img/horarios.jpg" alt="Beneficios">


</ul>
@endsection