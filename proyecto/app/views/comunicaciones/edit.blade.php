<body class="body">
    <div class="frmcreate">
    <br>        
    <h3>Editar Comunicación</h3>
    <br>
    {{ Form::open(array('url' => "comunicaciones/$comunicaciones->id/update")) }}
    
    <div class="lblComunicacion">{{ Form::label('nombre_contacto', 'Nombre Contacto') }}</div>
    <div class="cbmComunicacion">{{ Form::text('nombre_contacto', $comunicaciones->nombre_contacto) }}</div>
    <br>
    <br>
    <div class="lblRecursoPA">{{ Form::label('apellido1_contacto', 'Primer Apellido') }}</div>
    <div class="cbmComunicacion">{{ Form::text('apellido1_contacto', $comunicaciones->apellido1_contacto) }}</div>
    <br>
    <br>
    <div class="lblRecursoSA">{{ Form::label('apellido2_contacto', 'Segundo Apellido' ) }}</div>
    <div class="cbmComunicacion">{{ Form::text('apellido2_contacto', $comunicaciones->apellido2_contacto) }}</div>
    <br>
    <br>
    {{ Form::label('metodo_comunicacion', 'Metodo Comunicación') }}
    {{ Form::text('metodo_comunicacion', $comunicaciones->metodo_comunicacion) }}
    <br>
    <br>
    <div class="lblRecursoSA">{{ Form::label('tipo_comunicacion_id', 'Tipo Comunicación') }}</div>
    
    <div class="cbmComunicacion">
        
        <select name="tipoComunicacion">
        
        @foreach($tc as $tipoComunicacion)
            <option value={{$tipoComunicacion->id}}>{{$tipoComunicacion->tipo_comunicacion}}</option>
        @endforeach
    </select>
    </select>
    </div>
    <br>
    <br>
    <div class="btnCreate">{{Form::submit('Guardar', array('class' => 'btn btn-default'))}}</div>
    <div class="btnRegresar">{{ HTML::linkAction('ComunicacionesController@index', 'Back', array(), array('class' => 'btn btn-default')) }}</div>
    <br>
{{ Form::close() }}
    </div>
</body>

    