<h3>Nueva Adquisición</h3>

{{ Form::open(array('url' => 'adquisiciones')) }}
    
    {{ Form::label('nombre_adquisicion', 'Nombre Adquisición') }}
    {{ Form::text('nombre_adquisicion', '') }}

    {{ Form::label('costo_adquisicion', 'Costo Adquisición') }}
    {{ Form::number('costo_adquisicion', '') }}    
    
  
    <select name="alcance">
        @foreach($alcances as $alcance)
            <option value={{$alcance->id}}>{{$alcance->nombre_actividad}}</option>

        @endforeach
    </select>

    {{Form::submit('Crear', array())}}

{{ Form::close() }}
