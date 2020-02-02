<!DOCTYPE html>
<html>
<head>
	<title>Mensaje recibido</title>
</head>
<body>
	Contenido del mail
	<p>{{ $msg['name']}} - {{ $msg['email']}}</p>
	<p><strong>Asunto: {{ $msg['subject']}}</strong></p>
	<p><strong>{{ $msg['content']}}</strong></p>
</body>
</html>