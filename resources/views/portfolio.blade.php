@extends('layout')

@section('title', 'Portfolio')

@section('content')
	<h1>Portafolio</h1>
	<ul>

		@forelse($portfolio as $portfolioItem)
			<li>{{ $portfolioItem['title'] }} {{$loop->last? 'ultimo': ''}}</pre></li>
		@empty
			<li>No hay proyectos para mostrar</li>
		@endforelse
	</ul>
@endsection
