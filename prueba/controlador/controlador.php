<?php

require_once __DIR__ .'/../modelo/modelo.php';

require_once __DIR__ . '/../vista/tablaTareas.php';
require_once __DIR__ . '/../vista/detalle.php';
require_once __DIR__ . '/../vista/catalogo.php';



class TaskController {
    private $model;
    private $view;
    private $detalle;
    private $catalogo;

    public function __construct() {
        $this->model = new TaskModel();
        $this->view = new TaskView();
        $this->detalle = new detalle();
        $this->catalogo = new catalogo();
       


    }

    public function showTasks() {
        
        $tasks = $this->model->getTasks();
        
    
        return $this->view->showTasks($tasks);
    }
    
    public function Showdetalles($id) {
       
       
        $detalles = $this->model->getTask($id);

        return $this->detalle->MostrarDetalles($detalles);
    }

    public function Buscarcatalogos($atributo, $valor) {
           $catalogo = $this->model->getTasksCatalogo($atributo, $valor);

           return $this->catalogo->catalogos($catalogo);

}
}






?>
