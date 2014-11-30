<!DOCTYPE html>
<html>
<head>
	<title>Proyecto</title>
	{{HTML::script('js/jquery-2.1.1.min.js');}}
	{{HTML::style('bootstrap/css/bootstrap.min.css');}}
	{{HTML::script('bootstrap/js/bootstrap.min.js');}}
	{{HTML::style('css/style.css');}}
	
</head>
<body class="body">

		<?php
			if (!Auth::check()) {				
		?>
			<div class="btn-group" role="group">
				{{ HTML::linkAction('UserController@index', 'Login', array(), array('class' => 'btn btn-primary')) }}
				{{ HTML::linkAction('UserController@create', 'Registro', array(), array('class' => 'btn btn-primary')) }}
				{{ HTML::linkAction('ProyectoController@index', 'Proyecto', array(), array('class' => 'btn btn-primary')) }}
				{{ HTML::linkAction('RecursoHumanoController@index', 'Recurso Humano', array(), array('class' => 'btn btn-primary')) }}
				{{ HTML::linkAction('InteresadosController@index', 'Interesados', array(), array('class' => 'btn btn-primary')) }}
				{{ HTML::linkAction('TipoComunicacionController@index', 'Tipo de Comunicacion', array(), array('class' => 'btn btn-primary')) }}
				{{ HTML::linkAction('ComunicacionesController@index', 'Comunicaciones', array(), array('class' => 'btn btn-primary')) }}
				{{ HTML::linkAction('RiesgosController@index', 'Riesgo Proyecto', array(), array('class' => 'btn btn-primary')) }}
				{{ HTML::linkAction('AlcanceProyectoController@index', 'Alcances Proyectos', array(), array('class' => 'btn btn-primary')) }}
				{{ HTML::linkAction('AdquisicionesController@index', 'Adquisiciones', array(), array('class' => 'btn btn-primary')) }}
			</div>
		<?php
			}				
		?>

		<?php
			if (Auth::check()) {					
		?>		
			<div class="btn-group" role="group">
				{{ HTML::linkAction('ProyectoController@index', 'Proyecto', array(), array('class' => 'btn btn-primary')) }}				
				{{ HTML::linkAction('RecursoHumanoController@index', 'Recurso Humano', array(), array('class' => 'btn btn-primary')) }}
				{{ HTML::linkAction('InteresadosController@index', 'Interesados', array(), array('class' => 'btn btn-primary')) }}
				{{ HTML::linkAction('TipoComunicacionController@index', 'Tipo de Comunicacion', array(), array('class' => 'btn btn-primary')) }}
				{{ HTML::linkAction('ComunicacionesController@index', 'Comunicaciones', array(), array('class' => 'btn btn-primary')) }}
				{{ HTML::linkAction('RiesgosController@index', 'Riesgo Proyecto', array(), array('class' => 'btn btn-primary')) }}
				{{ HTML::linkAction('AlcanceProyectoController@index', 'Alcances Proyectos', array(), array('class' => 'btn btn-primary')) }}
				{{ HTML::linkAction('AdquisicionesController@index', 'Adquisiciones', array(), array('class' => 'btn btn-primary')) }}
				{{ HTML::linkAction('UserController@logout', 'Cerrar Session', array(), array('class' => 'btn btn-primary')) }}
			</div>
		<?php 
				echo "<h3>Usuario Logueado</h3>";
			}
		?>
	
	{{ $content }}
</body>
</html>