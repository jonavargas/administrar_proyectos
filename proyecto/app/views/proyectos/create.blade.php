<h3>Nuevo Proyecto</h3>

{{ Form::open(array('url' => 'proyectos')) }}
    
    {{ Form::label('titulo', 'Director de Proyecto') }}

    {{ Form::label('nombre_director_proyecto', 'Nombre') }}
    {{ Form::text('nombre_director_proyecto', '') }}

    {{ Form::label('apellido1_director_proyecto', 'Apellido 1') }}
    {{ Form::text('apellido1_director_proyecto', '') }}

    {{ Form::label('apellido2_director_proyecto', 'Apellido 2') }}
    {{ Form::text('apellido2_director_proyecto', '') }}
    
    {{ Form::label('patrocinador', 'Patrocinador') }}

    {{ Form::label('nombre_patrocinador', 'Nombre') }}
    {{ Form::text('nombre_patrocinador', '') }}

    {{ Form::label('monto_proyecto', 'Monto Proyeto') }}
    {{ Form::number('monto_proyecto', '') }}

    {{ Form::label('presupuesto_proyecto', 'Presupuesto') }}
    {{ Form::number('presupuesto_proyecto', '') }}

    {{ Form::label('moneda', 'Moneda') }}
    {{ Form::select('moneda', array('Colones' => 'Colones', 'Dolares' => 'Dolares')) }}
    

    {{ Form::label('observaciones', 'Observaciones') }}
    {{ Form::textarea('observaciones', '') }}

    {{Form::submit('Crear', array())}}

{{ Form::close() }}
