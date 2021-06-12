<?php

require_once('View.php');

class vistaAlumno extends View {
    
    function mostrarMas25($alumnos) {
        $this->getSmarty()->assign('listaAlumnos',$alumnos);
        $this->getSmarty()->display('templates/listaAlumnosMas25.tpl');
    }

}