<h3>Nuevo Interesado</h3>

{{ Form::open(array('url' => 'interesados')) }}
    
    {{ Form::label('nombre', 'Nombre') }}
    {{ Form::text('nombre', '') }}

    {{ Form::label('apellido1', 'Apellido 1') }}
    {{ Form::text('apellido1', '') }}

    {{ Form::label('apellido2', 'Apellido 2') }}
    {{ Form::text('apellido2', '') }}
    
    {{ Form::label('telefono', 'Telefono') }}
    {{ Form::text('telefono', '') }}

    {{ Form::label('descripcion', 'Descripcion') }}
    {{ Form::text('descripcion', '') }}

    {{ Form::label('proyecto_id', 'Proyectos') }}
    
    <select name="proyecto">
        @foreach($proyectos as $proyecto)
            <option value={{$proyecto->id}}>{{$proyecto->nombre_proyecto}}</option>
        @endforeach
    </select>


    {{Form::submit('Crear', array())}}

{{ Form::close() }}