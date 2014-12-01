<body class="body">



<div class="frmcreateProyecto">
    <h3>Nuevo Proyecto</h3>
    <br>
    {{ Form::open(array('url' => 'proyectos')) }}

    {{ Form::label('nombre_proyecto', 'Nombre del proyecto') }}
    {{ Form::text('nombre_proyecto', '') }}
    <br>
    <br>
    {{ Form::label('titulo', 'Director de Proyecto') }}
    <br>

    {{ Form::label('nombre_director_proyecto', 'Nombre') }}
    {{ Form::text('nombre_director_proyecto', '') }}
    <br>
    <br>
    {{ Form::label('apellido1_director_proyecto', 'Apellido 1') }}
    {{ Form::text('apellido1_director_proyecto', '') }}
    <br>
    <br>
    {{ Form::label('apellido2_director_proyecto', 'Apellido 2') }}
    {{ Form::text('apellido2_director_proyecto', '') }}
    <br>
    <br>
    {{ Form::label('patrocinador', 'Patrocinador') }}
    <br>
    {{ Form::label('nombre_patrocinador', 'Nombre') }}
    {{ Form::text('nombre_patrocinador', '') }}

    {{ Form::label('monto_proyecto', 'Monto Proyecto') }}
    {{ Form::number('monto_proyecto', '') }}

    {{ Form::label('presupuesto_proyecto', 'Presupuesto') }}
    {{ Form::number('presupuesto_proyecto', '') }}

    {{ Form::label('moneda', 'Moneda') }}
    {{ Form::select('moneda', array('Colones' => 'Colones', 'Dolares' => 'Dolares')) }}
    

    {{ Form::label('observaciones', 'Observaciones') }}
    {{ Form::textarea('observaciones', '') }}

    {{Form::submit('Crear', array())}}

{{ Form::close() }}
    
    

</div>





</body>


