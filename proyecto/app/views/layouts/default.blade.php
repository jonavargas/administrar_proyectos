<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<?php
		if (!Auth::check()) {
			echo "<a href='login'>Login</a> ";
			echo "<a href='registro'>Registro</a> ";
			echo "<a href='publica'>Publica</a> ";			
		}
		if (Auth::check()) {
			echo "<a href='publica'>Publica</a> ";
			echo "<a href='privada'>Privada</a> ";

			echo "<a href='logout'>Cerrar Session</a> ";
			echo "<h3>Usuario Logueado</h3> ";
		}
	?>
	{{ $content }}
</body>
</html>