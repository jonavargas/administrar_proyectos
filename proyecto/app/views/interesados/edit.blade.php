<body class="body">
    <div class="frmcreate">
    <br>
    <h3 class="titulos">Editar Interesado</h3>
    <br>
    {{ Form::open(array('url' => "interesados/$interesado->id/update")) }}
    
        <div class="lblRecursos">{{ Form::label('nombre', 'Nombre') }}</div>
        <div class="txtRecursos">{{ Form::text('nombre', $interesado->nombre) }}</div>
        <br>
        <br>
        <div class="lblRecursoPA">{{ Form::label('apellido1', 'Primer Apellido') }}</div>
        <div class="txtRecursos">{{ Form::text('apellido1', $interesado->apellido1) }}</div>
        <br>
        <br>
        <div class="lblRecursoSA">{{ Form::label('apellido2', 'Segundo Apellido ') }}</div>
        <div class="txtRecursos">{{ Form::text('apellido2', $interesado->apellido2) }}</div>
        <br>
        <br>
        <div class="lblTelefono">{{ Form::label('telefono', 'Teléfono') }}</div>
        <div class="txtRecursos">{{ Form::text('telefono', $interesado->telefono) }}</div>
        <br>
        <br>
        <div class="lblDescripcion">{{ Form::label('descripcion', 'Descripción') }}</div>
        <div class="txtRecursos">{{ Form::textarea('descripcion', $interesado->descripcion, ['size' => '18x3']) }}</div>
        <br>
        <br>
        <div class="lblProyecto">{{ Form::label('proyecto_id', 'Proyecto') }}</div>
        <div class="cmbProyecto">
            <select name="proyecto">
            @foreach($proyectos as $proyecto)
                 <option value={{$proyecto->id}}>{{$proyecto->nombre_proyecto}}</option>
            @endforeach
        </select>            
        </div>
          <br>
        <br>
        <div class="btnCreate">{{Form::submit('Guardar', array('class' => 'btn btn-default'))}}</div>
        <div class="btnRegresar">{{ HTML::linkAction('InteresadosController@index', 'Back', array(), array('class' => 'btn btn-default')) }}</div>
        <br>
{{ Form::close() }}
        
    </div>
</body>