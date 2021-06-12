<?php
    //require_once 'controllers/example.controller.php';

    // base url
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    // define una acción por defecto
    if (empty($_GET['action'])) {
        $_GET['action'] = 'home';
    } 

    // toma la acción que viene del usuario y parsea los parámetros
    $accion = $_GET['action']; 
    $parametros = explode('/', $accion);



require_once('controllers/controller.php');
require_once('controllers/controllerProductos.php');
require_once('controllers/controllerDivision.php');

$Controller = new Controller();
$ControllerProductos = new ControllerProductos();
$ControllerDivision = new ControllerDivision();

    // TABLA DE RUTEO
    switch ($parametros[0]) {
        case 'home': 
            $ControllerProductos->showProductos();
        break;
        case 'agregarProducto':
            $ControllerProductos->agregarProducto();
            break;
        case 'agregarDivision':
            $ControllerDivision->nuevaDivision();
            break;
        case 'faltantes':
            $ControllerDivision->verFaltantes();
            break;
        case 'importados':
            $ControllerDivision->verImportados();
             break;
        case   '15productos'
             $ControllerProductos->Masde15yMenosde15();
        case   '10productos'
             $ControllerProductos->stock10();
        default:  
            echo "404";
        break;
        
    }