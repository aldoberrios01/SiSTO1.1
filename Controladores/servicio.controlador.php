<?php
require_once "Modelos/servicios.php";
class ServicioControlador
{
    private $modelo;
    
    public function __CONSTRUCT()
    {
        $this->modelo=new Servicio;

    }

    public function Listar_Servicio()
    {
        $s=new Servicio();
        $s=$this->modelo->Listar_Servicio();
    }
    
}
