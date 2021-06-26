<?php
require_once('view.php');


class ViewProducto extends View{

    public function __construct() {
        parent::__construct();
    }

     public function mostrarLista($importados, $nacionales){ 
        $this->getSmarty()->assign('importados', $importados);
        $this->getSmarty()->assign('nacionales', $nacionales);
        $this->getSmarty()->display('templates/listarProductos.tpl');

    }

         public function mostrarFormulario(){
            $this->getSmarty()->display('templates/formulario.tpl');
    
        }
}
