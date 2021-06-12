<?php

include_once('./models/AlumnosModel.php');
include_once('./views/AlumoView.php.php');


class AlumnoController
{

    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new  AlumnoModel();

        $this->view = new AlumnoView();
    }

    function showMayoresDe25YAprobados()
    {
        $alumno = $this->model->mayoresDe25YAprobados();
        $this->view->RenderTabla($alumno);
    }

    
    function addAlumno(){
        $nombre = $_POST['nombreAlumno'];
        $edad = $_POST['edadAlumno'];
        $telefono = $_POST['telefonoAlumno'];
        $aprobado = $_POST['aprobadoAlumno'];
        $recursante = $_POST['recursanteAlumno'];

        if (!empty($nombre) && !empty($edad) && !empty($telefono) && !empty($aprobado) && !empty($recursante)) {
            $this->model->newAlumno($nombre,$edad,$telefono,$aprobado,$recursante);
        }
        header("Location: " . BASE_URL . 'home');
    }
}
