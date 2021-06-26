<?php
require_once('visor.php');
include_once('helpers/auth.helper.php');

class vistadivision extends Visor{

    public function __construct(){
        parent::__construct();
    }

    function mostrarformulario(){
        $this->getSmarty()->display('templates/formulario.tpl');
    }

}