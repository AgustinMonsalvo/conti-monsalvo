<?php

class Response {
    public function response($task, $status ) {
        header("Content-Type: text/html"); 
        $statusText = $this->_requestStatus($status);
        header("HTTP/1.1 $status, $statusText");
        if (empty($task)) {
            echo "<p>Error en la consulta</p>"; 
            return; 
        }
      
        echo "<table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Color</th>
                        <th>Kilómetros</th>
                        <th>Modelo</th>
                        <th>Información</th>
                        <th>Asientos</th>
                    </tr>
                </thead>
                <tbody>";

        foreach ($task as $autos) {
            echo "<tr>
                    <td>{$autos->id}</td>
                    <td>{$autos->color}</td>
                    <td>{$autos->kilometros}</td>
                    <td>{$autos->Modelo}</td>
                    <td>{$autos->Informacion}</td>
                    <td>{$autos->Asientos}</td>
                </tr>";
        }
        echo "</tbody></table>";
    }

    private function _requestStatus($status) {
        switch ($status) {
            case 200:
                return "OK";
            case 201:
                return "Created";
                case 400:
                    return "Bad Request";
          
        }
    }
}

    




