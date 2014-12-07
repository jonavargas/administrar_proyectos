<body class="body">
    <div class="frmcreate">
    <br>
    <h3>Nuevo Interesado</h3>
    <br>
    {{ Form::open(array('url' => 'interesados')) }}
    
        <div class="lblRecursos">{{ Form::label('nombre', 'Nombre') }}</div>
        <div class="txtRecursos">{{ Form::text('nombre', '') }}</div>
        <br>
        <br>
        <div class="lblRecursoPA">{{ Form::label('apellido1', 'Primer Apellido') }}</div>
        <div class="txtRecursos">{{ Form::text('apellido1', '') }}</div>
        <br>
        <br>
        <div class="lblRecursoSA">{{ Form::label('apellido2', 'Segundo Apellido ') }}</div>
        <div class="txtRecursos">{{ Form::text('apellido2', '') }}</div>
        <br>
        <br>
        <div class="lblTelefono">{{ Form::label('telefono', 'Teléfono') }}</div>
        <div class="txtRecursos">{{ Form::text('telefono', '') }}</div>
        <br>
        <br>
        <div class="lblDescripcion">{{ Form::label('descripcion', 'Descripción') }}</div>
        <div class="txtRecursos">{{ Form::text('descripcion', '') }}</div>
        <br>
        <br>
        <div>{{ Form::label('proyecto_id', 'Proyectos') }}</div>
    
        <select name="proyecto">
            @foreach($proyectos as $proyecto)
                <option value={{$proyecto->id}}>{{$proyecto->nombre_proyecto}}</option>
            @endforeach
        </select>


    {{Form::submit('Crear', array())}}

{{ Form::close() }}
        
    </div>
</body>
