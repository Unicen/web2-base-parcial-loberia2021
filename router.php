<?php
    require_once('controllers/controladivision.php');

    // base url
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    // define una acción por defecto
    if (empty($_GET['action'])) {
        $_GET['action'] = 'home';
    } 

    // toma la acción que viene del usuario y parsea los parámetros
    $accion = $_GET['action']; 
    $parametros = explode('/', $accion);
    $controladivision = new Controladivision();

    // TABLA DE RUTEO
    switch ($parametros[0]) {
        case 'home': 
            $controladivision->mostrarfaltantes();  //muestra una lista en "home" de divisiones que tenga faltantes.
        break;
        
        default:  
            echo "404";
        break;
        
    }