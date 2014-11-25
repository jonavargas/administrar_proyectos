<?php

    if (Auth::check()) {
        
        echo "<a href='tipoComunicaciones/create'>Crear Nuevo tipo de comunicacion</a> ";

    }
?> 

<table>
    <tr >
        <th ALIGN=center>Tipo Comunicacion</th>
        <th ALIGN=center>Detalle</th>
        <th ALIGN=center>Proyecto</th>

        <?php
            if (Auth::check()) {
                    
                echo '<th colspan="3" ALIGN=center>Acciones</th>';                    
            }
        ?>

    </tr>
    @foreach($tipoComunicaciones as $t_comunicacion)
        <tr>
            <td ALIGN=center>{{ $t_comunicacion->tipo_comunicacion }}</td>   
            <td ALIGN=center>{{ $t_comunicacion->detalle }}</td>
            @foreach($proyectos as $proyecto)
                <td ALIGN=center>{{ $proyecto->nombre_proyecto }}</td>
            @endforeach           
             
            <?php
       
                if (Auth::check()) {
                    echo '<td ALIGN=center>';
                    echo "<a href='tipoComunicaciones/$t_comunicacion->id/edit'>Editar</a> ";
                    echo "<a href='tipoComunicaciones/$t_comunicacion->id/delete'>Eliminar</a> ";
                    echo '</td> ';
                }
            ?> 
        </tr>
    @endforeach
        
</table> 
