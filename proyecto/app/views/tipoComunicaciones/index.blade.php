<?php

    if (Auth::check()) {
        
        echo "<a href='tipoComunicaciones/create'>Crear Nuevo tipo de comunicacion</a> ";

    }
?> 

<table class="table table-bordered table-hover">
    <tr >
        <th class="th">Tipo Comunicacion</th>
        <th class="th">Detalle del tipo de comunicación</th>
        <th class="th">Proyecto</th>

        <?php
            if (Auth::check()) {
                    
                echo '<th class="th">Editar</th>';                    
                echo '<th class="th">Eliminar</th>';                    
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
                    echo "<a class='glyphicon glyphicon-pencil' href='tipoComunicaciones/$t_comunicacion->id/edit'> </a> ";
                    echo '</td> ';
                    echo '<td ALIGN=center>';
                    echo "<a class='glyphicon glyphicon-remove' href='tipoComunicaciones/$t_comunicacion->id/delete'> </a> ";              
                    echo '</td> ';
                }
            ?> 
        </tr>
    @endforeach
        
</table> 
