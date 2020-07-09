@extends('layout')

@section('title', 'Home')

@section('content')
	<h1>Home</h1>

	@auth
		{{ auth()->user()->name }}
	@endauth

@endsection




