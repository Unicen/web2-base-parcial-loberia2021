<?php

require_once('View.php');


class ProductosView extends View{


    function RenderDivision($division){
        $this->getSmarty()->assign('division',$division;
        $this->getSmarty()->display("templates/home.tpl");
    }

  
    
}