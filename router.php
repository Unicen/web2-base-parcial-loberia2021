<?php
    //require_once 'controllers/example.controller.php';
    require_once('controllers/controlavehiculos.php');
    require_once('controllers/controlalumnos.php');
    // base url
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    // define una acción por defecto
    if (empty($_GET['action']=='')) {
        $_GET['action'] = 'home';
    } 

    // toma la acción que viene del usuario y parsea los parámetros
    $parametros = explode('/',$_GET['action']);
    $controlavehiculos = new controlvehicular();
    $controlalumnos = new controlalumnos();

    // TABLA DE RUTEO
    switch ($parametros[0]) {
        case 'home': 
            $controlavehiculos->rotosinprofe();
        break;
        case 'admin':
            $controlalumnos->muestraformulario();
        break;
        case 'guardar':
            $controlalumnos->agregaralumno();
        break;
        
        default:  
            echo "404";
        break;
        
    }