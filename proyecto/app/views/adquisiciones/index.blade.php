<?php
    if (Auth::check()) {
?>      
        <h2 class="titulos"><strong>Adquisiciones</strong></h2>     
        <div class="create">{{link_to("adquisiciones/create", 'Crear', $attributes = array('class' => 'btn btn-primary'), $secure = null);}}</div>
<?php
    }
?> 

<table class="table table-bordered table-hover">
    <tr class="tr">
        <th class="th">Nombre Adquisicion</th>
        <th class="th">Costo Adquisicion</th> 
        <th class="th">Alcance</th>       

        <?php
            if (Auth::check()) {
                    
                echo '<th class="th">Editar</th>';                    
                echo '<th class="th">Eliminar</th>';
            }
        ?>

    </tr>
    @foreach($adquisiciones as $adquisicion)
        <tr>            
            <td ALIGN=center>{{ $adquisicion->nombre_adquisicion }}</td>  
            <td ALIGN=center>{{ $adquisicion->costo_adquisicion }}</td>  
            <td ALIGN=center>{{ $adquisicion->nombre_actividad }}</td>
             
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

