<body class="body">



<div class="frmcreateProyecto">
    <br>
    <h3>Editar Piloto</h3>

    <br>
    {{ Form::open(array('url' => "proyectos/$proyecto->id/update")) }}

    {{ Form::label('nombre_proyecto', 'Nombre del proyecto') }}
    {{ Form::text('nombre_proyecto', $proyecto->nombre_proyecto) }}
    <br>
    <br>
    <br>
    {{ Form::label('titulo', 'Director de Proyecto') }}
    <br>
    <br>

    <div class="lblDir">{{ Form::label('nombre_director_proyecto', 'Nombre') }}</div>    
    <div class="txtNombre">{{ Form::text('nombre_director_proyecto', $proyecto->nombre_director_proyecto) }}</div>
    <br>
    <div class="lblNombre">{{ Form::label('apellido1_director_proyecto', 'Apellido 1') }}</div>
    <div class="txtNombre" >{{ Form::text('apellido1_director_proyecto', $proyecto->apellido1_director_proyecto) }}</div>
    <br>
    <div class="lblNombre">{{ Form::label('apellido2_director_proyecto', 'Apellido 2') }}</div>
    <div class="txtNombre">{{ Form::text('apellido2_director_proyecto', $proyecto->apellido2_director_proyecto) }}</div>
    <br>
    <br>    
    {{ Form::label('patrocinador', 'Patrocinador') }}
    <br>
    <br>
    <div class="lblDir">{{ Form::label('nombre_patrocinador', 'Nombre') }}</div>
    <div class="txtNombre">{{ Form::text('nombre_patrocinador', $proyecto->nombre_patrocinador) }}</div>
    <br>
    <br>
    {{ Form::label('detalle', 'Detalle proyecto') }}
    <br>
    <br>
    <div class="lblMonPro">{{ Form::label('monto_proyecto', 'Monto Proyecto') }}</div>
    <div class="numMonto">{{ Form::number('monto_proyecto', $proyecto->monto_proyecto) }}</div>

    <div class="lblPresupuesto">{{ Form::label('presupuesto_proyecto', 'Presupuesto') }}</div>
    <div class="numPresupuesto">{{ Form::number('presupuesto_proyecto', $proyecto->presupuesto_proyecto) }}</div>

    <div class="lblMoneda" >{{ Form::label('moneda', 'Moneda') }}</div>
    <div class="moneda">{{ Form::select('moneda', array('Colones' => 'Colones', 'Dolares' =>'Dolares'),$proyecto->moneda ) }}</div>
    <br>
    <br>
    <div>{{ Form::label('observaciones', 'Observaciones') }}</div>
    <div>{{ Form::textarea('observaciones', $proyecto->observaciones) }}</div>
    <br>
    <br>
    <div class="btnCreate">{{Form::submit('Guardar', array('class' => 'btn btn-default'))}}</div>
     <div class="btnback">{{ HTML::linkAction('ProyectoController@index', 'Back', array(), array('class' => 'btn btn-default')) }}</div>
    <br>

{{ Form::close() }}   
    
</div>
</body>         
    
