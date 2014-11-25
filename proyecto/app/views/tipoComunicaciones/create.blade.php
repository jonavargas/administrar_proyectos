<h3>Nuevo Tipo de Comunicacion</h3>

{{ Form::open(array('url' => 'tipoComunicaciones')) }}
    
    {{ Form::label('tipo_comunicacion', 'Tipo Comunicacion') }}
    {{ Form::text('tipo_comunicacion', '') }}

    {{ Form::label('detalle', 'Detalle') }}
    {{ Form::text('detalle', '') }}

    {{ Form::label('proyecto_id', 'Proyectos') }}
    
    <select name="proyecto">
        @foreach($proyectos as $proyecto)
            <option value={{$proyecto->id}}>{{$proyecto->nombre_proyecto}}</option>
        @endforeach
    </select>


    {{Form::submit('Crear', array())}}

{{ Form::close() }}
