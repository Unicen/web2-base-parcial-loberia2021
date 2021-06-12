<?php

require_once 'model.php';

class VehiculoModel extends Model
{


    public function __construct()
    {
        parent::__construct();
    }

    public function getAlumnoporVehiculo()
    {

        $query = $this->getDb()->prepare('SELECT alumno.nombre, alumno.edad, vehiculo.nombres FROM `alumno` JOIN `vehiculo` ON alumno.id_vehiculo_fk = vehiculo.id');
        $query->execute();
        $alumxvehiculo = $query->fetchAll(PDO::FETCH_OBJ);
        return $alumxvehiculo;
    }

    public function getNombre($nombre){
        /** 
         * Establece la conexion con la base de datos y retorna una variable que contiene si hay un genero con ese nombre
        */
        $query = $this->getDb()->prepare(" SELECT * FROM genero WHERE nombre = ?");
        $query-> execute([$nombre]); 
        return $query->fetch(PDO::FETCH_OBJ);

    }
    public function insert($nombre, $profesor_asignado, $funcionando){

        $query = $this->getDb()->prepare('INSERT INTO "vehiculo" `nombre`, `profesor_asignado`, `funcionando` VALUES (?, ?, ?)');
        $query->execute([$nombre, $profesor_asignado, $funcionando]);
    }

    public function insertarAlumno($nombre, $edad, $telefono, $aprobado, $recursante, $id_vehiculo_fk){
        $query = $this->getDb()->prepare('INSERT INTO "alumno" `nombre`, `edad`, `telefono`, `aprobado`,`recursante`,`id_vehiculo_fk` VALUES (?, ?, ?, ?, ?, ?)');
        $query->execute([$nombre, $edad, $telefono, $aprobado, $recursante, $id_vehiculo_fk]);
    }
}
