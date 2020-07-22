<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Aprendible')</title>
	{{-- indicamos la escala inicial al momento de cargar la pagina, va a ser 1 o sea 100% --}}
	{{-- el ancho de la aplicacion sea el mismo ancho del dispositivo --}}
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSRF Token para axios -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
	<script src="{{ mix('/js/app.js') }}" defer></script>
</head>
<body>
	<div id="app" class="d-flex flex-column h-screen justify-content-between"><!-- lo requiere VueJS -->
		<header>
            @include('partials.nav')
            @include('partials.session-status')
        </header>
	
		<main class="py-4"> {{--padding nivel 4 para que tenga mas espacio abajo y  el costado --}}
            @yield('content')
		</main>
		
		<footer class="bg-white text-center text-black-50 py-3 shadow">
            {{ config('app.name') }} | Copyright @ {{ date('Y') }}
        </footer>
	</div>
</body>
</html>