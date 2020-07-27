<?php  

session_start();
require_once "Modelos/auditoria.php";

/**
 * 
 */
class AuditoriaControlador
{
	
	private $modelo;
	
	 public function __CONSTRUCT()
	{
		 $this->modelo=new Auditoria;
	}

	public function Registrar_Auditoria()
    {
        require_once "Vistas/Inicio/encabezado.php";
        require_once "Vistas/Auditoria/registrar_auditoria.php";
        require_once "Vistas/Inicio/pie.php";
        require_once "Vistas/Inicio/modal.php";
    }


    public function Insertar_Auditoria()
    {
    	$auditoria= new Auditoria();
    	$auditoria->set_Cod_usuario($_POST["cod_usuario"]);
    	$auditoria->set_Qf($_POST["codigo_qf"]);
    	$auditoria->set_Tema($_POST["tema"]);
    	$auditoria->set_Numero_t($_POST["numero_T"]);
    	$auditoria->set_Observacion($_POST["observacion"]);
    	$auditoria->set_Fecha($_POST["fecha"]);
    	 $this->modelo->Inserta_auditoria($auditoria);
        header("location:?c=auditoria&a=Registrar_Auditoria"); 
	}

public function Listar_Adutoria()
{
        require_once "Vistas/Inicio/encabezado.php";
        require_once "Vistas/Auditoria/listar_auditoria.php";
        require_once "Vistas/Inicio/pie.php";
        //require_once "Vistas/Inicio/modal.php";

}

}
?>