<h1>Registro</h1>

{{ Form::open(array('url' => 'registro')) }}
	<label for="usuario">Usuario:</label>
	{{Form::text('usuario', Input::old('usuario'), array('placeholder' => 'Usuario', 'required' => 'true'))}}
	<br>
	<label for="password">Password:</label>
	{{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control', 'required' => 'true')) }}
	{{ Form::submit('Login', array())}}
{{ Form::close() }}