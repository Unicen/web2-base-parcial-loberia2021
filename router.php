<?php
  
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    require_once './controllers/AlumnoController.php';
    require_once './controllers/Controller.php';
    require_once './controllers/VehiculoController.php';

    
    if (empty($_GET['action'])) {
        $_GET['action'] = 'home';
    } 

    
    $accion = $_GET['action']; 
    $parametros = explode('/', $accion);

    $Controller= new Controller;
    $AlumnoController= new AlumnoController;
    $VehiculoController= new VehiculoController;

    // TABLA DE RUTEO
    switch ($parametros[0]) {
        case 'home': 
            $Controller->Home();
            break;
        case 'tablamayores25yaprobados':
            $AlumnoController->showMayoresDe25YAprobados();
            break;
        case'registrar':
            $Controller->Registrar();
            break;
        case 'agregarAlumno':
            $AlumnoController->addAlumno();
            break;
        default: 
            echo "404";
        break;
    
    }