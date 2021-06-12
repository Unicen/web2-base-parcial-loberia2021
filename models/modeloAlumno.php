<?php

require_once('example.model.php');

class modeloAlumno extends ExampleModel {
    function getMas25() {
        $query = $this->getDb()->prepare('SELECT * FROM alumno WHERE edad > 25');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}