
<body class="body">
	@if ($errors->has())
    <div class="alert-danger text-center" role="alert">
        <small>{{ $errors->first('usuario') }}</small>
        <small>{{ $errors->first('password') }}</small>
        <small>{{ $errors->first('invalid_credentials') }}</small>
    </div>
@endif
<div class="frmlogin">

	{{ Form::open(array('url' => 'login')) }}
		<br>
		<h1>Login</h1>
		<br>
		<label for="usuario"><h4><strong class= "glyphicon glyphicon-user lblUser"> Usuario:</strong></h4></label>
		<div class= "email">{{Form::text('usuario', Input::old('usuario'), array('placeholder' => 'Usuario', 'required' => 'true'))}}</div>
		<br>
		<label for="password"><h4><strong class="glyphicon glyphicon-credit-card lblEmail"> Password:</strong></h4></label>		
		<div class="password">{{ Form::password('password', array('placeholder' => 'Contraseña', 'required' => 'true')) }}</div>
		<br>
		<br>
		<div class="submit">{{ Form::submit('Log In', array('class' => 'btn btn-default'))}}</div>
		<br>	
	{{ Form::close() }}
	 
</div>

	
</body>
