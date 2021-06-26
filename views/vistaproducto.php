<?php
require_once('visor.php');
include_once('helpers/auth.helper.php');

class vistaproducto extends Visor{

    public function __construct(){
        parent::__construct();
    }

    function showHome($productosimportados,$productosnoimportados){
        $this->getSmarty()->assign('listaproductosimportados', $productosimportados);
        $this->getSmarty()->assign('listaproductosnoimportados', $productosnoimportados);
        $this->getSmarty()->display('templates/home.tpl');
    }
}