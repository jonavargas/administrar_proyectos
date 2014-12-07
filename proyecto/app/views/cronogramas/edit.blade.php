<h3>Editar Cronograma</h3>

{{ Form::open(array('url' => "cronogramas/$cronograma->id/update")) }}

    {{ Form::label('fecha_inicio', 'Fecha Inicio') }}
    {{ Form::text('fecha_inicio', $cronograma->fecha_inicio) }}

    <script type="text/javascript">
            $(function(){
                $('*[id=fecha_inicio]').appendDtpicker({
                    "inline": true,
                    "dateOnly": true,                    
                    "dateFormat": "DD-MM-YYYY"
                });
            });
    </script>

    {{ Form::label('fecha_fin', 'Fecha Fin') }}
    {{ Form::text('fecha_fin', $cronograma->fecha_fin) }}

        
    <script type="text/javascript">
            $(function(){
                $('*[id=fecha_fin]').appendDtpicker({
                    "inline": true,
                    "dateOnly": true,                    
                    "dateFormat": "DD-MM-YYYY"
                });
            });
    </script>


    {{ Form::label('duracion', 'Duracion') }}
    {{ Form::text('duracion', $cronograma->duracion) }}








    

    {{ Form::label('alcance_proyecto_id', 'Alcances') }}   

    <select name="alcance">
        @foreach($alcance as $alcance)
            <option value={{$alcance->id}}>{{$alcance->nombre_actividad}}</option>
        @endforeach
    </select>


    {{Form::submit('Salvar', array())}}

{{ Form::close() }}


{{HTML::script('js/js.js');}}