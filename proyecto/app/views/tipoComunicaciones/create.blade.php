<h3>Nuevo Tipo de Comunicacion</h3>

{{ Form::open(array('url' => 'tipoComunicaciones')) }}
    
    {{ Form::label('tipo_comunicacion', 'Tipo Comunicacion') }}
    {{ Form::select('tipo_comunicacion', array('Teléfono' => 'Teléfono', 'Email' => 'Email',
     'Reunion Presencial' => 'Reunion Presencial','Video Llamada' => 'Video Llamada',
     'Otro' => 'Otro'), null,array('id' => 'combobox')) }}

    {{ Form::label('detalle', 'Detalle del tipo de comunicación') }}
    {{ Form::textArea('detalle', '') }}

    {{ Form::label('proyecto_id', 'Proyectos') }}
    
    <select name="proyecto">
        @foreach($proyectos as $proyecto)
            <option value={{$proyecto->id}}>{{$proyecto->nombre_proyecto}}</option>
        @endforeach
    </select>


    {{Form::submit('Crear', array())}}

{{ Form::close() }}
