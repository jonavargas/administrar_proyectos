<h3>Nueva Comunicación</h3>

{{ Form::open(array('url' => 'comunicaciones')) }}
    
    {{ Form::label('nombre_contacto', 'Nombre Contacto') }}
    {{ Form::text('nombre_contacto', '') }}

    {{ Form::label('apellido1_contacto', 'Apellido 1') }}
    {{ Form::text('apellido1_contacto', '') }}

    {{ Form::label('apellido2_contacto', 'Apellido 2' ) }}
    {{ Form::text('apellido2_contacto', '') }}
    
    {{ Form::label('metodo_comunicacion', 'Metodo de Comunicación') }}
    {{ Form::text('metodo_comunicacion', '') }}

    {{ Form::label('tipo_comunicacion_id', 'Tipo Comunicación') }}
    
    <select name="tipoComunicacion">
        @foreach($tipoComunicaciones as $tipoComunicacion)
            <option value={{$tipoComunicacion->id}}>{{$tipoComunicacion->tipo_comunicacion}}</option>
        @endforeach
    </select>


    {{Form::submit('Crear', array())}}

{{ Form::close() }}

        