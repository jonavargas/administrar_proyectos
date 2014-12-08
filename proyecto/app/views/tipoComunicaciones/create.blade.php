<body class="body">
    <div class="frmcreate">
        <br>
        <h3>Nuevo Tipo de Comunicacion</h3>
        <br>
        {{ Form::open(array('url' => 'tipoComunicaciones')) }}
    
            <div class="lblComunicacion">{{ Form::label('tipo_comunicacion', 'Tipo Comunicacion') }}</div>
            <div class="cbmComunicacion">{{ Form::select('tipo_comunicacion', array('Teléfono' => 'Teléfono', 'Email' => 'Email',
                                'Reunion Presencial' => 'Reunion Presencial','Video Llamada' => 'Video Llamada',
                                'Otro' => 'Otro'), null,array('id' => 'combobox')) }}</div>
            <br>                   
            <br>
            <div class="lblDetalle" >{{ Form::label('detalle', 'Detalle del tipo de comunicación') }}</div>
            <div>{{ Form::textarea('detalle', '', ['size' => '38x5']) }}</div>
            <br>
            <div class="lblProyectoCom">{{ Form::label('proyecto_id', 'Proyecto') }}</div>
    
            <div class="cmbProyecto">
                <select name="proyecto">
                    @foreach($proyectos as $proyecto)
                        <option value={{$proyecto->id}}>{{$proyecto->nombre_proyecto}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <br>
            <div class="btnCreate">{{Form::submit('Crear', array('class' => 'btn btn-default'))}}</div>
            <div class="btnRegresar">{{ HTML::linkAction('TipoComunicacionController@index', 'Back', array(), array('class' => 'btn btn-default')) }}</div>
            <br>        
        {{ Form::close() }}
        
    </div>
    
</body>

