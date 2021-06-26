<?php

include_once 'models/modelodivision.php';
include_once 'views/vistadivision.php';

class controladordivision {
    private $modelodivision;
    private $vistadivision;

    function __construct(){
        $this->modelodivision = new modelodivision();
        $this->vistadivision = new vistdivision();
    }

    function guardardivision(){
        $nombre = $_POST['nombre'];
        $faltantes = $_POST['faltantes'];
        if ($nombre == NULL || $faltantes == NULL){
            header("Location: " . BASE_URL . 'home');}
            if ( $this->modelodivision->verificarnombre($_POST['nombre']) )
                header("Location: " . BASE_URL . 'home');}
        $this->modelodivision->guardarDivision($nombre,$faltantes);
    }

    function mostrarformulario(){
        $this->vistadivision->mostrarformulario();
    }
}