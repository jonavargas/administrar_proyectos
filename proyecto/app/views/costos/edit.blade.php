<h3>Editar Costo</h3>

{{ Form::open(array('url' => "costos/$costos->id/update")) }}

 
    <select name="nombre_actividad">
        @foreach($alcance as $alcance)                       
            <option value={{$alcance->nombre_actividad}}>{{$alcance->nombre_actividad}}</option>                       
        @endforeach
    </select>

    {{ Form::label('costo_actividad', 'Costo Actividad') }}
    {{ Form::number('costo_actividad', $costos->costo_actividad) }}

    {{Form::submit('Salvar', array())}}

{{ Form::close() }}
