<?php
require_once('Modelo.php');

class modeloalumno extends Modelo{
    function guardar($nombre, $edad, $telefono, $aprobado, $recursante, $id_vehiculo_fk){
        $query = $this->getDb()->prepare( 'INSERT INTO alumno (nombre, edad, telefono, aprobado, recursante, id_vehiculo_fk) VALUES(?,?,?,?,?,?)');
        $query->execute([$nombre, $edad, $telefono, $aprobado, $recursante, $id_vehiculo_fk]);
    }
}