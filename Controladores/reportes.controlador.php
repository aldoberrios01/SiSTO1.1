<?php 

session_start();
require_once "Modelos/reportes.php";

class ReportesControlador
{

	private $modelo;
	
	 public function __CONSTRUCT()
	{
		 $this->modelo=new Reportes;
	}


	public function Registrar_reporte()
    {
        require_once "Vistas/Inicio/encabezado.php";
        require_once "Vistas/Reportes/registrar_reporte.php";
        require_once "Vistas/Inicio/pie.php";
        require_once "Vistas/Inicio/modal.php";
    }


    public function Insertar_Reporte()
    {
    	$reportes= new Reportes();
    	$reportes->set_Cod_usuario($_SESSION["cod_usuario"]);
    	$reportes->set_Codigo_QF($_POST["codigo_qf"]);
    	$reportes->set_Cic($_POST["cic"]);
        $reportes->set_Tipo_Falla($_POST["tipo_falla"]);
    	$reportes->set_Observaciones($_POST["observaciones"]);
    	$reportes->set_Fecha($_POST["fecha"]);
        $reportes->set_Imagen_r($this->validar_imagen());
    	 $this->modelo->Insertar_Informacion($reportes);

        header("location:?c=reportes&a=Registrar_reporte");




    }


    public function Listar_reporte()
    {
         require_once "Vistas/Inicio/encabezado.php";
        require_once "Vistas/Reportes/data_reporte.php";
        require_once "Vistas/Inicio/pie.php";
        require_once "Vistas/Reportes/modal_reporte.php";

    }

    public function Listar_fecha()
    {

        $_SESSION["fecha_inicio"]=$_POST["fecha_incio"];
        $_SESSION["fecha_final"]=$_POST["fecha_final"];
        header("location:?c=reportes&a=Listar_reporte");

    }

    public function exporte_reporte()
    {
        require_once "Vistas/Reportes/reporte_excel.php";

    }

     public function validar_imagen()
    {
        $ruta="";

        if($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/gif" || $_FILES['imagen']['type'] == "image/png" )
        {
            $ruta= "assets/Imagenes/reportes/" . $_FILES['imagen']['name'];
            move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta);
            return $ruta;
        }


        else{
             //echo "Error a Subir la Imagen";
            return $ruta;
        }
        
    }



}
 ?>