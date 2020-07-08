@extends('layout')

@section('title', __('Edit'))

@section('content')

	@include('partials.validation-errors')
	
	<h1>@lang('Edit')</h1>
	<form method="POST" action="{{ route('projects.update', $project) }}">	 
		@method('PATCH')

		@include('projects._form', ['btnText' => __('Update')])

	</form>
@endsection