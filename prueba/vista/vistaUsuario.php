<?php


class UsuarioView {
   

    public function showLogin() {
        require __DIR__. '/../templates/encabezado.phtml'; 
        require __DIR__. '/../templates/formularioUsuario.phtml'; 
        require __DIR__ . '/../templates/footer.phtml'; 
    }
    public function showErrorRol() {
        
        require __DIR__. '/../templates/encabezado.phtml'; 
        echo '<h1 style="text-align: center; color: red;">Rol no valido</h1>';
        require __DIR__. '/../templates/formularioUsuario.phtml'; 
        require __DIR__ . '/../templates/footer.phtml'; 
       
    
}
public function showErrorContraseña() {
    require __DIR__. '/../templates/encabezado.phtml'; 
    echo '<h1 style="text-align: center; color: red;">Contraseña no valida</h1>';
    require __DIR__. '/../templates/formularioUsuario.phtml'; 
    require __DIR__ . '/../templates/footer.phtml'; 
}
public function showErrorUsuario() {
    require __DIR__. '/../templates/encabezado.phtml'; 
    echo '<h1 style="text-align: center; color: red;">Usuario no encontrado</h1>';
    require __DIR__. '/../templates/formularioUsuario.phtml'; 
    require __DIR__ . '/../templates/footer.phtml'; 
}
public function showErrorAmbos() {
    require __DIR__. '/../templates/encabezado.phtml'; 
    echo '<h1 style="text-align: center; color: red;">Contraseña y usuario no validos</h1>';
    require __DIR__. '/../templates/formularioUsuario.phtml'; 
    require __DIR__ . '/../templates/footer.phtml'; 
}

public function showAutosAgregados()
    {
        require __DIR__ . '/../templates/encabezado.phtml';
        require __DIR__ . '/../templates/tablaAgregar.phtml';
        
        require __DIR__ . '/../templates/footer.phtml';
    }

    public function showAutosEditados()
    {
        require __DIR__ . '/../templates/encabezado.phtml';
        require __DIR__ . '/../templates/tablaEditar.phtml';
        require __DIR__ . '/../templates/footer.phtml';
    }
    public function showAutosEliminados(){
        require __DIR__ . '/../templates/encabezado.phtml';
        require __DIR__ . '/../templates/tablaEliminar.phtml';
        require __DIR__ . '/../templates/footer.phtml';
    }
    public function showErrorAgregados()
    {
        require __DIR__ . '/../templates/encabezado.phtml';
        echo '<h1 style="text-align: center; color: red;">Error. Por favor, verifica los datos ingresados.</h1>';
        require __DIR__ . '/../templates/tablaAgregar.phtml';
        require __DIR__ . '/../templates/footer.phtml';
    }
    public function showErrorEditar() {
        require __DIR__ . '/../templates/encabezado.phtml'; 
        echo '<h1 style="text-align: center; color: red;">Error al editar el auto. Por favor, verifica los datos ingresados.</h1>';
        require __DIR__ . '/../templates/tablaEditar.phtml'; 
        require __DIR__ . '/../templates/footer.phtml'; 
    }
    public function showErrorEliminar() {
        require __DIR__ . '/../templates/encabezado.phtml'; 
        echo '<h1 style="text-align: center; color: red;">Error al eliminar el auto. Por favor, verifica los datos ingresados.</h1>';
        require __DIR__ . '/../templates/tablaEliminar.phtml'; 
        require __DIR__ . '/../templates/footer.phtml'; 
    }

}


?>