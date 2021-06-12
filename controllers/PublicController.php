<?php

require_once 'models/VehiculoModel.php';
require_once 'views/VehiculoView.php';

class PublicController
{

    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new VehiculoModel;
        $this->view = new VehiculoView;
    }

    public function showHome()
    {
        $alumxvehiculo = $this->model->getAlumnoporVehiculo();
        $this->view->showHome($alumxvehiculo);
    }

    public function insertarAlumno($id_vehiculo_fk)
    {

        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        $telefono = $_POST["telefono"];
        $aprobado = $_POST["aprobado"];
        $recursante = $_POST["recursante"];
        if ($nombre != '' && $edad != '' && $telefono != '' && $aprobado != '' && $recursante != '') {
            $this->model->insertarAlumno($nombre, $edad, $telefono, $aprobado, $recursante, $id_vehiculo_fk);
            header("Location: " . BASE_URL . "home");
        }else {
            $this->view->showError('Complete todos los datos obligatorios');
        }
    }

    public function insertarVehiculo()
    {
        $nombre = $_POST["nombre"];
        $profesor_asignado = $_POST["profesor_asignado"];
        $funcionando = $_POST["funcionando"];

        if ($nombre != '' && $profesor_asignado != '' && $funcionando != '') {
            $haynombre = $this->modelgenre->getNombre($nombre);
            if ($haynombre) {
                $this->view->showError('Ya existe un vehiculo registrado con ese nombre');
            } else {
                $this->model->insert($nombre, $profesor_asignado, $funcionando);
                header("Location: " . BASE_URL . "home");
            }
        } else {
            $this->view->showError('Complete todos los datos obligatorios');
        }
    }
}
