<h3>Nuevo Riesgo</h3>

{{ Form::open(array('url' => 'riesgos')) }}
    
    {{ Form::label('nombre', 'Nombre') }}
    {{ Form::text('nombre', '') }}

    {{ Form::label('descripcion_', 'Descripción') }}
    {{ Form::text('descripcion', '') }}

    {{ Form::label('solucion', 'Solución') }}
    {{ Form::text('solucion', '') }}

    {{ Form::label('proyecto_id', 'Proyectos') }}
    
    <select name="proyecto">
        @foreach($proyectos as $proyecto)
            <option value={{$proyecto->id}}>{{$proyecto->nombre_proyecto}}</option>
        @endforeach
    </select>


    {{Form::submit('Crear', array())}}

{{ Form::close() }}