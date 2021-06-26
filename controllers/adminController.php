<?php

require_once 'models/adminModel.php';
require_once 'views/adminView.php';
class AdminController {

    private $model;
    private $view;
    public function __construct()
    {
        $this->model = new AdminModel;
        $this->view = new AdminView;
    }

    public function insertarAlumno(){

        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $telefono = $_POST['telefono'];
        $aprobado = $_POST['aprobado'];
        $recursante = $_POST['recursante'];
        $registrado = $this->modelgenre->getName($nombre);
        if ($registrado) {
            $this->view->showError("El nombre que ingreso ya existe");
        } else {
            if ($nombre != '' && $edad != '' && $telefono != ''){
            $this->model->insertar($nombre, $edad, $telefono, $aprobado, $recursante);
            header("Location: " . BASE_URL . 'home');
        }
        }
    }
} 