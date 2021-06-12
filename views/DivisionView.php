<?php

require_once('View.php');

class AdminView extends View {

    public function __construct() {
        parent::__construct();
    }

    public function showCreateDivision() {
        $this->getSmarty()->assign('title', "Crear Division");      
        $this->getSmarty()->assign('home', BASE_URL.'home');
        $this->getSmarty()->display('templates/createDivision.tpl');
    }
}