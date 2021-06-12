<?php

require_once('visor.php');

class vistavehiculo extends Visor{
    public function __construct() {
        parent::__construct();
    }
    
    function showrotosinprofe($listavehiculosrotosinprofe){
        $this->getSmarty()->assign('listavehiculos', $listavehiculosrotosinprofe);
        $this->getSmarty()->display('templates/home.tpl');
    }

}