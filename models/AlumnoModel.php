<?php

require_once ('Model.php');

class AlumnoModel extends Model{


    function getAlumnos()
    {
        $sentencia = $this->getDB()->prepare("SELECT * FROM alumno"); 
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function getNombres()
    {
        $sentencia = $this->getDB()->prepare("SELECT * FROM alumno WHERE nombre=?"); 
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }



    function mayoresDe25YAprobados(){
        $sentencia = $this->getDB()->prepare("SELECT * FROM alumno WHERE edad>25 AND aprobado=true");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function newAlumno(){

        $query = $this->getDb()->prepare('INSERT INTO alumno (nombre,edad,telefono,aprobado,recursante)VALUES (?,?,?,?,?)');
        $query->execute([]);
        return $query->fetch(PDO::FETCH_OBJ);

    }

}