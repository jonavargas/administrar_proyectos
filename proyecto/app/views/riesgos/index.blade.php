<?php

    if (Auth::check()) {
        
        echo "<a href='riesgos/create'>Crear Nuevo Riesgo</a> ";

    }
?> 

<table>
    <tr >
        <th ALIGN=center>Nombre Riesgo</th>
        <th ALIGN=center>Descripción</th>
        <th ALIGN=center>Solución</th>
        <th ALIGN=center>Proyecto</th>

        <?php
            if (Auth::check()) {                
                echo '<th colspan="3" ALIGN=center>Acciones</th>';                    
            }
        ?>

    </tr>
    @foreach($riesgos as $riesgo)
        <tr>
            <td ALIGN=center>{{ $riesgo->nombre }}</td>   
            <td ALIGN=center>{{ $riesgo->descripcion }}</td>    
            <td ALIGN=center>{{ $riesgo->solucion }}</td>
            @foreach($proyectos as $proyecto)
                <td ALIGN=center>{{ $proyecto->nombre_proyecto }}</td>
            @endforeach           
             
            <?php
       
                if (Auth::check()) {
                    echo '<td ALIGN=center>';
                    echo "<a href='riesgos/$riesgo->id/edit'>Editar</a> ";
                    echo "<a href='riesgos/$riesgo->id/delete'>Eliminar</a> ";
                    echo '</td> ';
                }
            ?> 
        </tr>
    @endforeach
        
</table> 
