<?php
require_once __DIR__ . '/../vista/vistaUsuario.php';
require_once __DIR__ . '/../modelo/modeloUsuario.php';

class AuthController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new UsuarioModel();
        $this->view = new UsuarioView();
    }

    public function showLogin() {
      
        return $this->view->showLogin();
    }

    public function login() {
        if (!isset($_POST['email']) || empty($_POST['email'])) {}
    
        if (!isset($_POST['contraseña']) || empty($_POST['contraseña']))  {}

        if (!isset($_POST['rol']) || empty($_POST['rol'])) {}

      
    
        $email = $_POST['email'];
        $contraseña = $_POST['contraseña'];
        $rol = $_POST['rol'];
        
    
    
        
        $usuario = $this->model->getUserByEmail($email);
        var_dump($usuario);

        
        if($usuario && password_verify($contraseña, $usuario->contraseña)){
            

            session_start();
         
            $_SESSION['contraseña'] = $usuario->contraseña;
            $_SESSION['email'] = $usuario->email;
            $_SESSION['rol'] = $usuario->rol;
          
            
        } else {
            return $this->view->showLogin('Credenciales incorrectas');
        }
    }
}