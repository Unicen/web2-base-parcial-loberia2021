<?php
class modelDivision extends Model

{

    function newDivision($nombre, $marca, $cantidad,$importado,$precio,$division){
    $query = $this->getDb()->prepare('INSERT INTO division (nombre,faltantes)VALUES (?,?)');
    $query->execute([$nombre, $faltantes);
    return $query->fetch(PDO::FETCH_OBJ);
}

function GetFaltantes(){
    
    $sentencia = $this->getDB()->prepare("SELECT * FROM division WHERE faltantes=0");
    $sentencia->execute([$id_marca]);
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
}


}