<?php

    if (Auth::check()) {
        
        echo "<a href='interesados/create'>Crear Nuevo Interesado</a> ";

    }
?> 

<table>
    <tr >
        <th colspan="3" ALIGN=center>Nombre Interesado</th>
        <th ALIGN=center>Telefono</th>
        <th ALIGN=center>Descripcion</th>
        <th ALIGN=center>Proyecto</th>

        <?php
            if (Auth::check()) {
                    
                echo '<th colspan="3" ALIGN=center>Acciones</th>';                    
            }
        ?>

    </tr>
    @foreach($interesados as $interesado)
        <tr>
            <td ALIGN=center>{{ $interesado->nombre }}</td>   
            <td ALIGN=center>{{ $interesado->apellido1 }}</td>    
            <td ALIGN=center>{{ $interesado->apellido2 }}</td>    
            <td ALIGN=center>{{ $interesado->telefono }}</td>
            <td ALIGN=center>{{ $interesado->descripcion }}</td>
            @foreach($proyectos as $proyecto)
                <td ALIGN=center>{{ $proyecto->nombre_proyecto }}</td>
            @endforeach           
             
            <?php
       
                if (Auth::check()) {
                    echo '<td ALIGN=center>';
                    echo "<a href='interesados/$interesado->id/edit'>Editar</a> ";
                    echo "<a href='interesados/$interesado->id/delete'>Eliminar</a> ";
                    echo '</td> ';
                }
            ?> 
        </tr>
    @endforeach
        
</table> 
