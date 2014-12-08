<?php
    if (Auth::check()) {
?>      
        <h2 class="titulos"><strong>Comunicaciones</strong></h2>      
        <div class="create">{{link_to("comunicaciones/create", 'Crear', $attributes = array('class' => 'btn btn-primary'), $secure = null);}}</div>
<?php
    }
?> 

<table class="table table-bordered table-hover">
    <tr class="tr" >
        <th colspan="3"  class="th">Nombre Contacto</th>
        <th class="th">Metodo de Comunicación</th>
        <th class="th">Tipo de comunicación</th>

        <?php
            if (Auth::check()) {
                    
                echo '<th class="th">Editar</th>';                    
                echo '<th class="th">Eliminar</th>';
            }
        ?>

    </tr>
    @foreach($comunicaciones as $comunicacion)
        <tr>            
            <td colspan="3" ALIGN=center>{{ $comunicacion->nombre_contacto }}
                             {{ $comunicacion->apellido1_contacto }}    
                             {{ $comunicacion->apellido2_contacto }}</td>    
            <td ALIGN=center>{{ $comunicacion->metodo_comunicacion }}</td>  
            
            <td ALIGN=center>
                |
            @foreach($tipoComunicaciones as $tipoComunicacion)                            
                {{ $tipoComunicacion->tipo_comunicacion }} |
            @endforeach 

            </td>
             
            <?php
       
                if (Auth::check()) {
                    echo '<td ALIGN=center>';
                    echo "<a class='glyphicon glyphicon-pencil' href='comunicaciones/$comunicacion->id/edit'> </a> ";
                    echo '</td> ';
                    echo '<td ALIGN=center>';
                    echo "<a class='glyphicon glyphicon-remove' href='comunicaciones/$comunicacion->id/delete'> </a> ";              
                    echo '</td> ';
                }
            ?> 
        </tr>
    @endforeach
        
</table> 
