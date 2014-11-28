<?php

    if (Auth::check()) {
        
        echo "<a href='proyectos/create'>Crear Nuevo Proyecto</a> ";

    }
?> 

<table class="table table-bordered table-hover">
    <tr >
        <th class="th">Nombre de Proyecto</th>
        <th colspan="3" class="th">Director de Proyecto</th>
        <th class="th">Patrocinador</th>
        <th class="th">Monto Proyecto</th>
        <th class="th">Presupuesto</th>
        <th class="th">Moneda</th>
        <th class="th">Observaciones</th>
        <?php
            if (Auth::check()) {
                    
                echo '<th class="th">Editar</th>';                    
                echo '<th class="th">Eliminar</th>';                    
            }
        ?>

    </tr>
    @foreach($proyectos as $proyecto)
        <tr>
            <td ALIGN=center>{{ $proyecto->nombre_proyecto }}</td>
            <td ALIGN=center colspan="3">{{ $proyecto->nombre_director_proyecto }}   
                                         {{ $proyecto->apellido1_director_proyecto }}    
                                         {{ $proyecto->apellido2_director_proyecto }}</td>    
            <td ALIGN=center>{{ $proyecto->nombre_patrocinador }}</td>    
            <td ALIGN=center>{{ $proyecto->monto_proyecto }}</td>    
            <td ALIGN=center>{{ $proyecto->presupuesto_proyecto }}</td>    
            <td ALIGN=center>{{ $proyecto->moneda }}</td>    
            <td ALIGN=center>{{ $proyecto->observaciones }}</td>    
             
            <?php
       
                if (Auth::check()) {
                    echo '<td ALIGN=center>';
                    echo "<a class='glyphicon glyphicon-pencil' href='proyectos/$proyecto->id/edit'> </a> ";
                    echo '</td> ';
                    echo '<td ALIGN=center>';
                    echo "<a class='glyphicon glyphicon-remove' href='proyectos/$proyecto->id/delete'> </a> ";              
                    echo '</td> ';
                }
            ?> 
        </tr>
    @endforeach
</table> 
                    