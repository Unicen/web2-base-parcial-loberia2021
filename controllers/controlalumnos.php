<?php

include_once('models/modeloalumnos.php');
include_once('views/vistalumnos.php');

class controlalumnos{
    private $modeloalumno;
    private $vistalumno;

    public function __construct(){
        $this->modeloalumno = new modeloalumno();
        $this->vistalumno = new vistalumno();
    }
    public function muestraformulario(){
        $this->vistalumno->formulario();
    }

    public function agregaralumno(){
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $telefono = $_POST['telefono'];
        $aprobado = $_POST['aprobado'];
        $recursante = $_POST['recursante'];
        $id_vehiculo_fk = $_POST['id_vehiculo_fk'];
        $this->modelolibro->guardar($nombre, $edad, $telefono, $aprobado, $recursante, $id_vehiculo_fk);
        header("Location: ". BASE_URL . 'admin');
    }

    
}