<?php
class Request {
    public $params = null; 

    public function __construct() {
       
        $this->params = (object) $_GET; 
    }
}
