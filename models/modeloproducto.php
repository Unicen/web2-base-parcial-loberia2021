<?php

require_once('Modelo.php');

class modeloproducto extends Modelo {
    
    function getProductos($valor){
        $query = $this-> getDb()->prepare('SELECT * FROM producto WHERE importado = ?');
        $query->execute([$valor]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}