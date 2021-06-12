<?php

include_once('models/modeloAlumno.php');
include_once('views/vistaAlumno.php');

class controladorAlumno{
   
    private $model;
    private $view;

    public function __construct() {
        $this->model = new modeloAlumno();
        $this->view = new vistaAlumno(); 
    }

    public function listarAlumnosMas25(){
        $alumnos = $this->model->getMas25();
        $this->view->mostrarMas25($alumnos);
    }
}