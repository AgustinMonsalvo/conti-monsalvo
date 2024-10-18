<?php
require_once 'modelo.php';
require_once 'response.php';

class controlador {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new TaskModel();
        $this->view = new Response();
    }

  
    public function suma($request) {
        $task = $this->model->suma($request);
        return $this->view->response($task);
        }
    }