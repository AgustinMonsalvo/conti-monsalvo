<?php

function fucionPermisos($respuesta) {
    if (!isset($respuesta->usuario) || $respuesta->usuario->rol !== 'Administrador') {
        
        echo "<h1>Error: Acceso denegado</h1>";
        exit; 
    }
}

?>