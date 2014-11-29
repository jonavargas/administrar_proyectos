<?php
    if (Auth::check()) {
?>        
        <div class="newtask">{{link_to("interesados/create", 'Crear', $attributes = array('class' => 'btn btn-primary'), $secure = null);}}</div>
<?php
    }
?> 

<table class="table table-bordered table-hover">
    <tr >
        <th colspan="3" class="th">Nombre Interesado</th>
        <th class="th">Telefono</th>
        <th class="th">Descripcion</th>
        <th class="th">Proyecto</th>

        <?php
            if (Auth::check()) {
                    
                echo '<th class="th">Editar</th>';                    
                echo '<th class="th">Eliminar</th>';                    
            }
        ?>

    </tr>
    @foreach($interesados as $interesado)
        <tr>
            <td colspan="3" ALIGN=center>{{ $interesado->nombre }}
                                         {{ $interesado->apellido1 }}
                                         {{ $interesado->apellido2 }}</td>    
            <td ALIGN=center>{{ $interesado->telefono }}</td>
            <td ALIGN=center>{{ $interesado->descripcion }}</td>
            @foreach($proyectos as $proyecto)
                <td ALIGN=center>{{ $proyecto->nombre_proyecto }}</td>
            @endforeach           
             
            <?php
       
                if (Auth::check()) {
                    echo '<td ALIGN=center>';
                    echo "<a class='glyphicon glyphicon-pencil' href='interesados/$interesado->id/edit'> </a> ";
                    echo '</td> ';
                    echo '<td ALIGN=center>';
                    echo "<a class='glyphicon glyphicon-remove' href='interesados/$interesado->id/delete'> </a> ";              
                    echo '</td> ';
                }
            ?> 
        </tr>
    @endforeach
        
</table> 
