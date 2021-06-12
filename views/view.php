<?php

require_once "./libs/Smarty/Smarty.class.php";

class View
{


    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->assign('base_url', BASE_URL);
    }

    public function getSmarty()
    {
        return $this->smarty;
    }


    function RenderHome()
    {
        $this->smarty->display("templates/home.tpl");
    }


    function ShowHomeLocation()
    {
        header("Location: " . BASE_URL . "index");
    }
}