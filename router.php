<?php
    require_once 'controllers/controllerproducto.php';

    // base url
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    // define una acción por defecto
    if (empty($_GET['action'])) {
        $_GET['action'] = 'listarProductos';
    } 

    // toma la acción que viene del usuario y parsea los parámetros
    $accion = $_GET['action']; 
    $parametros = explode('/', $accion);

    
    // TABLA DE RUTEO
    switch ($parametros[0]) {
        case 'listarProductos':
            $controllerProducto = new ControllerProducto();
            $controllerProducto->productos();
        break;
        case 'formulario': 
            $ControllerProducto = new ControllerProducto();
            $ControllerProducto->agregar();
        break;
        default:  
            echo "404";
        break;
    }

   