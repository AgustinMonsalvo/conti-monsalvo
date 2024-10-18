<?php

class TaskModel {
  
 
    public function suma($request) {    
        $num1 = $request->params->num1; 
        $num2 = $request->params->num2;
        $result = $num1 + $num2;
        return $result;
       
    }
}