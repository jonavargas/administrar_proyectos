<h3>Editar Tipo de Comunicación</h3>

{{ Form::open(array('url' => "tipoComunicaciones/$tipo_comunicacion->id/update")) }}

    {{ Form::label('tipo_comunicacion', 'Tipo Comunicacion') }}
    {{ Form::text('tipo_comunicacion', $tipo_comunicacion->tipo_comunicacion) }}

    {{ Form::label('detalle', 'Detalle') }}
    {{ Form::text('detalle', $tipo_comunicacion->detalle) }}

    {{ Form::label('proyecto_id', 'Proyectos') }}   

    <select name="proyecto">
        @foreach($proyectos as $proyecto)
            <option value={{$proyecto->id}}>{{$proyecto->nombre_proyecto}}</option>
        @endforeach
    </select>


    {{Form::submit('Salvar', array())}}

{{ Form::close() }}
