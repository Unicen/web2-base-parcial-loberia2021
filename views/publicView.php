<?php

require_once ('views/View.php');

class  PublicView extends View{

    public function __contruct(){
        parent::__construct();
    }

    public function home($alumnos){

        $this->getSmarty()->assign('title','Home');
        $this->getSmarty()->assign('alumnos', $alumnos);
        $this->getSmarty()->display('templates/home.tpl');
    }
}