<?php
require_once('Modelo.php');

class modelovehiculo extends Modelo{
    function getrotosinprofe(){
        $query = $this-> getDb()->prepare('SELECT * FROM vehiculo WHERE funcionando = 0 AND profesor_asignado = 0');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}