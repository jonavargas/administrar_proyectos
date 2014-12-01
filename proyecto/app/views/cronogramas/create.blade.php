<body>
    
    <div class="frmcreate">
        <h3>Nuevo Cronograma</h3>
        {{ Form::open(array('url' => 'cronogramas')) }}
    
        {{ Form::label('fecha_inicio', 'Fecha Inicio') }}
        <input type="text" name="fecha_inicio" value="">
            <script type="text/javascript">
                $(function(){
                    $('*[name=fecha_inicio]').appendDtpicker({
                        "inline": true,
                        "dateOnly": true,                    
                        "dateFormat": "DD-MM-YYYY"
                    });
                });
         </script>
        
        <br>
        {{ Form::label('fecha_fin', 'Fecha Fin') }}
        <input type="text" name="fecha_fin" value="">
            <script type="text/javascript">
                $(function(){
                    $('*[name=fecha_fin]').appendDtpicker({
                        "inline": true,
                        "dateOnly": true,                    
                        "dateFormat": "DD-MM-YYYY"
                    });
                });
         </script>
  
        <br>
        {{ Form::label('duracion', 'Duracion') }}
        <br>
        {{ Form::text('duracion', '') }}
        <br>
        

    
        {{ Form::label('alcance_proyecto_id', 'Alcances') }}
    
    <select name="alcance">
        @foreach($alcances as $alcance)
            <option value={{$alcance->id}}>{{$alcance->nombre_actividad}}</option>
        @endforeach
    </select>


    {{Form::submit('Crear', array())}}

{{ Form::close() }}
        

    </div>
    
    
</body>


{{HTML::script('js/js.js');}}