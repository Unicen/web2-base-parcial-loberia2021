<?php

require_once('./libs/smarty/Smarty.class.php');

class View
{
    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty;
        $this->smarty->assign('base_url', BASE_URL);
    }

    public function getSmarty()
    {
        return $this->smarty;
    }

    public function renderHome($alumnos, $vehiculos)
    {
        $this->getSmarty()->assign('alumnos', $alumnos);
        $this->getSmarty()->assign('vehiculos', $vehiculos);
        $this->getSmarty()->display('templates/home.tpl');
    }

    public function renderFormVehiculo()
    {
        $this->getSmarty()->display('templates/formvehiculo.tpl');
    }
    public function renderFormAlumno()
    {
        $this->getSmarty()->display('templates/formalumno.tpl');
    }
}
