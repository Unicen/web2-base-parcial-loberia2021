<?php

require_once('./views/View.php');

class Controller
{

    private $view;


    function __construct()
    {
        $this->view = new View();
    }

    function Home()
    {
        $this->view->RenderHome();
    }

    function Registrar()
    {
        $this->view->RenderHome();
    }
}
