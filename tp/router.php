<?php
    
    require_once 'routerr.php';

    require_once 'controlador.php';

    $router = new Router();

             
    $router->addRoute('suma/:num1/:num2', 'GET', 'controlador', 'suma');
   

    $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);