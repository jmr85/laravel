@extends('layout')

@section('title', 'Portfolio')

@section('content')
	<h1>Portafolio</h1>
	<ul>

		@forelse($portfolio as $portfolioItem)
			<li>{{ $portfolioItem->title }} <br><small>{{ $portfolioItem->description }}</small></li><br>
		@empty
			<li>No hay proyectos para mostrar</li>
		@endforelse
	</ul>
@endsection
