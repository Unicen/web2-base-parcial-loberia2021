<?php

require_once './controllers\Controller.php';

// base url
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

// define una acción por defecto
if (empty($_GET['action'])) {
    $_GET['action'] = 'home';
}

// toma la acción que viene del usuario y parsea los parámetros
$accion = $_GET['action'];
$parametros = explode('/', $accion);

$Controller = new Controller();

// TABLA DE RUTEO
switch ($parametros[0]) {
    case 'home':
        $Controller->home();
        break;
    case 'formAlumno':
        $Controller->displayFormAlumno();
        break;
    case 'formVehiculo':
        $Controller->displayFormVehiculo();
        break;
    default:
        echo "404";
        break;
}
