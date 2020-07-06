@extends('layout')

@section('title', __('Create'))

@section('content')
	<h1>@lang('Create New Project')</h1>
	<form method="POST" action="{{ route('projects.store') }}">
		@csrf
		<label>
			Titulo de proyecto <br/>
			<input type='text' name="title"><br>
		</label>
		<label>
			URL del proyecto <br/>
			<input type='text' name="url" ><br>
		</label>
		<label>
			Descripcion del proyecto <br/>
			<textarea name="description"></textarea><br>
		</label>
		<button>@lang('Send')</button>
	</form>
@endsection