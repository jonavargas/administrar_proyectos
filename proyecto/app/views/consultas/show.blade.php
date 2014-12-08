
        @foreach($consultas as $consulta)
			<br>
			<h3>{{ Form::label('acta_proyecto', 'Acta del Proyecto') }}</h3>

			<h4>{{ Form::label('fecha', 'Fecha') }}</h4>
            <strong>Fecha Inicio: </strong>{{$consulta->fecha_inicio}}<br>
			<strong>Fecha Fin: </strong>{{$consulta->fecha_fin}}<br>
			<strong>Duracion: </strong>{{$consulta->duracion}}<br>

			<h4>{{ Form::label('proyecto', 'Nombre Proyecto') }}</h4>
			<strong>Proyecto: </strong>{{$consulta->nombre_proyecto}}<br>

			<h4>{{ Form::label('director_proyecto', 'Director del Proyecto') }}</h4>
			<strong>Nombre: </strong>{{$consulta->nombre_director_proyecto}} {{$consulta->apellido1_director_proyecto}} {{$consulta->apellido2_director_proyecto}}<br>

			<h4>{{ Form::label('patrocinador', 'Patrocinador') }}</h4>
			<strong>Nombre: </strong>{{$consulta->nombre_patrocinador}}<br>

			<h4>{{ Form::label('monto', 'Monto de Proyecto') }}</h4>
			<strong>Monto Total: </strong>{{$consulta->monto_proyecto}}<br>
			<strong>Moneda: </strong>{{$consulta->moneda}}<br>

			<h4>{{ Form::label('rh', 'Recurso Humano') }}</h4>
			<strong>Nombre: </strong>{{$consulta->nombre_personal_requerido}} {{$consulta->apellido1_personal_requerido}} {{$consulta->apellido2_personal_requerido}}<br>
			<strong>Especialidad: </strong>{{$consulta->especialidad}}<br>

			<h4>{{ Form::label('contacto', 'Contacto Proyecto') }}</h4>
			<strong>Nombre: </strong>{{$consulta->nombre_contacto}} {{$consulta->apellido1_contacto}} {{$consulta->apellido2_contacto}}<br>
			<strong>Tipo Comunicación: </strong>{{$consulta->tipo_comunicacion}}<br>

			<h4>{{ Form::label('interesado', 'Interesado Proyecto') }}</h4>
			<strong>Nombre: </strong>{{$consulta->nombre}} {{$consulta->apellido1}} {{$consulta->apellido2}}<br>
			<strong>Telefono: </strong>{{$consulta->telefono}}<br>

			<h4>{{ Form::label('actividad', 'Actividad del Proyecto') }}</h4>
			<strong>Nombre Actividad: </strong>{{$consulta->nombre_actividad}}<br>
			<strong>Costo Actividad: </strong>{{$consulta->costo_actividad}}<br>

			<h4>{{ Form::label('adquisicion', 'Adquisición del Proyecto') }}</h4>
			<strong>Nombre Adquisición: </strong>{{$consulta->nombre_adquisicion}}<br>
			<strong>Costo Adquisición: </strong>{{$consulta->costo_adquisicion}}<br>
			
			<h4>{{ Form::label('riesgo', 'Riesgo Proyecto') }}</h4>
			<strong>Riesgo: </strong>{{$consulta->nombre_proyecto}}<br>
			
        @endforeach
        {{ HTML::linkAction('ConsultasController@index', 'Atras', array(), array('class' => 'btn btn-primary')) }}
