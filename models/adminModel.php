<?php 

require_once 'model.php';

class AdminModel extends Model{

    public function insertar($nombre, $edad, $telefono, $aprobado, $recursante){
        $query = $this->getDb()->prepare('INSERT INTO usuario  (`nombre`, `edad`, `telefono`, `aprobado`, `recursante`) VALUES (?, ?, ?, ?, ?)');
        $result= $query->execute([$nombre, $edad, $telefono, $aprobado, $recursante]);
    }
}