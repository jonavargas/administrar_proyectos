<body class="body">
    
    <div class="frmcreate">
    <br>        
    <h3 class="titulos">Editar Cronograma</h3>
        <br>
        {{ Form::open(array('url' => "cronogramas/$cronograma->id/update")) }}
        <br>
        <div class="FI">{{ Form::label('fecha_inicio', 'Fecha Inicio') }}</div>

        <div class="inp">
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
        </div>        
        <br>
       <div class="FN">{{ Form::label('fecha_fin', 'Fecha Fin') }}</div> 
        <div class="inp">
        <div >
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
    </div>  
        <br>
       <div class="DU">{{ Form::label('duracion', 'Duración') }}</div> 
        <br>
        <div class="txtDu">{{ Form::text('duracion', $cronograma->duracion) }}</div>
        <br>     
    
        <div class="DU">{{ Form::label('alcance_proyecto_id', 'Alcances') }}</div>
        <div class= "cmbAlcan">
            <select name="alcance">
                 @foreach($alcance as $alcance)
                    <option value={{$alcance->id}}>{{$alcance->nombre_actividad}}</option>
                @endforeach
            </select>
        </div>    
        <br>
        <br>
        <div class="btnCreateCro">{{Form::submit('Guardar', array('class' => 'btn btn-success'))}}</div>
        <div class="btnRegresarCro">{{ HTML::linkAction('CronogramaController@index', 'Back', array(), array('class' => 'btn btn-default')) }}</div>
        <br>

    {{ Form::close() }}     

    </div>
</body>

{{HTML::script('js/js.js');}}

