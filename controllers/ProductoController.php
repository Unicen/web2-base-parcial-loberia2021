<?php

include_once('views/ProductoView.php');
include_once('models/ProductoModel.php');
include_once('helpers/auth.helper.php');

class ProductoController {

    private $model;
    private $view;

    public function __construct() {
        $this->model = new ProductoModel();
        $this->view = new ProductoView();
    }

    public function showListarProductos($cantidad)
    {
        $listaProductos = $this->model->getProductoImportadoCant($cantidad);
        $this->view->showListarProductos($listaProductos);
    }

}