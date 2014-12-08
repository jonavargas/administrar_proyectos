<body class="body">
    <div class="frmcreate">
        <br>
        <h3 class="titulos">Nuevo Riesgo</h3>

{{ Form::open(array('url' => 'riesgos')) }}
    <br>
    <div class="lblNonRiesgo">{{ Form::label('nombre', 'Nombre') }}</div>
    <div class="lblRiesgo">{{ Form::text('nombre', '', array('placeholder' => 'Nombre', 'required' => 'true')) }}</div>
    <br>
    <br>
    <div class="lblComunicacion">{{ Form::label('descripcion_', 'Descripción') }}</div>
    <div class="lblRiesgo">{{ Form::textarea('descripcion', null, ['size' => '18x3']) }}</div>
    <br>
    <br>
    <div class="lblSolucion">{{ Form::label('solucion', 'Solución') }}</div>
    <div class="lblRiesgo">{{ Form::text('solucion', '', array('placeholder' => 'Solución', 'required' => 'true')) }}</div>
    <br>
    <br>
    <div class="lblProSolucion">{{ Form::label('proyecto_id', 'Proyectos') }}</div>
    <div class="cmbProyecto">
        <select name="proyecto">
        @foreach($proyectos as $proyecto)
            <option value={{$proyecto->id}}>{{$proyecto->nombre_proyecto}}</option>
        @endforeach
    </select>        
    </div>
    <br>
    <br>
    <div class="btnCreate">{{Form::submit('Crear', array('class' => 'btn btn-success'))}}</div>
    <div class="btnbackSol">{{ HTML::linkAction('RiesgosController@index', 'Back', array(), array('class' => 'btn btn-default')) }}</div>
    <br>
{{ Form::close() }}
        
    </div>
</body>




