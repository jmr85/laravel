@extends('layout')

@section('title', __('Create'))

@section('content')
	<h1>@lang('Create')</h1>
	<form method="POST" action="{{ route('projects.store') }}">
		@csrf
		<input type='text' name="title"><br>
		<input type='text' name="url" ><br>
		<textarea name="description"></textarea><br>
		<button>@lang('Send')</button>
	</form>
@endsection