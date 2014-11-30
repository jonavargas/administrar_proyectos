<h3>Editar Adquisición</h3>

{{ Form::open(array('url' => "adquisiciones/$adquisiciones->id/update")) }}

    {{ Form::label('nombre_adquisicion', 'Nombre Adquisición') }}
    {{ Form::text('nombre_adquisicion', $adquisiciones->nombre_adquisicion) }}

    {{ Form::label('costo_adquisicion', 'Costo Adquisición') }}
    {{ Form::number('costo_adquisicion', $adquisiciones->costo_adquisicion) }}

    {{Form::submit('Salvar', array())}}

{{ Form::close() }}
