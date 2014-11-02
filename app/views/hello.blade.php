<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	{{ HTML::style('css/bootstrap.css'); }}
</head>
<body>
	<div class="container">
		<h1>Bienvenido {{ Auth::user()->email; }}</h1>
		{{ HTML::link('/logout', 'Cerrar sesión.') }}		
	</div>
	<script src="https://code.jquery.com/jquery.js"></script>
    {{ HTML::script('js/bootstrap.js'); }}
</body>
</html>
