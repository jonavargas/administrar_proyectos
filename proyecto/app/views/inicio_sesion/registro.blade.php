<body class="body">


<div class="frmlogin">
	{{ Form::open(array('url' => 'registro')) }}
		<br>
		<h1>Registro</h1>
		<br>
		<label for="usuario"><h4><strong class= "glyphicon glyphicon-user lblUser"> Usuario:</strong></h4></label>
		<br>
		<div class= "email">{{Form::text('usuario', Input::old('usuario'), array('placeholder' => 'Usuario', 'required' => 'true'))}}</div>
		
		<br>
		<label for="password"><h4><strong class="glyphicon glyphicon-credit-card lblEmail1"> Contraseña:</strong></h4></label>
		<br>
		<div class="password">{{ Form::password('password', array('placeholder' => 'Contraseña', 'required' => 'true')) }}</div>
		<br>
		<br>
		<div class="submit">{{ Form::submit('Registrar', array('class' => 'btn btn-default'))}}</div>
		<br>
{{ Form::close() }}

	


</div>


</body>