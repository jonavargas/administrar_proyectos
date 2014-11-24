<h3>Nuevo Proyecto</h3>

{{ Form::open(array('url' => 'recursosHumanos')) }}
    
    {{ Form::label('nombre_personal_requerido', 'Nombre Personal Requerido') }}
    {{ Form::text('nombre_personal_requerido', '') }}

    {{ Form::label('apellido1_personal_requerido', 'Apellido 1 Personal Requerido') }}
    {{ Form::text('apellido1_personal_requerido', '') }}

    {{ Form::label('apellido2_personal_requerido', 'Apellido 2 Personal Requerido') }}
    {{ Form::text('apellido2_personal_requerido', '') }}
    
    {{ Form::label('especialidad', 'Especialidad') }}
    {{ Form::text('especialidad', '') }}

    {{ Form::label('proyecto_id', 'Proyectos') }}
    
    <select name="proyecto">
        @foreach($proyectos as $proyecto)
            <option value={{$proyecto->id}}>{{$proyecto->nombre_proyecto}}</option>
        @endforeach
    </select>


    {{Form::submit('Crear', array())}}

{{ Form::close() }}

        