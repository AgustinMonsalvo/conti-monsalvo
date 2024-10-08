
<?php
require_once 'controlador/controlador.php';
require_once 'controlador/controladorUsuario.php';
require_once 'libreria/respuesta.php';
require_once 'middlewares/permisos.php';
require_once 'middlewares/VerificacionSesion.php';




 $respuesta= new Response();
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
            $controller->showDetalles($params[1]);
            break;
            case 'buscar':
                $controller = new TaskController();
                $controller->Buscarcatalogos($atributo,$valor); 
                break;
                case 'Mostrarlogin':
                    $controller = new AuthController();
                    $controller->showLogin();
                    break;
                    case 'login':
                        $controller = new AuthController();
                        $controller->login();
                        fucionAutenticacion($respuesta);
                        fucionPermisos($respuesta);

                break;
                         default: 
                             echo "404 Page Not Found"; 
                            break;
}