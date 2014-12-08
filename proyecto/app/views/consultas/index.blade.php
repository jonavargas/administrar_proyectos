
{{ Form::open(array('url' => 'consultas/show')) }}

     
    <div class="frmCreateAlcance">
        <br>
        <h2 class="titulos"><strong>Proyectos Disponibles</strong></h2> 
        <br>
        <br>
        <div id="con_proy">
            <select name="proyecto" class="form-control">
                @foreach($proyectos as $proyecto)
                    <option value={{$proyecto->id}}>{{$proyecto->nombre_proyecto}}</option>
                @endforeach
            </select>
        </div>

        <div class="submit_con">{{ Form::submit('Consultar', array('class' => 'btn btn-success'))}}</div>
        <br>
    </div>
{{ Form::close() }}

