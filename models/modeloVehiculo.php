<?php

require_once('example.model.php');

class modeloVehiculo extends ExampleModel {
    
    function existeAuto($nombre) {
        $query = $this->getDb()->prepare('SELECT * FROM vehiculo WHERE nombre = ?');
        $query->execute($nombre);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function nuevoAuto ($nombre, $profesor, $funciona) {
        $query = $this->getDb()->prepare('INSERT INTO vehiculo (nombre, profesor, funciona) VALUES (?, ?, ?)');
        $query->execute([$nombre, $profesor, $funciona]);
    }
}