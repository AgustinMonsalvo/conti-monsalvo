<?php
require_once 'controlador/controlador.php';


$action = 'listar'; 
if (!empty( $_GET['action'])) {
    $action = $_GET['action'];
}
$atributo = $_GET['atributo'] ?? null;
$valor = $_GET['valor'] ?? null;

$params = explode('/', $action);


switch ($params[0]) {
    case 'listar':
        $controller = new TaskController();
        $controller->showTasks();
        break;
        case 'detalle':
            $controller = new TaskController();
            $controller->Showdetalles($params[1]);
            break;
            case 'buscar':
               
                $controller = new TaskController();
                $controller->Buscarcatalogos($atributo,$valor); 

                break;
    default: 
        echo "404 Page Not Found"; 
        break;
}