<?php

require_once('View.php');

class ProductoView extends View {

    public function __construct() {
        parent::__construct();
    }

    public function showListarProductos($listaProductos) {
        $this->getSmarty()->assign('title', "Listar Productos");      
        $this->getSmarty()->assign('home', BASE_URL.'home');
        $this->getSmarty()->assign('listaProductos',$listaProductos);  
        $this->getSmarty()->display('templates/verProductos.tpl');
    }
}