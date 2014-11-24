<?php

    if (Auth::check()) {
        
        echo "<a href='recursosHumanos/create'>Crear Nuevo Recurso Humano</a> ";

    }
?> 

<table>
    <tr >
        <th colspan="3" ALIGN=center>Nombre Personal Requerido</th>
        <th ALIGN=center>Especialidad</th>
        <th ALIGN=center>Proyectos</th>

        <?php
            if (Auth::check()) {
                    
                echo '<th colspan="3" ALIGN=center>Acciones</th>';                    
            }
        ?>

    </tr>
    @foreach($recursosHumanos as $rh)
        <tr>
            <td ALIGN=center>{{ $rh->nombre_personal_requerido }}</td>   
            <td ALIGN=center>{{ $rh->apellido1_personal_requerido }}</td>    
            <td ALIGN=center>{{ $rh->apellido2_personal_requerido }}</td>    
            <td ALIGN=center>{{ $rh->especialidad }}</td>    
            <td ALIGN=center>{{ $rh->proyecto_id }}</td>       
             
            <?php
       
                if (Auth::check()) {
                    echo '<td ALIGN=center>';
                    echo "<a href='recursosHumanos/$rh->id/edit'>Editar</a> ";
                    echo "<a href='recursosHumanos/$rh->id/delete'>Eliminar</a> ";
                    echo '</td> ';
                }
            ?> 
        </tr>
    @endforeach
</table> 
