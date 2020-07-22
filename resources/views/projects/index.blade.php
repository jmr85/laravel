@extends('layout')

@section('title', 'Portfolio')

@section('content')
	<div class="container">
		<div class="d-flex justify-content-between align-items-center mb-3">
			<h1 class="display-4 mb-0">@lang('Projects')</h1>			
			@auth
				<a class="btn btn-primary" href="{{route('projects.create')}}">@lang('Create New Project')</a>
			@endauth
		</div>
		<p class="lead text-secondary">
			Proyectos realizados lorem ipsum dolor sit amet, consectetur adipisicing elit.
		</p>
		<ul class="list-group">
			@forelse($projects as $projectItem)
				<li class="list-group-item border-0 mb-3 shadow-sm">				
					<a 	
						class="text-secondary d-flex justify-content-between align-items-center align-items-center"
						href="{{ route('projects.show', $projectItem) }}"
					>
						<span class="font-weight-bold"> {{--  para que no se vea tan fuerte se cambia la fuente --}}
							{{ $projectItem->title }}
						</span><br>
						{{-- <span class="text-secondary font-weight-bold">
							{{ $projectItem->description }}
						</span><br> --}}
						<span class="text-black-50"> {{--un poco mas claro que text-secondary--}}
							{{ $projectItem->created_at->format('d-m-yy') }} - {{ $projectItem->created_at->diffForHumans() }}
						</span>
					</a>
				</li>
			@empty
				<li class="list-group-item border-0 mb-3 shadow-sm">
				 No hay proyectos para mostrar
				</li>
			@endforelse
			{{ $projects->links() }}
		</ul>
	</div>
@endsection
