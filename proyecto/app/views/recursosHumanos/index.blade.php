<?php
    if (Auth::check()) {
?>        
        <div class="newtask">{{link_to("recursosHumanos/create", 'Crear', $attributes = array('class' => 'btn btn-primary'), $secure = null);}}</div>
<?php
    }
?> 

<table class="table table-bordered table-hover">
    <tr >
        <th colspan="3" class="th">Nombre Personal Requerido</th>
        <th class="th">Especialidad</th>
        <th class="th">Proyectos</th>

        <?php
            if (Auth::check()) {
                    
                echo '<th class="th">Editar</th>';                    
                echo '<th class="th">Eliminar</th>';                    
            }
        ?>

    </tr>
    @foreach($recursosHumanos as $rh)
        <tr>
            <td colspan="3" ALIGN=center>{{ $rh->nombre_personal_requerido }}
                             {{ $rh->apellido1_personal_requerido }}
                             {{ $rh->apellido2_personal_requerido }}</td>    
            <td ALIGN=center>{{ $rh->especialidad }}</td>    
            @foreach($proyectos as $proyecto)
                <td ALIGN=center>{{ $proyecto->nombre_proyecto }}</td>
            @endforeach           
             
            <?php
       
                if (Auth::check()) {
                    echo '<td ALIGN=center>';
                    echo "<a class='glyphicon glyphicon-pencil' href='recursosHumanos/$rh->id/edit'> </a> ";
                    echo '</td> ';
                    echo '<td ALIGN=center>';
                    echo "<a class='glyphicon glyphicon-remove' href='recursosHumanos/$rh->id/delete'> </a> ";              
                    echo '</td> ';
                }
            ?> 
        </tr>
    @endforeach
        
</table> 
                   