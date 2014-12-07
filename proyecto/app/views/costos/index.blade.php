<?php
    if (Auth::check()) {
?>        
        <div class="newtask">{{link_to("costos/create", 'Crear', $attributes = array('class' => 'btn btn-primary'), $secure = null);}}</div>
<?php
    }
?> 

<table class="table table-bordered table-hover">
    <tr class="tr" >
        <th class="th">Nombre Actividad</th> 
        <th class="th">Costo Actividad</th>               

        <?php
            if (Auth::check()) {
                    
                echo '<th class="th">Editar</th>';                    
                echo '<th class="th">Eliminar</th>';
            }
        ?>

    </tr>
    @foreach($costos as $costo)
        <tr>
            <td ALIGN=center>{{ $costo->actividad }}             
            <td ALIGN=center>{{ $costo->costo_actividad }}  
             
            <?php
       
                if (Auth::check()) {
                    echo '<td ALIGN=center>';
                    echo "<a class='glyphicon glyphicon-pencil' href='costos/$costo->id/edit'> </a> ";
                    echo '</td> ';
                    echo '<td ALIGN=center>';
                    echo "<a class='glyphicon glyphicon-remove' href='costos/$costo->id/delete'> </a> ";              
                    echo '</td> ';
                }
            ?> 
        </tr>
    @endforeach
        
</table> 
