<?php

include_once 'models/modeloproducto.php';
include_once 'views/vistaproducto.php';

class controladordivision {
    private $modeloproducto;
    private $vistaproducto;

    function __construct(){
        $this->modeloproducto = new modeloproducto();
        $this->vistaproducto = new vistaproducto();
    }

    function separadivision(){
        $productosimportados = $this->modeloproductos->getProductos(1);
        $productosnoimportados = $this->modeloproductos->getProductos(0);
        $this->vistaproductos->showHome($productosimportados,$productosnoimportados);
    }
}