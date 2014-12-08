<body class="body" >
    <div class="frmcreate">
        <br>
        <h3>Nueva Adquisición</h3>
        <br>
        {{ Form::open(array('url' => 'adquisiciones')) }}
        <br>
            <div class="lblCO">{{ Form::label('nombre_adquisicion', 'Nombre Adquisición') }}</div>
            <div class="txtCO">{{ Form::text('nombre_adquisicion', '', array('placeholder' => 'Nombre Adquisición', 'required' => 'true')) }}</div>
            <br>
            <br>
            <div class="lblCOS">{{ Form::label('costo_adquisicion', 'Costo Adquisición') }}</div>
            <div class="lblNumCO">{{ Form::number('costo_adquisicion', '', array('placeholder' => 'Costo Adquisición', 'required' => 'true')) }}</div>    
            <br>
            <br>
            <div class="lblalcance">{{ Form::label('alcance', 'Alcance') }}</div>
            <div class="cmbAlcance">
            <select name="alcance">
                @foreach($alcances as $alcance)
                    <option value={{$alcance->id}}>{{$alcance->nombre_actividad}}</option>
                @endforeach
            </select>
                
            </div>

              <br>
        <br>
        <div class="btnCreate">{{Form::submit('Crear', array('class' => 'btn btn-default'))}}</div>
        <div class="btnRegresar">{{ HTML::linkAction('InteresadosController@index', 'Back', array(), array('class' => 'btn btn-default')) }}</div>
        <br>          

         {{ Form::close() }}
        

    </div>
        
</body>    



