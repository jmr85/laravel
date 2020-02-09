@extends('layout')

@section('title', 'Contact')

@section('content')
	<h1>@lang('Contact')</h1>
	<form method="POST" action="{{ route('messages.store') }}">
		@csrf
		<input name="name" placeholder="Nombre" ><br>
		{!! $errors->first('name', '<small>:message</small><br>') !!}

		<input type="text" name="email" placeholder="Email..." value="jmr@mail.com"><br>
		{!! $errors->first('email', '<small>:message</small><br>') !!}

		<input name="subject" placeholder="Asunto..." value="Asunto de prueba"><br>
		{!! $errors->first('subject', '<small>:message</small><br>') !!}

		<textarea name="content" placeholder="Mensaje...">Mensaje de prueba</textarea><br>
		{!! $errors->first('content', '<small>:message</small><br>') !!}

		<button>@lang('Send')</button>
	</form>
@endsection