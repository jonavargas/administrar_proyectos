<?php
    if (Auth::check()) {
?>      
        <h2 class="titulos"><strong>Cronogramas</strong></h2>   
        <div class="create">{{link_to("cronogramas/create", 'Crear', $attributes = array('class' => 'btn btn-primary'), $secure = null);}}</div>
<?php
    }
?> 

<table class="table table-bordered table-hover">
    <tr class="tr" >
        <th class="th">Fecha Inicio</th>
        <th class="th">Fecha Fin</th>
        <th class="th">Duracion</th>       
        <th class="th">Alcance</th>

        <?php
            if (Auth::check()) {
                    
                echo '<th class="th">Editar</th>';                    
                echo '<th class="th">Eliminar</th>';                    
            }
        ?>

    </tr>
    @foreach($cronogramas as $cronograma)
        <tr>
            <td ALIGN=center>{{ $cronograma->fecha_inicio }}</td>    
            <td ALIGN=center>{{ $cronograma->fecha_fin }}</td>            
            <td ALIGN=center>{{ $cronograma->duracion }}</td>
            <td ALIGN=center>{{ $cronograma->nombre_actividad }}</td>
             
            <?php
       
                if (Auth::check()) {
                    echo '<td ALIGN=center>';
                    echo "<a class='glyphicon glyphicon-pencil' href='cronogramas/$cronograma->id/edit'> </a> ";
                    echo '</td> ';
                    echo '<td ALIGN=center>';
                    echo "<a class='glyphicon glyphicon-remove' href='cronogramas/$cronograma->id/delete'> </a> ";              
                    echo '</td> ';
                }
            ?> 
        </tr>

    @endforeach        
</table> 
 

{{HTML::script('js/js.js');}}