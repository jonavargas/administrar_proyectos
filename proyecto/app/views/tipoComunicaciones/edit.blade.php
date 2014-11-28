<h3>Editar Tipo de Comunicación</h3>

{{ Form::open(array('url' => "tipoComunicaciones/$tipo_comunicacion->id/update")) }}

    {{ Form::label('tipo_comunicacion', 'Tipo Comunicacion') }}
    {{ Form::select('tipo_comunicacion', array('Teléfono' => 'Teléfono', 'Email' => 'Email',
     'Reunion Presencial' => 'Reunion Presencial','Video Llamada' => 'Video Llamada',
     'Otro' => 'Otro'), $tipo_comunicacion->tipo_comunicacion,array('id' => 'combobox')) }}

    {{ Form::label('detalle', 'Detalle del tipo de comunicación') }}
    {{ Form::textArea('detalle', $tipo_comunicacion->detalle) }}

    {{ Form::label('proyecto_id', 'Proyectos') }}   

    <select name="proyecto">
        @foreach($proyectos as $proyecto)
            <option value={{$proyecto->id}}>{{$proyecto->nombre_proyecto}}</option>
        @endforeach
    </select>


    {{Form::submit('Salvar', array())}}

{{ Form::close() }}
