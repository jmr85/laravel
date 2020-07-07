@extends('layout')

@section('title', __('Edit'))

@section('content')

	@if($errors->any())
		@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
		@endforeach
	@endif
	
	<h1>@lang('Edit')</h1>
	<form method="POST" action="{{ route('projects.update', $project) }}">
		@csrf 
		@method('PATCH')
		
		<label>
			Titulo de proyecto <br/>
		<input type='text' name="title" value="{{$project->title}}"><br>
		</label>
		<label>
			URL del proyecto <br/>
			<input type='text' name="url" value="{{$project->url}}"><br>
		</label>
		<label>
			Descripcion del proyecto <br/>
			<textarea name="description">{{$project->description}}</textarea><br>
		</label>
		<button>@lang('Update')</button>
	</form>
@endsection