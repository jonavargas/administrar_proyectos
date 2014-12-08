<body class="body">
    
    <div class="frmCreateAlcance">
        <br>        
        <h3 class="titulos">Editar Proyecto</h3>
        {{ Form::open(array('url' => "alcancesProyectos/$alcance_proyecto->id/update")) }}
        <br>
        <h4><strong>Responsable</strong></h4>
        <br>
        <div class="lblNR">{{ Form::label('nombre', 'Nombre') }}</div>
        <br>
        <div class="txtNR">{{ Form::text('nombre_responsable', $alcance_proyecto->nombre_responsable) }}</div>
        <br>
        <div class="lblPA">{{ Form::label('apellido1', 'Apellido 1') }}</div>
        <br>
        <div class="txtPA">{{ Form::text('apellido1', $alcance_proyecto->apellido1) }}</div>
        <br>
        <div class="lblSA">{{ Form::label('apellido2', 'Apellido 2') }}</div>
        <br>
        <div class="texSA">{{ Form::text('apellido2', $alcance_proyecto->apellido2) }}</div>
        <br>
         <h4><strong>Actividad</strong></h4>
         <br>
        <div class="lblNR">{{ Form::label('nombre_actividad', 'Nombre') }}</div>
        <br>
        <div class="txtNR">{{ Form::text('nombre_actividad', $alcance_proyecto->nombre_actividad) }}</div>
        <br>
        <div class="lblPA">{{ Form::label('descripcion', 'Descripcion') }}</div>
        <br>
        <div class="txtPA">{{ Form::text('descripcion', $alcance_proyecto->descripcion) }}</div>
        <br>
        <div class="lblSA">{{ Form::label('calidad', 'Calidad') }}</div>
        <br>
        <div class="texSA">{{ Form::text('calidad', $alcance_proyecto->calidad) }}</div>
        <br>
        <br>
        <div class="lblFE">{{ Form::label('fecha', 'Fecha Estimada') }} </div>
        <div class="inpFecha"> {{ Form::text('fecha', $alcance_proyecto->fecha_estimada) }}</div>

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
        <div class="lblPro">{{ Form::label('proyecto_id', 'Proyecto') }}</div>
    <div class="cmbPro">
        <select name="proyecto">
        @foreach($proyectos as $proyecto)
            <option value={{$proyecto->id}}>{{$proyecto->nombre_proyecto}}</option>
        @endforeach
    </select>        
    </div>
    <br>
    <br>
    <div class="btnCreate">{{Form::submit('Guardar', array('class' => 'btn btn-default'))}}</div>
    <div class="btnbackAlc">{{ HTML::linkAction('AlcanceProyectoController@index', 'Back', array(), array('class' => 'btn btn-default')) }}</div>
    <br>
    <br>
    {{ Form::close() }}
</div>    
</body>

{{HTML::script('js/js.js');}}


