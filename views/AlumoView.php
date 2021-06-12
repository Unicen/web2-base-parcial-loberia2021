<?php

require_once ('View.php');

Class AlumnoView extends View{




    function RenderTabla($alumno){

        $this->smarty->assign('alumno', $alumno);

        
    }



}

