@extends('layout')

@section('title', 'Portfolio')

@section('content')
	<h1>Portafolio</h1>
	<ul>

		@forelse($projects as $projectItem)
			<li>{{ $projectItem->title }} <br><small>{{ $projectItem->description }}</small><br>{{ $projectItem->created_at->format('d-m-yy') }} - {{ $projectItem->created_at->diffForHumans() }}</li><br>
		@empty
			<li>No hay proyectos para mostrar</li>
		@endforelse
		{{ $projects->links() }}
	</ul>
@endsection
