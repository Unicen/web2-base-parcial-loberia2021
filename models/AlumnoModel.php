<?php

require_once('DBModel.php');

class AlumnoModel extends DBModel
{

    function getAll()
    {
        $query = $this->getDb()->prepare('SELECT * FROM `alumno`');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    function get($id)
    {
        $query = $this->getDb()->prepare('SELECT `id`, `nombre`, `edad`, `telefono`, `aprobado`, `recursante`, `id_vehiculo_fk` FROM `alumno` WHERE id = (?)');
        $query->execute([($id)]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function getMayorYAprobado()
    {
        $query = $this->getDb()->prepare('SELECT * FROM `alumno` WHERE edad > 25 && aprobado = true');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function add($nombre, $edad, $telefono, $aprobado, $recursante, $vehiculo)
    {
        $query = $this->getDb()->prepare('INSERT INTO `alumno`(`nombre`, `edad`, `telefono`, `aprobado`, `recursante`, `id_vehiculo_fk`) VALUES (?,?,?,?,?,?)');
        $query->execute([$nombre, $edad, $telefono, $aprobado, $recursante, $vehiculo]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

}
