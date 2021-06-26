<?php

require_once('modelo.php');

class modelodivision extends Modelo {

    function verificarnombre($nombre){
        $query = $this-> getDb()->prepare('SELECT * FROM producto WHERE nombre = ?');
        $query->execute([$nombre]);
        if ($query->fetch(PDO::FETCH_OBJ) != NULL){
            return true;
        elseif
            return false;
        }
    }

    function guardarDivision($nombre,$faltantes){
        $query = $this-> getDb()->prepare('UPDATE productos SET nombre = ?, faltantes = ?');
        $query->execute([$nombre,$id]);
    }
}