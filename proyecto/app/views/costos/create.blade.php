<body class="body">
    <div class="frmcreate">
        <br>
        <h3 class="titulos">Nuevo Costo</h3>
        <br>
        {{ Form::open(array('url' => 'costos')) }}

            {{ Form::label('nombre_actividad', 'Nombre Actividad') }}
            <select name="nombre_actividad">
                @foreach($alcance as $alcance)                       
                    <option value={{$alcance->nombre_actividad}}>{{$alcance->nombre_actividad}}</option> 
                      
                 @endforeach
                </select>   
            <br>
            <br>   
            {{Form::hidden('id', $alcance->id)}}     
            <br>
            {{ Form::label('costo_actividad', 'Costo Actividad') }}
            {{ Form::number('costo_actividad', '', array('placeholder' => 'Costo Actividad', 'required' => 'true')) }}        

        <br>
        <br>
        <br>
        <div class="btnCreate">{{Form::submit('Crear', array('class' => 'btn btn-success'))}}</div>
        <div class="btnRegresar">{{ HTML::linkAction('CostoController@index', 'Back', array(), array('class' => 'btn btn-default')) }}</div>
        <br> 

        {{ Form::close() }}
    
        
    </div>
</body>











