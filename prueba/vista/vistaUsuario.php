<?php


class UsuarioView {
   

    public function showLogin() {
        require __DIR__. '/../templates/encabezado.phtml'; 
        require __DIR__. '/../templates/formularioUsuario.phtml'; 
        require __DIR__ . '/../templates/footer.phtml'; 
    }

    
}


?>