<?php
    
    
    
    require_once 'router/router2.php';
    require_once 'controlador/controlador.php';
   
    
   
    $router = new Router();

             
 
    $router->addRoute('listar', 'GET', 'controlador', 'GetList_GetDesc');
    $router->addRoute('listar/:id', 'GET', 'controlador', 'GetId');
    

    
   
    
   

    $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);