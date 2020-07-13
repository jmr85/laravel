<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Aprendible')</title>
	<link rel="stylesheet" href="/css/app.css">
	<script src="/js/app.js" defer></script>
</head>
<body>
	@include('partials.nav')
	
	@include('partials.session-status')

	@yield('content')
</body>
</html>



