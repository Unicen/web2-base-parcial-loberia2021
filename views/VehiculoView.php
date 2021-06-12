<?php

require_once 'View.php';

class VehiculoView extends View
{


    public function __construct()
    {
        parent::__construct();
    }


    public function showHome($alumsxvehiculo){

        $this->getSmarty()->assign('title', 'Home');
        $this->getSmarty()->assign('alumsxvehiculo', $alumsxvehiculo);

        $this->getSmarty()->display('templates/home.tpl');

    }
}
