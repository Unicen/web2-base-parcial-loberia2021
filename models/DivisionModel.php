<?php

require_once('example.model.php');

class DivisionModel extends ExampleModel {

    public function getDivisionPorNombre($nombreDivision)
    {
        $query = $this->getDb()->prepare('SELECT * FROM division WHERE nombre = ?');
        $query->execute([$nombreDivision]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function createDivision($nombre, $faltantes)
    {
        $query = $this->getDb()->prepare('INSERT INTO division (nombre, faltantes) VALUES (?, ?)');
        $query->execute([$nombre, $faltantes]);
    }
}