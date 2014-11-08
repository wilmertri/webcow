@extends ('admin/layout')

@section ('title') Crear Usuarios @stop

@section ('content')

<h1>Crear Usuarios</h1>
@if ($errors->any())
    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Por favor corrige los siguentes errores:</strong>
      <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
      </ul>
    </div>
  @endif
{{ Form::model($user,array('route' => 'admin.users.store', 'method' => 'POST'), array('role' => 'form')) }}
  <div class="row">
    <div class="form-group col-md-3">
      {{ Form::label('documento', 'Cedula de Ciudadanía') }}
      {{ Form::text('documento', null, array('placeholder' => 'Introduce tu Cedula', 'class' => 'form-control')) }}
    </div>
    <div class="form-group col-md-3">
      {{ Form::label('estado', 'Estado del usuario') }}
      {{ Form::select('estado', ['Desactivo', 'Activo'], null, ['class' => 'form-control']) }}
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-3">
      {{ Form::label('nombre', 'Nombre completo') }}
      {{ Form::text('nombre', null, array('placeholder' => 'Introduce tu nombre y apellido', 'class' => 'form-control')) }}        
    </div>
    <div class="form-group col-md-3">
      {{ Form::label('email', 'Dirección de E-mail') }}
      {{ Form::text('email', null, array('placeholder' => 'Introduce tu E-mail', 'class' => 'form-control')) }}
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-3">
      {{ Form::label('telefono', 'Telefono') }}
      {{ Form::text('telefono', null, array('placeholder' => 'Introduce tu numero de telefono', 'class' => 'form-control')) }}        
    </div>
    <div class="form-group col-md-3">
      {{ Form::label('rol', 'Rol') }}
      {{ Form::text('idrol', null, array('placeholder' => 'Indica el rol del usuario', 'class' => 'form-control')) }}        
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-3">
      {{ Form::label('password', 'Contraseña') }}
      {{ Form::password('password', array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-md-3">
      {{ Form::label('password_confirmation', 'Confirmar contraseña') }}
      {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
    </div>
  </div>
  {{ Form::button('Crear usuario', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    
  
{{ Form::close() }}

@stop