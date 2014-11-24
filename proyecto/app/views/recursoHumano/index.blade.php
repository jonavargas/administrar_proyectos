<?php

    if (Auth::check()) {
        
        echo "<a href='recursoHumano/create'>Crear Nuevo Recurso Humano</a> ";

    }
?> 

<table>
    <tr >
        <th colspan="3" ALIGN=center>Nombre empleado</th>
        <th ALIGN=center>Apellido 1</th>
        <th ALIGN=center>Apellido 2</th>
        <th ALIGN=center>Especialidad</th>
        <th ALIGN=center>Moneda</th>
        <th ALIGN=center>Observaciones</th>
        <?php
            if (Auth::check()) {
                    
                echo '<th colspan="3" ALIGN=center>Acciones</th>';                    
            }
        ?>

    </tr>
    @foreach($proyectos as $proyecto)
        <tr>
            <td ALIGN=center>{{ $proyecto->nombre_director_proyecto }}</td>   
            <td ALIGN=center>{{ $proyecto->apellido1_director_proyecto }}</td>    
            <td ALIGN=center>{{ $proyecto->apellido2_director_proyecto }}</td>    
            <td ALIGN=center>{{ $proyecto->nombre_patrocinador }}</td>    
            <td ALIGN=center>{{ $proyecto->monto_proyecto }}</td>    
            <td ALIGN=center>{{ $proyecto->presupuesto_proyecto }}</td>    
            <td ALIGN=center>{{ $proyecto->moneda }}</td>    
            <td ALIGN=center>{{ $proyecto->observaciones }}</td>    
             
            <?php
       
                if (Auth::check()) {
                    echo '<td ALIGN=center>';
                    echo "<a href='proyectos/$proyecto->id/edit'>Editar</a> ";
                    echo "<a href='proyectos/$proyecto->id/delete'>Eliminar</a> ";
                    echo '</td> ';
                }
            ?> 
        </tr>
    @endforeach
</table> 
