<?php
require_once('Visor.php');

class vistadivision extends Visor{
    public function __construct(){
        parent::__construct();
    }
    //muestra todos las divisiones faltantes
    function filtrarfaltantes($listadivisiones){}
        $this->getSmarty()->assign('listadivision', $listadivisiones);
        $this->getSmarty()->display('templates/divisionesfaltantes.tpl');
    }

?>