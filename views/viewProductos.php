<?php

require_once('View.php');


class ProductosView extends View{


    function RenderProductos($productos){
        $this->getSmarty()->assign('productos',$productos);
        $this->getSmarty()->display("templates/home.tpl");
    }

  
}