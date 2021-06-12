<?php

require_once "./models/model.php";
require_once "./views/view.php";


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

 
}