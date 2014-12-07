<body class="body">


<div class="frmcreate">
    {{ Form::open(array('url' => 'recursosHumanos')) }}
    <br>
    <h3>Nuevo Recurso Humano</h3>
    <br>
    {{ Form::label('personal_requerido', 'Personal Requerido') }}
    <br>
    <br>
    <div class="lblRecursos">{{ Form::label('nombre_personal_requerido', 'Nombre') }}</div>
    <div class="txtRecursos">{{ Form::text('nombre_personal_requerido', '' ,array('placeholder' => 'Nombre director', 'required' => 'true')) }}</div>
    <br>
    <br>
    <div class="lblRecursoPA">{{ Form::label('apellido1_personal_requerido', 'Primer apellido') }}</div>
    <div class="txtRecursos">{{ Form::text('apellido1_personal_requerido', '',array('placeholder' => 'Primer Apellido', 'required' => 'true')) }}</div>
    <br>
    <br>
    <div class="lblRecursoSA">{{ Form::label('apellido2_personal_requerido', 'Segundo Apellido') }}</div>
    <div class="txtRecursos">{{ Form::text('apellido2_personal_requerido', '',array('placeholder' => 'Segundo Apellido', 'required' => 'true')) }}</div>
    <br>
    <br> 
    <div class="lblEspecialidad">{{ Form::label('especialidad', 'Especialidad') }}</div>
    <div class="txtRecursos">{{ Form::text('especialidad', '',array('placeholder' => 'Especialidad', 'required' => 'true')) }}</div>
    <br>
    <br>
    <div class="lblProyecto">{{ Form::label('proyecto_id', 'Proyecto') }}</div>
    <div class="cmbProyecto">
        <select name="proyecto">
        @foreach($proyectos as $proyecto)
            <option value={{$proyecto->id}}>{{$proyecto->nombre_proyecto}}</option>
        @endforeach
    </select>        
    </div>
    <br>
    <br>
    <div class="btnCreate">{{Form::submit('Crear', array('class' => 'btn btn-default'))}}</div>
    <div class="btnRegresar">{{ HTML::linkAction('RecursoHumanoController@index', 'Back', array(), array('class' => 'btn btn-default')) }}</div>
    <br>
{{ Form::close() }}

    


</div>


    






</body>

        