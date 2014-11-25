<h3>Editar Proyecto</h3>

{{ Form::open(array('url' => "interesados/$interesado->id/update")) }}

    {{ Form::label('nombre', 'Nombre') }}
    {{ Form::text('nombre', $interesado->nombre) }}

    {{ Form::label('apellido1', 'Apellido 1') }}
    {{ Form::text('apellido1', $interesado->apellido1) }}

    {{ Form::label('apellido2', 'Apellido') }}
    {{ Form::text('apellido2', $interesado->apellido2) }}
    
    {{ Form::label('telefono', 'Telefono') }}
    {{ Form::text('telefono', $interesado->telefono) }}

    {{ Form::label('descripcion', 'Descripcion') }}
    {{ Form::text('descripcion', $interesado->descripcion) }}

    {{ Form::label('proyecto_id', 'Proyectos') }}   

    <select name="proyecto">
        @foreach($proyectos as $proyecto)
            <option value={{$proyecto->id}}>{{$proyecto->nombre_proyecto}}</option>
        @endforeach
    </select>


    {{Form::submit('Salvar', array())}}

{{ Form::close() }}
