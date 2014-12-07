<h3>Nuevo Costo</h3>

{{ Form::open(array('url' => 'costos')) }}

	{{ Form::label('nombre_actividad', 'Nombre Actividad') }}
    <select name="nombre_actividad">
        @foreach($alcance as $alcance)                       
            <option value={{$alcance->nombre_actividad}}>{{$alcance->nombre_actividad}}</option> 
                      
        @endforeach
    </select>   
                      
    {{Form::hidden('id', $alcance->id)}}     

    {{ Form::label('costo_actividad', 'Costo Actividad') }}
    {{ Form::number('costo_actividad', '') }}        

    {{Form::submit('Crear', array())}}

{{ Form::close() }}
	