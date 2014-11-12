<h1>Login</h1>

@if ($errors->has())
    <div class="alert-danger text-center" role="alert">
        <small>{{ $errors->first('usuario') }}</small>
        <small>{{ $errors->first('password') }}</small>
        <small>{{ $errors->first('invalid_credentials') }}</small>
    </div>
@endif
{{ Form::open(array('url' => 'login')) }}
	<label for="usuario">Usuario:</label>
	{{Form::text('usuario', Input::old('usuario'), array('placeholder' => 'Usuario', 'required' => 'true'))}}
	<br>
	<label for="password">Password:</label>
	{{ Form::password('password', array('placeholder' => 'Contraseña', 'class' => 'form-control', 'required' => 'true')) }}
	{{ Form::submit('Login', array())}}
{{ Form::close() }}