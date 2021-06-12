<?php

require_once('visor.php');

class vistalumnos extends Visor{
    public function __construct() {
        parent::__construct();
    }

    function formulario(){
        $this->getSmarty()->display('templates/form.tpl');
    }
    
    
}