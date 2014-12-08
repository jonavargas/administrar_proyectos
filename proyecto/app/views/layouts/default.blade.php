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
			<div class="btn-group group_1" role="group">
				{{ HTML::linkAction('UserController@index', 'Login', array(), array('class' => 'btn btn-info')) }}				
				{{ HTML::linkAction('ProyectoController@index', 'Proyecto', array(), array('class' => 'btn btn-info')) }}
				{{ HTML::linkAction('RecursoHumanoController@index', 'Recurso Humano', array(), array('class' => 'btn btn-info')) }}
				{{ HTML::linkAction('InteresadosController@index', 'Interesados', array(), array('class' => 'btn btn-info')) }}
				{{ HTML::linkAction('TipoComunicacionController@index', 'Tipo de Comunicacion', array(), array('class' => 'btn btn-info')) }}
				{{ HTML::linkAction('ComunicacionesController@index', 'Comunicaciones', array(), array('class' => 'btn btn-info')) }}
				{{ HTML::linkAction('RiesgosController@index', 'Riesgo Proyecto', array(), array('class' => 'btn btn-info')) }}
				{{ HTML::linkAction('AlcanceProyectoController@index', 'Alcances Proyectos', array(), array('class' => 'btn btn-info')) }}
				{{ HTML::linkAction('AdquisicionesController@index', 'Adquisiciones', array(), array('class' => 'btn btn-info')) }}
				{{ HTML::linkAction('CronogramaController@index', 'Cronograma', array(), array('class' => 'btn btn-info')) }}
				{{ HTML::linkAction('CostoController@index', 'Costos', array(), array('class' => 'btn btn-info')) }}				
			</div>
		<?php
			}				
		?>

		<?php
			if (Auth::check()) {					
		?>		
			<div class="btn-group group_2" role="group">
				{{ HTML::linkAction('UserController@create', 'Registro', array(), array('class' => 'btn btn-info')) }}
				{{ HTML::linkAction('ProyectoController@index', 'Proyecto', array(), array('class' => 'btn btn-info')) }}				
				{{ HTML::linkAction('RecursoHumanoController@index', 'Recurso Humano', array(), array('class' => 'btn btn-info')) }}
				{{ HTML::linkAction('InteresadosController@index', 'Interesados', array(), array('class' => 'btn btn-info')) }}
				{{ HTML::linkAction('TipoComunicacionController@index', 'Tipo de Comunicacion', array(), array('class' => 'btn btn-info')) }}
				{{ HTML::linkAction('ComunicacionesController@index', 'Comunicaciones', array(), array('class' => 'btn btn-info')) }}
				{{ HTML::linkAction('RiesgosController@index', 'Riesgo Proyecto', array(), array('class' => 'btn btn-info')) }}
				{{ HTML::linkAction('AlcanceProyectoController@index', 'Alcances Proyectos', array(), array('class' => 'btn btn-info')) }}
				{{ HTML::linkAction('AdquisicionesController@index', 'Adquisiciones', array(), array('class' => 'btn btn-info')) }}
				{{ HTML::linkAction('CronogramaController@index', 'Cronograma', array(), array('class' => 'btn btn-info')) }}
				{{ HTML::linkAction('CostoController@index', 'Costos', array(), array('class' => 'btn btn-info')) }}
				{{ HTML::linkAction('ConsultasController@index', 'Consultas', array(), array('class' => 'btn btn-info')) }}				
			</div>
			<div class="lnk_logout">				
				{{ HTML::linkAction('UserController@logout', 'Cerrar Session', array(), array('class' => 'btn btn-warning')) }}
			</div>
		<?php 
				
			}
		?>
	
	{{ $content }}
</body>
</html>
{{HTML::script('js/js.js');}}