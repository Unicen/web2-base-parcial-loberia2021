<?php
require_once('view.php');


class ProductoDivisionView extends View{

    public function __construct() {
        parent::__construct();
    }

     //funcion para mostrar la lista de divisiones con faltantes
     public function mostrarDivisiones($faltantes, $divisiones){
    
        $this->getSmarty()->assign('title','Divisiones');
        $this->getSmarty()->assign('cantidad', $faltantes);
        $this->getSmarty()->assign('divisiones', $divisiones);

        //llamo al template a mostrar al usuarix.
        $this->getSmarty()->display('templates/home.tpl');

    }

         //funcion para mostrar el formulario para agregar una division
         public function mostrarFormulario(){
    
            $this->getSmarty()->assign('title','Agregar');
    
            //llamo al template a mostrar al usuarix.
            $this->getSmarty()->display('templates/admin.tpl');
    
        }
}