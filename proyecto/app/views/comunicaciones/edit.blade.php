<h3>Editar Recurso Humano</h3>

{{ Form::open(array('url' => "comunicaciones/$comunicaciones->id/update")) }}

    {{ Form::label('nombre_contacto', 'Nombre Contacto') }}
    {{ Form::text('nombre_contacto', $comunicaciones->nombre_contacto) }}

    {{ Form::label('apellido1_contacto', 'Apellido 1') }}
    {{ Form::text('apellido1_contacto', $comunicaciones->apellido1_contacto) }}

    {{ Form::label('apellido2_contacto', 'Apellido 2' ) }}
    {{ Form::text('apellido2_contacto', $comunicaciones->apellido2_contacto) }}
    
    {{ Form::label('metodo_comunicacion', 'Metodo de Comunicación') }}
    {{ Form::text('metodo_comunicacion', $comunicaciones->metodo_comunicacion) }}

    {{ Form::label('tipo_comunicacion_id', 'Tipo Comunicación') }}
    <select name="tipoComunicacion">
        @foreach($tc as $tipoComunicacion)
            <option value={{$tipoComunicacion->id}}>{{$tipoComunicacion->tipo_comunicacion}}</option>
        @endforeach
    </select>

    {{Form::submit('Salvar', array())}}

{{ Form::close() }}
