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
       
        if (!isset($_POST['email']) || empty($_POST['email'])) {
            
        }
        if (!isset($_POST['contraseña']) || empty($_POST['contraseña'])) {
            
        }
        if (!isset($_POST['rol']) || empty($_POST['rol'])) {
            
        }
    
        
        $email = $_POST['email'];
        $contraseña = $_POST['contraseña'];
        $rol = $_POST['rol'];
    
        $usuario = $this->model->getUserByEmail($email);
    
        if ($usuario) {
            
            if (password_verify($contraseña, $usuario->contraseña)) {
               
                if ($usuario->rol === $rol) {
                    session_start();
                    $_SESSION['contraseña'] = $usuario->contraseña;
                    $_SESSION['email'] = $usuario->email;
                    $_SESSION['rol'] = $usuario->rol;
                    header('Location: MostrarLogin'); 
                    exit;
                    return $this->view->showLogin();
                  }
                else {
                  
                    $this->view->showErrorRol();
                }
             }
             if ($usuario && !password_verify($contraseña, $usuario->contraseña) && $usuario->rol !== $rol) {
                
                $this->view->showErrorAmbos(); 
            } 
                else {
                   
                    $this->view->showErrorContraseña();
                }
             
        } else {
            
            $this->view->showErrorUsuario();
        }
        
    }
    public function logout() {
       
        session_start();
        session_destroy();
    
        header("Location:  MostrarLogin");
        exit();
    }
    public function MostrarForm(){
       
        $this->view-> showAutosAgregados();
    
    }
    public function agregarAutos(){
        if (!isset($_POST['color']) || empty($_POST['color'])) {
            $this->view->showErrorAgregados(); 
            return;
        }
        if (!isset($_POST['modelo']) || empty($_POST['modelo'])) {
            $this->view->showErrorAgregados(); 
            return;
        }
        if (!isset($_POST['kilometros']) || empty($_POST['kilometros'])) {
            $this->view->showErrorAgregados(); 
            return;
        }
        if (!isset($_POST['asientos']) || empty($_POST['asientos'])) {
            $this->view->showErrorAgregados(); 
            return;
        }
        if (!isset($_POST['informacion']) || empty($_POST['informacion'])) {
            $this->view->showErrorAgregados(); 
            return;
        }
        if (!isset($_POST['marca']) || empty($_POST['marca'])) {
            $this->view->showErrorAgregados(); 
            return;
        }

        
        $color = $_POST['color'];
        $modelo = $_POST['Modelo'];
        $kilometros = $_POST['kilometros'];
        $asientos = $_POST['Asientos'];
        $informacion = $_POST['Informacion'];
        $marca = $_POST['marca'];

        
        $auto = $this->model->agregarAuto($color, $modelo, $kilometros, $asientos, $informacion, $marca);
        header("Location: listar");
        exit();
    
    
}
public function MostrarFormEdit()
    {
       
        

            
            $this->view->showAutosEditados();

            
            
        }

        public function FormEdit() {
            if (!isset($_POST['id']) || empty($_POST['id'])) {
                $this->view->showErrorEditar(); 
                return;
            }
                if (!isset($_POST['color']) || empty($_POST['color'])) {
                    $this->view->showErrorEditar(); 
            return;
                }
                if (!isset($_POST['modelo']) || empty($_POST['modelo'])) {
                    $this->view->showErrorEditar(); 
            return;
                }
                   
                if (!isset($_POST['kilometros']) || empty($_POST['kilometros'])) {
                    $this->view->showErrorEditar(); 
            return;
                }
                if (!isset($_POST['asientos']) || empty($_POST['asientos'])) {
                    $this->view->showErrorEditar(); 
            return;
                }
                if (!isset($_POST['informacion']) || empty($_POST['informacion'])) {
                    $this->view->showErrorEditar(); 
            return;
                }
                if (!isset($_POST['marca']) || empty($_POST['marca'])) {
                    $this->view->showErrorEditar(); 
            return;
                }
    
                
                $color = $_POST['color'];
                $modelo = $_POST['modelo'];
                $kilometros = $_POST['kilometros'];
                $asientos = $_POST['asientos'];
                $informacion = $_POST['informacion'];
                $marca = $_POST['marca'];
                $id = $_POST['id'];
    
                
                $auto = $this->model->editarAuto($color, $modelo, $kilometros, $asientos, $informacion, $marca,$id);
                header('Location: listar'); 
        } 

        public function FormularioEliminarAutos()
        {
            
           
            
            $this->view->showAutosEliminados();
        
            
            
        }
        public function eliminarAutos()
        {
            
            if (!isset($_POST['id']) || empty($_POST['id'])) {
                $this->view->showErrorEliminar();
                return;
            }
        
            
            $id = $_POST['id'];
        
            
            $autos = $this->model->eliminarAuto($id);
        
            
          
        
            
            header('Location: listar'); 
            exit;
        }

}
