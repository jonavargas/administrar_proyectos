<body class="body">
    <div class="frmcreate">
    <br>        
    <h3>Nueva Comunicación</h3>
    <br>
    {{ Form::open(array('url' => 'comunicaciones')) }}
    
    <div class="lblComunicacion">{{ Form::label('nombre_contacto', 'Nombre Contacto') }}</div>
    <div class="cbmComunicacion">{{ Form::text('nombre_contacto', '') }}</div>
    <br>
    <br>
    <div class="lblRecursoPA">{{ Form::label('apellido1_contacto', 'Primer Apellido') }}</div>
    <div class="cbmComunicacion">{{ Form::text('apellido1_contacto', '') }}</div>
    <br>
    <br>
    <div class="lblRecursoSA">{{ Form::label('apellido2_contacto', 'Segundo Apellido' ) }}</div>
    <div class="cbmComunicacion">{{ Form::text('apellido2_contacto', '') }}</div>
    <br>
    <br>
    {{ Form::label('metodo_comunicacion', 'Metodo Comunicación') }}
    {{ Form::text('metodo_comunicacion', '') }}
    <br>
    <br>
    <div class="lblRecursoSA">{{ Form::label('tipo_comunicacion_id', 'Tipo Comunicación') }}</div>
    
    <div class="cbmComunicacion">
        
        <select name="tipoComunicacion">
        @foreach($tipoComunicaciones as $tipoComunicacion)
            <option value={{$tipoComunicacion->id}}>{{$tipoComunicacion->tipo_comunicacion}}</option>
        @endforeach
    </select>
        

    </div>
    

    <br>
    <br>
    <div class="btnCreate">{{Form::submit('Crear', array('class' => 'btn btn-default'))}}</div>
    <div class="btnRegresar">{{ HTML::linkAction('ComunicacionesController@index', 'Back', array(), array('class' => 'btn btn-default')) }}</div>
    <br>
{{ Form::close() }}


    </div>
</body>



        