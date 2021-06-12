<?php
require_once('views/producto.division.php');
require_once('models/division.model.php');

class DivisionController{

    private $view;
    private $modelDivision;

    public function __construct(){
        $this->modelDivision = new DivisionModel();
        $this->view = new ProductoDivisionView();
    }

    public function divisiones(){

        //cuento todas las divisiones que tienen faltantes y las guardo en una variable
        $faltantes = $this->modelDivision->contar();
        //obtengo todas la info de las divisiones con faltantes
        $divisiones = $this->modelDivision->obtener();

        $this->view->mostrarDivisiones($faltantes, $divisiones);
    }

    public function formularioAgregar(){
        $this->view->mostrarFormulario();
    }

     //funcion para agregar una division con toda la info que este en el formulario en la vista.
     public function agregar(){
        $nombre = $_POST["nombre"];
        $faltante = $_POST["faltante"];

        //busco en la tabla de division alguna que coincida con el nombre puesto por el usuario.
        $divisionDb = $this->modelDivision->obtenerDivision($nombre);

        //Si no hay ningun input vacio y si no se obtuvo una division en la base de datos que coincida
        //con lo ingresado por el usuario ahi si lo agrego.
        if(!empty($nombre) && empty($divisionDb)){
            $this->modelDivision->agregar($nombre, $faltante);
            header("Location: " . BASE_URL . 'home');
        } else  echo("Campos obligatorios vacios o nombre ya en uso");
    }


}