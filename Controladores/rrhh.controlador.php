<?php

session_start();
require_once "Modelos/rrhh.php";


class RrhhControlador{
    private $modelo_Estados;
    private $modelo_Skills;
    private $modelo_Categoria;

    public function __construct(){
        $this->modelo_Estados=new Estados;
        $this->modelo_Skills=new Skills;
        $this->modelo_Categoria=new Categoria_Staff;
    }
    public function Vista_Inicial(){
        require_once "Vistas/Inicio/encabezado.php";
        require_once "Vistas/RRHH/rrhh.php";
        require_once "Vistas/Inicio/pie.php";
        require_once "Vistas/Inicio/modal.php";
        

    }
    
    public function Insertar_Estados(){
        $estado=new Estados();
        $estado->setNombre($_POST["nom"]);
        //reemplazar los saltos de lineas si existen
        $estado->setComentario($_POST["comenta"]);
        $this->modelo_Estados->Insertar_Estados($estado);
        header("location:?c=rrhh&a=Vista_Inicial");
    }
    public function Actualizar_Estados(){
        $estado=new Estados();
        $estado->setIdestados($_POST["id_estado"]);
        $estado->setNombre($_POST["nom"]);
        //reemplazar los saltos de lineas si existen
        $estado->setComentario($_POST["comenta"]);
        $this->modelo_Estados->Actualizar_Estados($estado);
        header("location:?c=rrhh&a=Vista_Inicial");
    }
    public function Eliminar_Estados(){
        
        $estado=$_POST["id_estado"];
        $this->modelo_Estados->Eliminar_Estados($estado);
        header("location:?c=rrhh&a=Vista_Inicial");
    }

//Datos Skills
    public function Insertar_Skills(){
        $skills=new Skills();
        $skills->setNombre($_POST["nombre"]);
        $this->modelo_Skills->Insert_Skills($skills);
        header("location:?c=rrhh&a=Vista_Inicial");
    }
    public function Actualizar_Skills(){
        $skills=new Skills();
        $skills->setIdskills($_POST["idskills"]);
        $skills->setNombre($_POST["nombre"]);
        $this->modelo_Skills->Update_Skills($skills);
        header("location:?c=rrhh&a=Vista_Inicial");
    }
    public function Eliminar_Skills(){
        $idskills=$_POST["idskills"];
        $this->modelo_Skills->Delete_Skills($idskills);
        header("location:?c=rrhh&a=Vista_Inicial");
    }

    //Datos Categoria Staff
    public function Insertar_Categoria(){
        $category=new Categoria_Staff();
        $category->setNombre($_POST["nombre"]);
        $this->modelo_Categoria->Insert_Category($category);
        header("location:?c=rrhh&a=Vista_Inicial");
    }
    public function Actualizar_Categoria(){
        $category=new Categoria_Staff();
        $category->setIdcategoria_staff($_POST["idcategoria_staff"]);
        $category->setNombre($_POST["nombre"]);
        $this->modelo_Categoria->Update_Category($category);
        header("location:?c=rrhh&a=Vista_Inicial");
    }
    public function Eliminar_Categoria(){
        
        $ifcategoria_staff=$_POST["idcategoria_staff"];
        $this->modelo_Categoria->Delete_Category($ifcategoria_staff);
        header("location:?c=rrhh&a=Vista_Inicial");
    }

}

?>