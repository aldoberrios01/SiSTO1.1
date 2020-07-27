<?php
session_start();
require_once "Modelos/usuarios.php";
class InicioControlador
{
    private $modelo;

    public function __CONSTRUCT()
    {
        $this->modelo= new Usuario();
    }

    public function Inicio()
    {


        require_once "Vistas/Usuario/login.php";
        //require_once "Vistas/Inicio/encabezado.php";
        //require_once "Vistas/Inicio/principal.php";
        //require_once "Vistas/Inicio/modal.php";
       //require_once "Vistas/Inicio/pie.php";

    }
}

?>