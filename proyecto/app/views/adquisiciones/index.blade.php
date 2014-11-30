<?php
    if (Auth::check()) {
?>        
        <div class="newtask">{{link_to("adquisiciones/create", 'Crear', $attributes = array('class' => 'btn btn-primary'), $secure = null);}}</div>
<?php
    }
?> 

<table class="table table-bordered table-hover">
    <tr >
        <th class="th">Nombre Adquisicion</th>
        <th class="th">Costo Adquisicion</th>        

        <?php
            if (Auth::check()) {
                    
                echo '<th class="th">Editar</th>';                    
                echo '<th class="th">Eliminar</th>';
            }
        ?>

    </tr>
    @foreach($adquisiciones as $adquisicion)
        <tr>            
            <td ALIGN=center>{{ $adquisicion->nombre_adquisicion }}  
            <td ALIGN=center>{{ $adquisicion->costo_adquisicion }}</td>            
             
            <?php
       
                if (Auth::check()) {
                    echo '<td ALIGN=center>';
                    echo "<a class='glyphicon glyphicon-pencil' href='adquisiciones/$adquisicion->id/edit'> </a> ";
                    echo '</td> ';
                    echo '<td ALIGN=center>';
                    echo "<a class='glyphicon glyphicon-remove' href='adquisiciones/$adquisicion->id/delete'> </a> ";              
                    echo '</td> ';
                }
            ?> 
        </tr>
    @endforeach
        
</table> 
