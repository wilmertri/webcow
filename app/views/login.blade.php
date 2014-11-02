<!DOCTYPE hmtl>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
	</head>
	<body>
		 {{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
        @if(Session::has('mensaje_error'))
            {{ Session::get('mensaje_error') }}
        @endif
        {{ Form::open(array('url' => '/login')) }}
            {{ Form::label('email', 'Correo electronico') }}
            {{ Form::text('email', Input::old('email')); }}
            {{ Form::label('contraseña', 'Contraseña') }}
            {{ Form::password('password'); }}
            {{ Form::label('lblRememberme', 'Recordar contraseña') }}
            {{ Form::checkbox('rememberme', true) }}
            {{ Form::submit('Enviar') }}
        {{ Form::close() }} 
    </body>        
</html>