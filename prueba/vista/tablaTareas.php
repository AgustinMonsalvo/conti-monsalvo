<?php

class TaskView {
    public function showTasks($tasks) {
        require_once __DIR__ . '/../templates/encabezado.phtml';


        echo "  <table class='task-table'>
        <thead>
            <tr>
                <th>color</th>
                <th>Modelo</th>
                <th>Kilometros</th>
                <th>Asientos</th>
                <th>Marca</th>
                <th>Acciones</th>

                
                
            </tr>
        </thead>
        <tbody>";
foreach ($tasks as $viaje) {
    
    echo "<tr>
   
            <td>{$viaje->color}</td>
            <td>{$viaje->Modelo}</td>
            <td>{$viaje->Kilometros}</td>
             <td>{$viaje->Asientos}</td>
              <td>{$viaje->marca}</td>
               
               <td>
                 <a href='?action=detalle/{$viaje->id}'>Informacion adicional</a>
                </td>
            

           
          </tr>";
}

echo "</tbody></table>";

require_once __DIR__ . '/../templates/catalogo.phtml';


require_once __DIR__ . '/../templates/footer.phtml';

    }
}

?>