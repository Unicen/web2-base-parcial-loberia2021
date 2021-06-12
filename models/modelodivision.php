<?php

require_once('modelo.php');

class modelodivision extends modelo {
    
    function getdivisionesfaltantes(){   //retorna toda la tabla de division donde faltantes sea menor a 1.
        $query = $this-> getDb()->prepare('SELECT * FROM division WHERE faltantes < 1');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}
?>