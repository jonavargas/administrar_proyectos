
{{ Form::open(array('url' => 'consultas/show')) }}

    <h4>{{ Form::label('proyecto', 'Proyectos Disponibles') }}</h4>
    <select name="proyecto">
        @foreach($proyectos as $proyecto)
            <option value={{$proyecto->id}}>{{$proyecto->nombre_proyecto}}</option>
        @endforeach
    </select>

    {{Form::submit('Consultar', array())}}

{{ Form::close() }}

