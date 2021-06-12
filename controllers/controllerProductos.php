<?php

class ControllerProductos extends controller{

    function showProductos(){
        $productos = $this->model->GetProductos();
        $this->view->RenderProductos($productos);
    }


    function agregarProducto()
    {
        $nombre = $_POST['inputnombre'];
        $marca = $_POST['inputmarca'];
        $importado = $_POST['inputimportado'];
        $precio = $_POST['inputprecio'];
        $division= $_POST['inputdivision'];

        if (!empty($nombre) && !empty($marca) && !empty($cantidad)&& !empty($importado)&& !empty($precio)&& !empty($division)) {
            $this->model->newProducto($marca, $cantidad, $importado,$precio,$division);
        }
       
    }


    function verImportados(){
        $importados = $this->model->getImportados();
        $this->view->RenderProductos($importados);
    }

    function Masde15yMenosde15(){
        $masde15 = $this->model->GetProductosMasde15();
        $menosde15 = $this->model->GetProductosMenosde15();

        $this->view->RenderProductos($masde15);
        $this->view->RenderProductos($menosde15);
    }

}