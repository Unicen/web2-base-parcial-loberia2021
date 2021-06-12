<?php

require_once 'controllers/PublicController.php';

// base url
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

// define una acción por defecto
if (empty($_GET['action'])) {
    $_GET['action'] = 'home';
}

// toma la acción que viene del usuario y parsea los parámetros
$accion = $_GET['action'];
$parametros = explode('/', $accion);
$PublicController = new PublicController;
// TABLA DE RUTEO
switch ($parametros[0]) {
    case 'home': //home/
        $PublicController->showHome();
        break;

    case 'InsertarAlumno': //home/insertarAlumno
        $PublicController->insertarVehiculo($parametros[1]);
        break;
    case 'Insertar': //home/insertar
        $PublicController->insertarAlumno();
        break;
    default:
        $PublicController->showError('Error 404');
        break;
}
