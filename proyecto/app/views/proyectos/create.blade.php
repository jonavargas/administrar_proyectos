<body class="body">



<div class="frmcreateProyecto">
    <br>
    <h3>Nuevo Proyecto</h3>
    <br>
    {{ Form::open(array('url' => 'proyectos')) }}

    {{ Form::label('nombre_proyecto', 'Nombre del proyecto') }}
    {{ Form::text('nombre_proyecto', '', array('placeholder' => 'Nombre del Proyecto', 'required' => 'true')) }}
    <br>
    <br>
    <br>
    {{ Form::label('titulo', 'Director de Proyecto') }}
    <br>
    <br>

    <div class="lblDir">{{ Form::label('nombre_director_proyecto', 'Nombre') }}</div>
    <div class="txtNombre">{{ Form::text('nombre_director_proyecto', '',array('placeholder' => 'Nombre director', 'required' => 'true')) }}</div>
    <br>
    <div class="lblNombre">{{ Form::label('apellido1_director_proyecto', 'Apellido 1') }}</div>
    <div class="txtNombre" >{{ Form::text('apellido1_director_proyecto', '', array('placeholder' => 'Primer apellido', 'required' => 'true')) }}</div>
    <br>
    <div class="lblNombre">{{ Form::label('apellido2_director_proyecto', 'Apellido 2') }}</div>
    <div class="txtNombre">{{ Form::text('apellido2_director_proyecto', '', array('placeholder' => 'Segundo apellido', 'required' => 'true')) }}</div>
    <br>
    <br>    
    {{ Form::label('patrocinador', 'Patrocinador') }}
    <br>
    <br>
    <div class="lblDir">{{ Form::label('nombre_patrocinador', 'Nombre') }}</div>
    <div class="txtNombre">{{ Form::text('nombre_patrocinador', '', array('placeholder' => 'Nombre del Patrocinador', 'required' => 'true')) }}</div>
    <br>
    <br>
    {{ Form::label('detalle', 'Detalle proyecto') }}
    <br>
    <br>
    <div class="lblMonPro">{{ Form::label('monto_proyecto', 'Monto Proyecto') }}</div>
    <div class="numMonto">{{ Form::number('monto_proyecto', '', array('placeholder' => 'Monto proyecto', 'required' => 'true')) }}</div>

    <div class="lblPresupuesto">{{ Form::label('presupuesto_proyecto', 'Presupuesto') }}</div>
    <div class="numPresupuesto">{{ Form::number('presupuesto_proyecto', '', array('placeholder' => 'Presupuesto', 'required' => 'true')) }}</div>

    <div class="lblMoneda" >{{ Form::label('moneda', 'Moneda') }}</div>
    <div class="moneda">{{ Form::select('moneda', array('Colones' => 'Colones', 'Dolares' => 'Dolares')) }}</div>
    <br>
    <br>
    <div>{{ Form::label('observaciones', 'Observaciones') }}</div>
    <div>{{ Form::textarea('observaciones', null, ['size' => '30x5']) }}</div>
    <br>
    <br>
    <div class="btnCreate">{{Form::submit('Crear', array('class' => 'btn btn-default'))}}</div>
     <div class="btnback">{{ HTML::linkAction('ProyectoController@index', 'Back', array(), array('class' => 'btn btn-default')) }}</div>
    <br>

{{ Form::close() }}
    
    
</div>





</body>


