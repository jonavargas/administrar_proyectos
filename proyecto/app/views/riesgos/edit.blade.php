<h3>Editar Riesgo</h3>

{{ Form::open(array('url' => "riesgos/$riesgo->id/update")) }}

    {{ Form::label('nombre', 'Nombre') }}
    {{ Form::text('nombre', $riesgo->nombre) }}

    {{ Form::label('descripcion', 'Descripción') }}
    {{ Form::text('descripcion', $riesgo->descripcion) }}

    {{ Form::label('solucion', 'Solución') }}
    {{ Form::text('solucion', $riesgo->solucion) }}
    
    
    {{ Form::label('proyecto_id', 'Proyectos') }}   

    <select name="proyecto">
        @foreach($proyectos as $proyecto)
            <option value={{$proyecto->id}}>{{$proyecto->nombre_proyecto}}</option>
        @endforeach
    </select>


    {{Form::submit('Salvar', array())}}

{{ Form::close() }}
