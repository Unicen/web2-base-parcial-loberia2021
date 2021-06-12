<?php
class modelProductos extends Model
{

function GetProductos()
{
    $sentencia = $this->getDB()->prepare("SELECT * FROM producto"); // selecciona todo de tabla botines
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
}

function GetImportados(){
    
    $sentencia = $this->getDB()->prepare("SELECT * FROM producto WHERE cantidad=10");
    $sentencia->execute([$id_marca]);
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
}



function GetProductosMasde15(){
    
    $sentencia = $this->getDB()->prepare("SELECT * FROM producto WHERE cantidad>=15");
    $sentencia->execute([$id_marca]);
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
}

function GetProductosMenosde15(){
    
    $sentencia = $this->getDB()->prepare("SELECT * FROM producto WHERE cantidad<=15");
    $sentencia->execute([$id_marca]);
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
}

function newProducto($nombre, $marca, $cantidad,$importado,$precio,$division)
{
    $query = $this->getDb()->prepare('INSERT INTO producto (nombre,marca,cantidad,importado,precio,division)VALUES (?,?,?,?,?,?)');
    $query->execute([$nombre, $marca, $cantidad,$importado,$precio,$division);
    return $query->fetch(PDO::FETCH_OBJ);
}



}