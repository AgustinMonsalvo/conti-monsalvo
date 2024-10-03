<?php
class detalle {

    
    public function MostrarDetalles($detalles) {
        
        require_once __DIR__ . '/../templates/encabezado.phtml';

        echo "<table class='task-table'>
    <thead>
        <tr>
            <th>ID</th>
            <th>Color</th>
            <th>Modelo</th>
            <th>Kilómetros</th>
            <th>Asientos</th>
            <th>Marca</th>
            <th>Información Extra</th>
        </tr>
    </thead>
    <tbody>";


    foreach ($detalles as $detalle) { 
        echo "<tr>
            <td>" . $detalle->id . "</td>
            <td>" . $detalle->color . "</td>
            <td>" . $detalle->Modelo . "</td>
            <td>" . $detalle->Kilometros . "</td>
            <td>" . $detalle->Asientos . "</td>
            <td>" . $detalle->marca . "</td>
            <td>" . $detalle->Informacion . "</td>
        </tr>";
    }

echo "</tbody>
</table>";
       
        

        
        require_once __DIR__ . '/../templates/footer.phtml';
    }
}



?>
