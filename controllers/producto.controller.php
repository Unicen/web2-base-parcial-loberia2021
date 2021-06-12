<?php
require_once('models/producto.model.php');
require_once('views/producto.division.php');
require_once('models/division.model.php');

class ProductController{

    private $view;
    private $modelProducto;
    private $modelDivision;

    public function __construct(){
        $this->modelProducto = new ProductoModel();
        $this->modelDivision = new DivisionModel();
        $this->view = new ProductoDivisionView();
    }

       
}