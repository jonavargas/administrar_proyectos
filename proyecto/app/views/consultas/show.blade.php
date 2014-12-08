<div class="frmCreateAlcance">
        <br>
        @foreach($consultas as $consulta)
			<br>			
			<h2 class="titulos"><strong>Acta del Proyecto</strong></h2> 
	        <br>
	        <br>

			<div class="table_fecha">
				<table class="table table-bordered">
					<tr>
						<th colspan="2" class="th"><h4>{{ Form::label('fecha', 'Fecha') }}</h4></th>
					</tr>

		            <tr><td><strong>Fecha Inicio: </strong>{{$consulta->fecha_inicio}}</td></tr>
					<tr><td><strong>Fecha Fin: </strong>{{$consulta->fecha_fin}}</td></tr>
					<tr><td><strong>Duracion: </strong>{{$consulta->duracion}}</td></tr>
				</table>
			</div>

			<div class="table_nom_pro">
				<table class="table table-bordered">
					<tr>
						<th colspan="2" class="th"><h4>{{ Form::label('proyecto', 'Nombre Proyecto') }}</h4></th>						
					</tr>					
					
		            <tr>		            	
		            	<td><strong>Proyecto: </strong>{{$consulta->nombre_proyecto}}</td>
		            </tr>
				</table>
			</div>

			<div class="table_dir_pro">
				<table class="table table-bordered">
					<tr>
						<th colspan="2" class="th"><h4>{{ Form::label('director_proyecto', 'Director del Proyecto') }}</h4></th>						
					</tr>					
					
		            <tr>		            	
		            	<td><strong>Nombre: </strong>{{$consulta->nombre_director_proyecto}} {{$consulta->apellido1_director_proyecto}} {{$consulta->apellido2_director_proyecto}}</td>
		            </tr>
				</table>
			</div>


			<div class="table_patro">
				<table class="table table-bordered">
					<tr>
						<th colspan="2" class="th"><h4>{{ Form::label('patrocinador', 'Patrocinador') }}</h4></th>
					</tr>

		            <tr><td><strong>Nombre: </strong>{{$consulta->nombre_patrocinador}}<br></td></tr>
				</table>
			</div>

			<div class="table_mon_pro">
				<table class="table table-bordered">
					<tr>
						<th colspan="2" class="th"><h4>{{ Form::label('monto', 'Monto de Proyecto') }}</h4></th>						
					</tr>					
					
		            <tr>		            	
		            	<td><strong>Monto Total: </strong>{{$consulta->monto_proyecto}}</td>
		            	<td><strong>Moneda: </strong>{{$consulta->moneda}}</td>
		            </tr>
				</table>
			</div>

			<div class="table_rh_pro">
				<table class="table table-bordered">
					<tr>
						<th colspan="2" class="th"><h4>{{ Form::label('rh', 'Recurso Humano') }}</h4></th>						
					</tr>					
					
		            <tr>		            	
		            	<td><strong>Nombre: </strong>{{$consulta->nombre_personal_requerido}} {{$consulta->apellido1_personal_requerido}} {{$consulta->apellido2_personal_requerido}}</td>
		            	<td><strong>Especialidad: </strong>{{$consulta->especialidad}}</td>
		            </tr>
				</table>
			</div>
			

			<div class="table_rh_pro">
				<table class="table table-bordered">
					<tr>
						<th colspan="2" class="th"><h4>{{ Form::label('contacto', 'Contacto Proyecto') }}</h4></th>						
					</tr>					
					
		            <tr>		            	
		            	<td><strong>Nombre: </strong>{{$consulta->nombre_contacto}} {{$consulta->apellido1_contacto}} {{$consulta->apellido2_contacto}}</td>
		            	<td><strong>Tipo Comunicación: </strong>{{$consulta->tipo_comunicacion}}</td>
		            </tr>
				</table>
			</div>

			<div class="table_rh_pro">
				<table class="table table-bordered">
					<tr>
						<th colspan="2" class="th"><h4>{{ Form::label('interesado', 'Interesado Proyecto') }}</h4></th>						
					</tr>					
					
		            <tr>		            	
		            	<td><strong>Nombre: </strong>{{$consulta->nombre}} {{$consulta->apellido1}} {{$consulta->apellido2}}</td>
		            	<td><strong>Telefono: </strong>{{$consulta->telefono}}</td>
		            </tr>
				</table>
			</div>
				

			<div class="table_rh_pro">
				<table class="table table-bordered">
					<tr>
						<th colspan="2" class="th"><h4>{{ Form::label('actividad', 'Actividad del Proyecto') }}</h4></th>						
					</tr>					
					
		            <tr>		            	
		            	<td><strong>Nombre Actividad: </strong>{{$consulta->nombre_actividad}}</td>
		            	<td><strong>Costo Actividad: </strong>{{$consulta->costo_actividad}}</td>
		            </tr>
				</table>
			</div>
			
			
			<div class="table_rh_pro">
				<table class="table table-bordered">
					<tr>
						<th colspan="2" class="th"><h4>{{ Form::label('adquisicion', 'Adquisición del Proyecto') }}</h4></th>						
					</tr>					
					
		            <tr>		            	
		            	<td><strong>Nombre Adquisición: </strong>{{$consulta->nombre_adquisicion}}</td>
		            	<td><strong>Costo Adquisición: </strong>{{$consulta->costo_adquisicion}}</td>
		            </tr>
				</table>
			</div>

			<div class="table_rh_pro">
				<table class="table table-bordered">
					<tr>
						<th colspan="2" class="th"><h4>{{ Form::label('riesgo', 'Riesgo Proyecto') }}</h4></th>						
					</tr>					
					
		            <tr>		            	
		            	<td><strong>Riesgo: </strong>{{$consulta->nombre_proyecto}}</td>		            	
		            </tr>
				</table>
			</div>			
			
        @endforeach
        {{ HTML::linkAction('ConsultasController@index', 'Atras', array(), array('class' => 'btn btn-default')) }}
        <br>
        <br>
</div>