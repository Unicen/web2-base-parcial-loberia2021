<?php
require_once 'models/publicModel.php';
require_once 'views/publicView.php';
class PublicController {

    private $model;
    private $view;

    public function __contruct(){
        $this->model = new PublicModel;
        $this->view = new PublicView;
    }

    public function showHome(){

        $alumnos = $this->model->getAll();
        $this->view->home($alumnos);
    }

}