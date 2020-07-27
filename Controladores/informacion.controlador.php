<?php
session_start();
require_once "Modelos/informacion.php";
class InformacionControlador
{
    private $modelo;
    
    public function __CONSTRUCT()
    {
        $this->modelo=new Informacion;

    }

    public function Regsitrar_Datos()
    {
        require_once "Vistas/Inicio/encabezado.php";
        require_once "Vistas/Informacion/registrar_informacion.php";
        //require_once "Vistas/Inicio/modal.php";
        require_once "Vistas/Inicio/pie.php";
    }


    public function  listar()
    {
        require_once "Vistas/Inicio/encabezado.php";
        require_once "Vistas/Informacion/informacion.php";
        require_once "Vistas/Inicio/pie.php";
        require_once "Vistas/Modales/modal_informacion.php";
    }

    public function Listar_Linea_Fija()
    {
        $_SESSION["servicio"]="Linea Fija";

        $this->listar();
         
    }

    public function Listar_Linea_Ip()
    {   

        $_SESSION["servicio"]="Linea IP";
        $this->listar();

    }


    public function Listar_Tv_Basico()
    {
        $_SESSION["servicio"]="TV Basico";
         $this->listar();
    }


    public function Listar_Tv_Digital()
    {
        $_SESSION["servicio"]="TV Digital";
         $this->listar();    
     }

    public function Listar_Tv_Dth()
    {
        $_SESSION["servicio"]="DTH";
         $this->listar();
    }


    public function Listar_Adsl()
    {
        $_SESSION["servicio"]="Internet Adsl";
         $this->listar();
    }


    public function Listar_Internet_Hfc()
    {
        $_SESSION["servicio"]="Internet HFC";
         $this->listar();
    }

    public function Listar_Gpon()
    {
        $_SESSION["servicio"]="Gpon";
         $this->listar();
    }

    public function Listar_Trasmision_Datos()
    {
        $_SESSION["servicio"]="Transmisión de Datos";
         $this->listar();
    }

        public function Listar_General()
    {
        $_SESSION["servicio"]="General";
         $this->listar();
    }


    

    public function Obtener_codigo()
    {
        $us=new Informacion();
       $codigo= $us->Obtener_codigo( $_SESSION["usuario"]);
       return $codigo;
      
        
    }

    public function Obtener_cod_servicio()
    {
       /* $se=new Informacion();
        $codigo_ser=$se->Obtener_cod_servicio($_REQUEST['cod_servicio']);
        return $codigo_ser;*/
        echo $_GET["cod_servicio"];
        

    }


  

    

    public function validar_imagen()
    {
        
        if($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/gif" || $_FILES['imagen']['type'] == "image/png" )
        {
            $ruta= "assets/Imagenes/informacion/" . $_FILES['imagen']['name'];
            move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta);
            return $ruta;
        }


        else{
             echo "Error a Subir la Imagen";
        }
        
    }

    public function Insertar_Informacion()
    {
        $inf= new Informacion();
        $inf->set_Cod_Servicio($_POST["cod_servicio"]);
        $inf->set_Cod_user($this->Obtener_codigo());
        $inf->set_Titulo($_POST["titulo"]);
        $inf->set_Fecha($_POST["fecha"]);
        $inf->set_Descripcion($_POST["descripcion"]);
        $inf->set_Imagen($this->validar_imagen());

        $this->modelo->Insertar_Informacion($inf);
        header("location:?c=informacion&a=Regsitrar_Datos");
        

    }


    public function Actuliazar_informacion()
    {

        $inf= new Informacion();
        
        $inf->set_Codigo($_POST["id_informacion"]);
        $inf->set_Titulo($_POST["titulo"]);
        $inf->set_Fecha($_POST["fecha"]);
        $inf->set_Descripcion($_POST["descripcion"]);
        $inf->set_Imagen($this->validar_imagen());
        $this->modelo->Actualizar_Informacion($inf);
        header("location:?c=usuario&a=Panel");

    }

    public function Eliminar_informacion()
    {
        $codigo=$_POST["id_informacion"];
        $this->modelo->Eliminar_Informacion($codigo);
        header("location:?c=usuario&a=Panel");

    }

}

