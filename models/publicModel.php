<?php

require_once 'model.php';

class PublicModel extends Model{
    
    public function getAll(){
    
        // 1. Establece la conexion con la base de datos y trae todos los alumnos
        $query = $this->getDb()->prepare("SELECT * FROM alumno");
        $query-> execute(); 
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

}
