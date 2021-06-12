<?php

class ControllerDivision extends controller{

    
  function  nuevaDivision(){
    $nombre = $_POST['inputnombre'];
    $faltantes= $_POST['inputfaltantes'];
    
    if (!empty($nombre)) {
        $this->model->newDivision($nombre, $faltantes);
    }
    }


    function verFaltantes(){
        $faltantes = $this->model->getFaltantes();
        $this->view->RenderDivision($faltantes);
    }

}