<h3>Editar Adquisición</h3>

{{ Form::open(array('url' => "adquisiciones/$adquisiciones->id/update")) }}

    {{ Form::label('nombre_adquisicion', 'Nombre Adquisición') }}
    {{ Form::text('nombre_adquisicion', $adquisiciones->nombre_adquisicion) }}

    {{ Form::label('costo_adquisicion', 'Costo Adquisición') }}
    {{ Form::number('costo_adquisicion', $adquisiciones->costo_adquisicion) }}

    {{ Form::label('alcance_proyecto_id', 'Alcances') }}   

    <select name="alcacne">
        @foreach($alcances as $alcacne)
            <option value={{$alcacne->id}}>{{$alcacne->nombre_actividad}}</option>
        @endforeach
    </select>

    {{Form::submit('Salvar', array())}}

{{ Form::close() }}
