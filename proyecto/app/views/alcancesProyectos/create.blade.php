<body>
    
    <div class="frmcreate">
        <h3>Nuevo Alcance</h3>
        {{ Form::open(array('url' => 'alcancesProyectos')) }}
    
        {{ Form::label('nombre', 'Nombre Responsable') }}
        <br>
        {{ Form::text('nombre_responsable', '') }}
        <br>
        {{ Form::label('apellido1', 'Apellido 1') }}
        <br>
        {{ Form::text('apellido1', '') }}
        <br>
        {{ Form::label('apellido2', 'Apellido 2') }}
        <br>
        {{ Form::text('apellido2', '') }}
        <br>
        {{ Form::label('nombre_actividad', 'Nombre Actividad') }}
        <br>
        {{ Form::text('nombre_actividad', '') }}
        <br>
        {{ Form::label('descripcion', 'Descripcion') }}
        <br>
        {{ Form::text('descripcion', '') }}
        <br>
        {{ Form::label('calidad', 'Calidad') }}
        <br>
        {{ Form::text('calidad', '') }}
        <br>

        {{ Form::label('fecha', 'Fecha Estimada') }}
        <input type="text" name="fecha" value="">
            <script type="text/javascript">
                $(function(){
                    $('*[name=fecha]').appendDtpicker({
                        "inline": true,
                        "dateOnly": true,                    
                        "dateFormat": "DD-MM-YYYY"
                    });
                });
         </script>
         <br>

    
        {{ Form::label('proyecto_id', 'Proyectos') }}
    
    <select name="proyecto">
        @foreach($proyectos as $proyecto)
            <option value={{$proyecto->id}}>{{$proyecto->nombre_proyecto}}</option>
        @endforeach
    </select>


    {{Form::submit('Crear', array())}}

{{ Form::close() }}
        

    </div>
    
    
</body>


{{HTML::script('js/js.js');}}