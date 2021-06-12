<?php

include_once 'models/modelodivision.php';
include_once 'views/vistadivision.php';

class Controladivision {
    private $modelodivision;
    private $vistadivision;

    function __construct(){
        $this->modelodivision = new modelodivision();
        $this->vistadivision = new vistadivision();
    }

    function mostrarfaltantes(){  //asigna los datos al template divisionesfaltantes.tpl 
        $listadivisiones = $this->modelodivision->getdivisionesfaltantes();
        $this->vistadivision->filtrarfaltantes($listadivisiones);
    }
}
?>