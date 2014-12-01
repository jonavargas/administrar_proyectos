<h3>Editar Cronograma</h3>

{{ Form::open(array('url' => "cronogramas/$cronograma->id/update")) }}

    {{ Form::label('fecha_inicio', 'Fecha Inicio') }}
    {{ Form::text('fecha_inicio', $cronograma->fecha_inicio) }}

    {{ Form::label('fecha_fin', 'Fecha Fin') }}
    {{ Form::text('fecha_fin', $cronograma->fecha_fin) }}

    {{ Form::label('duracion', 'Duracion') }}
    {{ Form::text('duracion', $cronograma->duracion) }}
    

    {{ Form::label('alcance_proyecto_id', 'Alcances') }}   

    <select name="alcance">
        @foreach($alcance as $alcance)
            <option value={{$alcance->id}}>{{$alcance->nombre_actividad}}</option>
        @endforeach
    </select>


    {{Form::submit('Salvar', array())}}

{{ Form::close() }}
