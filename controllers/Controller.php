<?php

include_once('./views/View.php');
include_once('./models/AlumnoModel.php');
include_once('./models/VehiculoModel.php');

class Controller
{

    private $modelAlumno;
    private $modelVehiculo;
    private $view;

    function __construct()
    {
        $this->view = new View();
        $this->modelAlumno = new AlumnoModel();
        $this->modelVehiculo = new VehiculoModel();
    }

    public function home()
    {
        $listAlumnos = $this->modelAlumno->getMayorYAprobado();
        $listVehiculos = $this->modelVehiculo->getSinFuncionarSinAsignar();
        $this->view->renderHome($listAlumnos, $listVehiculos);
    }

    public function displayFormAlumno()
    {
        $listVehiculos = $this->modelVehiculo->getAll();
        $this->view->renderFormAlumno($listVehiculos);
    }

    public function displayFormVehiculo()
    {
        $listVehiculos = $this->modelVehiculo->getAll();
        $this->view->renderFormVehiculo($listVehiculos);
    }

    public function addAlumno()
    {
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $telefono = $_POST['telefono'];
        $aprobado = $_POST['aprobado'];
        if ($aprobado != 1) {
            $aprobado = 0;
        }
        $recursante = $_POST['recursante'];
        if ($recursante != 1) {
            $recursante = 0;
        }
        $vehiculo = $_POST['vehiculo'];
        $this->modelAlumno->add($nombre, $edad, $telefono, $aprobado, $recursante, $vehiculo);
        header("Location:" . BASE_URL . 'home');
    }

    public function addVehiculo()
    {
        $nombre = $_POST['nombre'];
        if ($this->modelVehiculo->existeVehiculo($nombre)) {
            header("Location:" . BASE_URL . 'home');
            die();
        }
        $funcionando = $_POST['funciona'];
        $profesor = $_POST['profesor'];
        if ($funcionando != 1) {
            $funcionando = 0;
        }
        if ($profesor != 1) {
            $profesor = 0;
        }
        $this->modelVehiculo->add($nombre, $profesor, $funcionando);
        header("Location:" . BASE_URL . 'home');
    }
}
