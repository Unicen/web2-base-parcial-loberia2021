<?php

include_once('./views/View.php');
include_once('./models/AlumnoModel.php');
include_once('./models/VehiculoModel.php');

Class Controller{
  
    private $modelAlumno;
    private $modelVehiculo;
    private $view;

    function __construct()
    {
        $this->view = new View();
        $this->modelAlumno = new AlumnoModel();
        $this->modelVehiculo = new VehiculoModel();
    }

    public function home(){
        $listAlumnos = $this->modelAlumno->getMayorYAprobado();
        $listVehiculos = $this->modelVehiculo->getAll();
        $this->view->renderHome($listAlumnos,$listVehiculos);
    }

    public function displayFormAlumno(){
        $this->view->renderFormAlumno();
    }

    public function displayFormVehiculo(){
        $this->view->renderFormVehiculo();
    }


}