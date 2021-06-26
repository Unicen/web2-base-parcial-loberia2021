<?php
    require_once 'controllers/controladordivision.php';
    require_once 'controllers/controladorproducto.php';

    // base url
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    // define una acción por defecto
    if (empty($_GET['action'])) {
        $_GET['action'] = 'home';
    } 

    // toma la acción que viene del usuario y parsea los parámetros
    $accion = $_GET['action']; 
    $parametros = explode('/', $accion);
    $controladivision = new controladivision();
    $controlaproducto = new controlaproducto();

    // TABLA DE RUTEO
    switch ($parametros[0]) {
        case 'home': 
            $controladorproducto->separadivision();
        break;
        case 'guardar': 
            $controladordivision->agregardivision();
        break;
        case 'admin': 
            $controladordivision->generarformulario();
        break;
        
        default:  
            echo "error :c";
        break;
        
    }