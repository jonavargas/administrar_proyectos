<body class="body">
    
    <div class="frmCreateAlcance">
        <br>
        <h3 class="titulos">Nuevo Alcance</h3>
        {{ Form::open(array('url' => 'alcancesProyectos')) }}
        <br>
        <h4><strong>Responsable</strong></h4>
        <br>
        <div class="lblNR">{{ Form::label('nombre', 'Nombre') }}</div>
        <br>
        <div class="txtNR"> {{ Form::text('nombre_responsable', '', array('placeholder' => 'Nombre', 'required' => 'true')) }}</div>
        <br>
        <div class="lblPA">{{ Form::label('apellido1', 'Apellido 1') }}</div>
        <br>
        <div class="txtPA">{{ Form::text('apellido1', '', array('placeholder' => 'Apellido 1', 'required' => 'true')) }}</div>
        <br>
        <div class="lblSA">{{ Form::label('apellido2', 'Apellido 2') }}</div>
        <br>
        <div class="texSA">{{ Form::text('apellido2', '', array('placeholder' => 'Apellido 2', 'required' => 'true')) }}</div>
        <br>
         <h4><strong>Actividad</strong></h4>
         <br>
        <div class="lblNR">{{ Form::label('nombre_actividad', 'Nombre') }}</div>
        <br>
        <div class="txtNR">{{ Form::text('nombre_actividad', '', array('placeholder' => 'Nombre', 'required' => 'true')) }}</div>
        <br>
        <div class="lblPA">{{ Form::label('descripcion', 'Descripcion') }}</div>
        <br>
        <div class="txtPA">{{ Form::text('descripcion', '', array('placeholder' => 'Descripción', 'required' => 'true')) }}</div>
        <br>
        <div class="lblSA">{{ Form::label('calidad', 'Calidad') }}</div>
        <br>
        <div class="texSA">{{ Form::text('calidad', '', array('placeholder' => 'Calidad', 'required' => 'true')) }}</div>
        <br>
        <br>
        <div class="lblFE">{{ Form::label('fecha', 'Fecha Estimada') }} </div>
        <div class="inpFecha"><input type="text" name="fecha" value=""></div>

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


    <div class="btnCreate">{{Form::submit('Crear', array('class' => 'btn btn-success'))}}</div>
    <div class="btnbackAlc">{{ HTML::linkAction('AlcanceProyectoController@index', 'Back', array(), array('class' => 'btn btn-default')) }}</div>
    <br>
    <br>
{{ Form::close() }}
        

    </div>
    
    
</body>


{{HTML::script('js/js.js');}}