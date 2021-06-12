<?php

require_once ('./libs/smarty/Smarty.class.php');

class View
{

    private $smarty;



    function RenderHome()
    {
        $this->smarty->display("templates/home.tpl");
    }

    function RenderRegistrar()
    {
        $this->smarty->display("templates/agregaralumno.tpl");
    }
}
