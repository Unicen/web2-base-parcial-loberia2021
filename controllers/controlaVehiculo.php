<?php

include_once('models/modeloVehiculo.php');
include_once('views/vistaVehiculo.php');

class controladorVehiculo{
   
    private $model;
    private $view;

    public function __construct() {
        $this->model = new modeloVehiculo();
        $this->view = new vistaVehiculo(); 
    }

    public function agregarVehiculo(){
        if (!empty($_POST['nombreVehiculo']) ) {
            $nombre= $_POST['nombreVehiculo'];
            if (existeAuto($nombre) == NULL){
                $profesor= $_POST['boolProfesor'];
                $funciona= $_POST['boolFunciona'];
                $this->model->nuevoAuto($nombre, $profesor, $funciona);
            }
        }else {
           
        }
    }
}