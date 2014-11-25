<!DOCTYPE html>
<html>
<head>
	<title>Proyecto</title>
	{{HTML::style('css/style.css');}}
	{{HTML::style('bootstrap/css/bootstrap.min.css');}}
	{{HTML::script('bootstrap/js/bootstrap.min.js');}}
</head>
<body>

		<?php
			if (!Auth::check()) {				
		?>
			<div class="btn-group" role="group">
				{{ HTML::linkAction('UserController@index', 'Login', array(), array('class' => 'btn btn-primary')) }}
				{{ HTML::linkAction('UserController@create', 'Registro', array(), array('class' => 'btn btn-primary')) }}
				{{ HTML::linkAction('ProyectoController@index', 'Proyecto', array(), array('class' => 'btn btn-primary')) }}
				{{ HTML::linkAction('RecursoHumanoController@index', 'Recurso Humano', array(), array('class' => 'btn btn-primary')) }}
				{{ HTML::linkAction('InteresadosController@index', 'Interesados', array(), array('class' => 'btn btn-primary')) }}
			</div>
		<?php
			}				
		?>

		<?php
			if (Auth::check()) {					
		?>		
			<div class="btn-group" role="group">
				{{ HTML::linkAction('ProyectoController@index', 'Proyecto', array(), array('class' => 'btn btn-primary')) }}
				{{ HTML::linkAction('InteresadosController@index', 'Interesados', array(), array('class' => 'btn btn-primary')) }}
				{{ HTML::linkAction('RecursoHumanoController@index', 'Recurso Humano', array(), array('class' => 'btn btn-primary')) }}
				{{ HTML::linkAction('UserController@logout', 'Cerrar Session', array(), array('class' => 'btn btn-primary')) }}
			</div>
		<?php 
				echo "<h3>Usuario Logueado</h3>";
			}
		?>
	
	{{ $content }}
</body>
</html>