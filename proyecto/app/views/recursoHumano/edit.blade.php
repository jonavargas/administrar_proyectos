<h3>Editar Piloto</h3>

{{ Form::open(array('url' => "proyectos/$proyecto->id/update")) }}

    {{ Form::label('nombre_director_proyecto', 'Nombre') }}
    {{ Form::text('nombre_director_proyecto', $proyecto->nombre_director_proyecto) }}

    {{ Form::label('apellido1_director_proyecto', 'Apellido 1') }}
    {{ Form::text('apellido1_director_proyecto', $proyecto->apellido1_director_proyecto) }}

    {{ Form::label('apellido2_director_proyecto', 'Apellido 2') }}
    {{ Form::text('apellido2_director_proyecto', $proyecto->apellido2_director_proyecto) }}

    {{ Form::label('nombre_patrocinador', 'Patrocinador') }}
    {{ Form::text('nombre_patrocinador', $proyecto->nombre_patrocinador) }}

    {{ Form::label('monto_proyecto', 'Monto Proyeto') }}
    {{ Form::number('monto_proyecto', $proyecto->monto_proyecto) }}

    {{ Form::label('presupuesto_proyecto', 'Presupuesto') }}
    {{ Form::number('presupuesto_proyecto', $proyecto->presupuesto_proyecto) }}

    {{ Form::label('moneda', 'Moneda') }}
    {{ Form::select('moneda', array('Colones' => 'Colones', 'Dolares' =>'Dolares'),$proyecto->moneda ) }}
            
    {{ Form::label('observaciones', 'Observaciones') }}
    {{ Form::textarea('observaciones', $proyecto->observaciones) }}

    {{Form::submit('Salvar', array())}}

{{ Form::close() }}
