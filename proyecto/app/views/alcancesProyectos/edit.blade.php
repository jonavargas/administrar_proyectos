<h3>Editar Proyecto</h3>

{{ Form::open(array('url' => "alcancesProyectos/$alcance_proyecto->id/update")) }}

    {{ Form::label('nombre', 'Nombre Responsable') }}
    {{ Form::text('nombre_responsable', $alcance_proyecto->nombre_responsable) }}

    {{ Form::label('apellido1', 'Apellido 1') }}
    {{ Form::text('apellido1', $alcance_proyecto->apellido1) }}

    {{ Form::label('apellido2', 'Apellido') }}
    {{ Form::text('apellido2', $alcance_proyecto->apellido2) }}
    
    {{ Form::label('nombre_actividad', 'Nombre Actividad') }}
    {{ Form::text('nombre_actividad', $alcance_proyecto->nombre_actividad) }}

    {{ Form::label('descripcion', 'Descripcion') }}
    {{ Form::text('descripcion', $alcance_proyecto->descripcion) }}

    {{ Form::label('calidad', 'Calidad') }}
    {{ Form::text('calidad', $alcance_proyecto->calidad) }}

    {{ Form::label('fecha', 'Fecha Estimada') }}
    {{ Form::text('fecha', $alcance_proyecto->fecha_estimada) }}
    
    <script type="text/javascript">
            $(function(){
                $('*[id=fecha]').appendDtpicker({
                    "inline": true,
                    "dateOnly": true,                    
                    "dateFormat": "DD-MM-YYYY"
                });
            });
    </script>

    {{ Form::label('proyecto_id', 'Proyectos') }}   

    <select name="proyecto">
        @foreach($proyectos as $proyecto)
            <option value={{$proyecto->id}}>{{$proyecto->nombre_proyecto}}</option>
        @endforeach
    </select>


    {{Form::submit('Salvar', array())}}

{{ Form::close() }}
{{HTML::script('js/js.js');}}