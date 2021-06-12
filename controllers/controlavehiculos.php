<?php

include_once('models/modelovehiculos.php');
include_once('views/vistavehiculos.php');

class controlvehicular{
    private $modelovehiculo;
    private $vistavehiculo;

    public function __construct(){
        $this->modelovehiculo = new modelovehiculo();
        $this->vistavehiculo = new vistavehiculo();
    }

    public function rotosinprofe(){
        $vehiculosrotosinprofe = $this->modelovehiculo->getrotosinprofe();
        $this->vistavehiculo->showrotosinprofe($vehiculosrotosinprofe);
    }
}