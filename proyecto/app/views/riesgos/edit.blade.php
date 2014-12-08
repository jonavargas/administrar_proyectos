<body class="body">
    <div class="frmcreate">
        <br>
        <h3>Editar Riesgo</h3>

{{ Form::open(array('url' => "riesgos/$riesgo->id/update")) }}
    <br>
    <div class="lblNonRiesgo">{{ Form::label('nombre', 'Nombre') }}</div>
    <div class="lblRiesgo">{{ Form::text('nombre', $riesgo->nombre) }}</div>
    <br>
    <br>
    <div class="lblComunicacion">{{ Form::label('descripcion_', 'Descripción') }}</div>
    <div class="lblRiesgo">{{ Form::textarea('descripcion', $riesgo->descripcion, ['size' => '18x3']) }}</div>
    <br>
    <br>
    <div class="lblSolucion">{{ Form::label('solucion', 'Solución') }}</div>
    <div class="lblRiesgo">{{ Form::text('solucion', $riesgo->solucion) }}</div>
    <br>
    <br>
    <div class="lblProSolucion">{{ Form::label('proyecto_id', 'Proyecto') }}</div>
    <div class="cmbProyecto">
        <select name="proyecto">
        @foreach($proyectos as $proyecto)
            <option value={{$proyecto->id}}>{{$proyecto->nombre_proyecto}}</option>
        @endforeach
    </select>
    </select>        
    </div>
    <br>
    <br>
    <div class="btnCreate">{{Form::submit('Guardar', array('class' => 'btn btn-default'))}}</div>
    <div class="btnbackSol">{{ HTML::linkAction('RiesgosController@index', 'Back', array(), array('class' => 'btn btn-default')) }}</div>
    <br>
{{ Form::close() }}
        
    </div>
</body>  
  