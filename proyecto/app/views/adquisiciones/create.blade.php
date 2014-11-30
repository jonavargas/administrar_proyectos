<h3>Nueva Adquisición</h3>

{{ Form::open(array('url' => 'adquisiciones')) }}
    
    {{ Form::label('nombre_adquisicion', 'Nombre Adquisición') }}
    {{ Form::text('nombre_adquisicion', '') }}

    {{ Form::label('costo_adquisicion', 'Costo Adquisición') }}
    {{ Form::number('costo_adquisicion', '') }}    
    
    @foreach($alcances as $alcacne)
        
        {{Form::hidden('id', $alcacne->id)}}
        
    @endforeach

    {{Form::submit('Crear', array())}}

{{ Form::close() }}
