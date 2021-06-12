<?php

require_once('./libs/Smarty.class.php');

Class View {
    private $smarty;
    private $view;

    public function __construct(){
        $this->smarty = new Smarty;


    }


}