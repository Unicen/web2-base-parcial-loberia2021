<?php

include_once('views/DivisionView.php');
include_once('models/DivisionModel.php');
include_once('helpers/auth.helper.php');

class DivisionController {

    private $model;
    private $view;

    public function __construct() {
        $this->model = new DivisionModel();
        $this->view = new DivisionView();
    }

    public function showCreateDivision() {
        $this->view->showCreateDivision();
    }

    public createDivision()
    {  
        if (!empty($_POST['nombre']) && !empty($_POST['faltantes']))
        {   $sql = getDivisionPorNombre($_POST['nombre']);
            if(mysqli_num_rows($sql) > 0){
                echo "La division ya existe";  
            }
            else{
                $this->model->createDivision($_POST['nombre'],$_POST['faltantes']);
                echo "Division creada";
            }
        }
        else{
            echo "Faltan campos obligatorios";  
        }
    }  

}