<?php
require_once __DIR__ . '/../config.php';
class TaskModel {
    private $db;

    public function __construct() {
       $this->db = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB . ';charset=utf8', MYSQL_USER, MYSQL_PASS);
    }

    
    
    public function GetModel($orderBy){
       
        $sql = 'SELECT autos.*, marcas.marca FROM autos JOIN marcas ON autos.id_marca = marcas.id_tablaMarca';
       
        if ($orderBy === 'modelo' ) {
           
            $sql .= ' ORDER BY Modelo DESC'; }
        
    
    
       
        $query = $this->db->prepare($sql);
        $query->execute();
        
       
        $tasks = $query->fetchAll(PDO::FETCH_OBJ); 
        
        return $tasks;
    }
   
    
    
    public function Verify($id) {
        if ($id !== null) {
            $sql = 'SELECT * FROM autos WHERE id = ?'; 
    
            $query = $this->db->prepare($sql);
            $query->execute([$id]); 
    
            $tasks = $query->fetchAll(PDO::FETCH_OBJ); 
    
            if (empty($tasks)) { 
                return null; 
            }
            return $tasks; 
        }
        
        return null; 
    }

    public function GetForId($id){

        $query = $this->db->prepare('SELECT autos.*, marcas.marca 
        FROM autos 
        JOIN marcas ON autos.id_marca = marcas.id_tablaMarca 
        WHERE autos.id = ?');
    
        $query->execute([$id]);  
        
        $task = $query->fetchAll(PDO::FETCH_OBJ); 
        return $task; 
    }
    

    
    
    
        
       
    }
    
    

    
    