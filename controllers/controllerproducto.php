<?php
require_once('views/viewProductos.php');
require_once('models/modelproducto.php');

class ControllerProducto {

    private $view;
    private $modelProducto;

    public function __construct(){
        $this->modelProducto = new ModelProducto();
        $this->view = new ViewProducto();
    }

    public function productos(){

     
        $importados = $this->modelProducto->listarImportados();
        $nacionales= $this->modelProducto->listarNacionales();
        $this->view->mostrarLista($importados,$nacionales);
    }

    public function formularioAgregar(){
        $this->view->mostrarFormulario();
    }

     public function agregar(){
        $nombre = $_POST["nombre"];
        $marca = $_POST["marca"];
        $cantidad = $_POST["cantidad"];
        $importado = $_POST["importado"];
        $precio = $_POST["precio"];
        $division = $_POST["division"];

        if(!empty($nombre) && empty($cantidad)&& empty($precio)){
            $this->modelProducto->newProducto($nombre, $marca,$cantidad,$importado,$precio,$division);
            header("Location: " . BASE_URL . 'listarProductos');
        } else  echo("Campos vacios");
    }


}