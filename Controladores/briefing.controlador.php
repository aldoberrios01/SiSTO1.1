<?php
session_start();
require_once "Modelos/briefing.php";


class BriefingControlador{
    private $modelo;

    public function __construct(){
        $this->modelo=new Briefing;
    }
    public function Vista_Briefing(){
        require_once "Vistas/Inicio/encabezado.php";
        require_once "Vistas/Briefing/briefing.php";
        require_once "Vistas/Inicio/pie.php";
        require_once "Vistas/Inicio/modal.php";
    }

    public function Vista_Briefing_Avanzado(){
        require_once "Vistas/Inicio/encabezado.php";
        require_once "Vistas/Briefing/buscar_briefing.php";
        require_once "Vistas/Inicio/pie.php";
        require_once "Vistas/Inicio/modal.php";
    }

    /* public function Insertar_Briefing(){
        $brief=new Briefing();
        $brief->setCod_usuario($_POST["cod_usuario"]);
        $brief->setIdestados($_POST["idestados"]);
        $brief->setFecha($_POST["fechas"]);
        $this->modelo->Insertar_Briefing($brief);
        header("location:?c=briefing&a=Vista_Briefing");
    } */
    public function Insertar_Briefing(){
        
        $estados=$_POST["idestados"];
        $fecha=$_POST["fechas"];
        foreach(explode("/",$_POST["ids"]) as $cod_usuario)
        {
            $brief=new Briefing();
            $brief->setCod_usuario($cod_usuario);
            $brief->setIdestados($estados);
            $brief->setFecha($fecha);
            $this->modelo->Insertar_Briefing($brief);
            header("location:?c=briefing&a=Vista_Briefing");
        } 
    }
    public function Actualizar_Briefing(){
        $brief=new Briefing();
        $brief->setIdbriefing($_POST["idbriefing"]);
        $brief->setCod_usuario($_POST["cod_usuario"]);
        $brief->setIdestados($_POST["idestados"]);
        $brief->setFecha($_POST["fecha"]);
        $this->modelo->Actualizar_Briefing($brief);
        header("location:?c=briefing&a=Vista_Briefing");
    }
    public function Eliminar_Briefing(){
        
        $brief=$_POST["idbriefing"];
        $this->modelo->Eliminar_Briefing($brief);
        header("location:?c=briefing&a=Vista_Briefing");
    }
}
?>