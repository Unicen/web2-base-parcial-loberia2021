<?php

require_once ('Model.php');

Class VehiculoModel extends Model{

    function getVehiculo($id)
    {
        $sentencia = $this->getDB()->prepare("SELECT * FROM vehiculo WHERE id=?");
        $sentencia->execute(array($id));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    function getProfesorAsignado(){
        $sentencia = $this->getDB()->prepare("SELECT * FROM vehiculo WHERE profesor_asignado=?"); 
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    function funcionando(){
        $sentencia = $this->getDB()->prepare("SELECT * FROM vehiculo WHERE funcionando=?"); 
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
  
}