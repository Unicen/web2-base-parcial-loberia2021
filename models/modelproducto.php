<?php

require_once('views/viewproductos.php');
require_once('models/model.php');

class ModelProducto extends Model{


function listarImportados(){
    $query = $this->getDb()->prepare('SELECT * FROM `producto` WHERE importado = 1');
    $query->execute(array());
    return $query->fetchAll(PDO::FETCH_OBJ);
}
  

function listarNacionales(){
    $query = $this->getDb()->prepare('SELECT * FROM `producto` WHERE importado = 0');
    $query->execute(array());
    return $query->fetchAll(PDO::FETCH_OBJ);
}


function newProducto($nombre, $marca, $cantidad,$importado,$precio,$division)
{
    $query = $this->getDb()->prepare('INSERT INTO producto (nombre,marca,cantidad,importado,precio,division)VALUES (?,?,?,?,?,?)');
    $query->execute([$nombre, $marca, $cantidad,$importado,$precio,$division]);
    return $query->fetch(PDO::FETCH_OBJ);
}

public function obtenerProducto($nombre,$cantidad,$precio)
    {
        $query = $this->getDb()->prepare('SELECT * FROM `producto` WHERE nombre = ?');
        $query->execute(array(($nombre)));
        return $query->fetch(PDO::FETCH_OBJ);
    }

}