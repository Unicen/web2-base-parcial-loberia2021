<?php

require_once('DBModel.php');

class VehiculoModel extends DBModel
{


    function getAll()
    {
        $query = $this->getDb()->prepare('SELECT * FROM `vehiculo`');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    function get($id)
    {
        $query = $this->getDb()->prepare('SELECT * FROM `vehiculo` WHERE id = (?)');
        $query->execute([($id)]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
    public function add($nombre, $profesor, $funcionando)
    {
        $query = $this->getDb()->prepare('INSERT INTO `vehiculo`(`nombre`, `profesor_asignado`, `funcionando`) VALUES (?,?,?)');
        $query->execute([$nombre, $profesor, $funcionando]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function getSinFuncionarSinAsignar()
    {
        $query = $this->getDb()->prepare('SELECT * FROM `vehiculo` WHERE funcionando = false && profesor_asignado = false');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    function existeVehiculo($vehiculo)
    {
        $query = $this->getDb()->prepare('SELECT nombre FROM `vehiculo`');
        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_COLUMN);
        foreach ($resultado as $r)
            if ($vehiculo === $r)
                return true;
        return false;
    }
}
