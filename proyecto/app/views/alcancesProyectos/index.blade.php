<?php
    if (Auth::check()) {
?>      
        <h2 class="titulos"><strong>Alcances de Proyecto</strong></h2>        
        <div class="create">{{link_to("alcancesProyectos/create", 'Crear', $attributes = array('class' => 'btn btn-primary'), $secure = null);}}</div>
<?php
    }
?> 

<table class="table table-bordered table-hover">
    <tr class="tr">
        <th colspan="3" class="th">Nombre Responsable</th>
        <th class="th">Nombre Actividad</th>
        <th class="th">Descripción</th>
        <th class="th">Calidad</th>
        <th class="th">Fecha Estimada</th>
        <th class="th">Proyecto</th>

        <?php
            if (Auth::check()) {
                    
                echo '<th class="th">Editar</th>';                    
                echo '<th class="th">Eliminar</th>';                    
            }
        ?>

    </tr>
    @foreach($alcancesProyectos as $alcance_proyecto)
        <tr>
            <td colspan="3" ALIGN=center>{{ $alcance_proyecto->nombre_responsable }}
                                         {{ $alcance_proyecto->apellido1 }}
                                         {{ $alcance_proyecto->apellido2 }}</td>    
            <td ALIGN=center>{{ $alcance_proyecto->nombre_actividad }}</td>            
            <td ALIGN=center>{{ $alcance_proyecto->descripcion }}</td>
            <td ALIGN=center>{{ $alcance_proyecto->calidad }}</td>
            <td ALIGN=center>{{ $alcance_proyecto->fecha_estimada }}</td>

            @foreach($proyectos as $proyecto)
                <td ALIGN=center>{{ $proyecto->nombre_proyecto }}</td>
            @endforeach           
             
            <?php
       
                if (Auth::check()) {
                    echo '<td ALIGN=center>';
                    echo "<a class='glyphicon glyphicon-pencil' href='alcancesProyectos/$alcance_proyecto->id/edit'> </a> ";
                    echo '</td> ';
                    echo '<td ALIGN=center>';
                    echo "<a class='glyphicon glyphicon-remove' href='alcancesProyectos/$alcance_proyecto->id/delete'> </a> ";              
                    echo '</td> ';
                }
            ?> 
        </tr>

    @endforeach        
</table> 
 






       
      



