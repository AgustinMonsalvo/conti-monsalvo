<?php

require_once __DIR__ . '/../modelo/modelo.php';
require_once __DIR__ . '/../vista/vista.php';
class controlador {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new TaskModel();
        $this->view = new Response();
    }

    
    public function GetList_GetDesc($request) {
        $orderBy = null; 
        $status = '200';
    
       
        if (isset($request->params->desc)) {
            $orderBy = $request->params->desc; 
            
            
            if ( $orderBy != 'modelo') {
                $tasks = null;
                $status = '400';
                return $this->view->response($tasks, $status);
            }
        }
    
        
        $task = $this->model->GetModel($orderBy);
        return $this->view->response($task, $status);
    }
    
    
    

    public function GetId($request) {
        $status = '400';

        $id = $request->params->id; 
    
       
        $task = $this->model->Verify($id);
    
       
        if ($task === null) {
            
            return $this->view->response($task,$status);
        }
else {
    $status = '200';
        $tasks = $this->model->GetForId($id);
          return $this->view->response($tasks,$status);}
    
       
       
    }
    


}


