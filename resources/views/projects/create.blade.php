@extends('layout')

@section('title', __('Create'))

@section('content')

	@include('partials.validation-errors')
	
	<h1>@lang('Create New Project')</h1>
	<form method="POST" action="{{ route('projects.store') }}">
	
		@include('projects._form', ['btnText' => __('Send') ])
	</form>
@endsection