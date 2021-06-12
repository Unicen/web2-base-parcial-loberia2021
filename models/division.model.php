<?php
require_once('model.php');


class DivisionModel extends Model{

    /**
     * 
     * Retorna la cantidad de divisiones con faltantes
     */
    public function contar()
    {
        $query = $this->getDb()->prepare('SELECT COUNT(*) AS cantidad FROM `division` WHERE faltantes = 1');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

     /**
     * @return array
     * Retorna toda la info de las divisiones con faltantes
     */
    public function obtener()
    {
        $query = $this->getDb()->prepare('SELECT * FROM `division` WHERE faltantes = 1');
        $query->execute(array());
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

      /**
     * @param $nombre
     * Retorna toda la info de una division si coincide con lo pasado por parametro.
     */
    public function obtenerDivision($nombre)
    {
        $query = $this->getDb()->prepare('SELECT * FROM `division` WHERE nombre = ?');
        $query->execute(array(($nombre)));
        return $query->fetch(PDO::FETCH_OBJ);
    }

    /**
     * @param $nombre, $faltante
     * Agrega una division en base a los datos pasados por parametro
     */
    public function agregar($nombre, $faltante)
    {
        $query = $this->getDb()->prepare("INSERT INTO division (nombre, faltantes) VALUES (?, ?)");

        $query->execute([$nombre, $faltante]);
    }
}