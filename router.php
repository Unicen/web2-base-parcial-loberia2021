<?php
    //controladores
    require_once('controllers/DivisionController.php');
    require_once('controllers/ProductoController.php');

    $divisionController = new DivisionController();
    $productoController = new ProductoController();

    // base url
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    // define una acción por defecto
    if (empty($_GET['action'])) {
        $_GET['action'] = 'home';
    } 

    // toma la acción que viene del usuario y parsea los parámetros
    $accion = $_GET['action']; 
    $parametros = explode('/', $accion);

    // TABLA DE RUTEO
    switch ($parametros[0]) {
        case 'home': 
            echo "home";
        break;
        case 'verProductos': 
           $this->$divisionController->showListarProductos(10);
        break;
        case 'crearNuevaDivision': 
            $this->$productoController->showCreateDivision();
        break;
        case 'crearDivision': 
            $this->$productoController->createDivision();
        break;
        default:  
            echo "404";
        break;
        
    }