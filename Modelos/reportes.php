<?php  

/**
 * 
 */
class Reportes
{

	private $pdo;
	private $cod_usuario;
	private $codigo_QF;
	private $cic;
    private $tipo_falla;
	private $observaciones;
	private $fecha;
    private $imagen_r;

	
	public function __CONSTRUCT()
	{
		 $this->pdo=BasedeDatos::Conectar();
	}


	//propiedades
     public function get_Cod_usuario() : ?string
     {
         return $this->cod_usuario;
     }

     public function set_Cod_usuario(string $cod_usuario )
     {
         $this->cod_usuario=$cod_usuario;
     }


     public function get_Codigo_QF() : ?string
     {
         return $this->codigo_QF;
     }

     public function set_Codigo_QF(string $codigo_QF )
     {
         $this->codigo_QF=$codigo_QF;
     }

     public function get_Cic() : ?int
     {
         return $this->cic;
     }

     public function set_Cic(int $cic )
     {
         $this->cic=$cic;
     }

     public function get_Tipo_Falla(): string
     {
        return $this->tipo_falla;
     }

     public function set_Tipo_Falla(string $tipo_falla)
     {
        $this->tipo_falla=$tipo_falla;
     }


     public function get_Observaciones() : ?string
     {
         return $this->observaciones;
     }

     public function set_Observaciones(string $observaciones )
     {
         $this->observaciones=$observaciones;
     }


     public function get_Fecha() : ?string
     {
         return $this->fecha;
     }

     public function set_Fecha(string $fecha )
     {
         $this->fecha=$fecha;
     }

     public function get_Imagen_r(): ?string
     {
        return $this->imagen_r;
     }

     public function set_Imagen_r(string $imagen_r)
     {
        $this->imagen_r=$imagen_r;
     }



     //Metodos 


     public function Insertar_Informacion(Reportes $p)
     {
         try
         {
             $consulta="INSERT INTO reportes(cod_usuario ,codigo_QF, cic,tipo_falla,observaciones ,fecha, imagen_r) values (?,?,?,?,?,?,?);";
             $this->pdo->prepare($consulta)->execute(array($p->get_Cod_usuario(), $p->get_Codigo_QF(),  $p->get_Cic(),$p->get_Tipo_Falla(), $p->get_Observaciones(), $p->get_Fecha(),$p->get_Imagen_r()));   
         }catch(Exception $e)
         {
             die($e->getMessage());
         }
     }


     public function Listar_reporte()
     {
        try
        {
             $consulta=$this->pdo->prepare("SELECT  usuarios.cod_usuario, usuarios.nickname, skills.nombre_skill, usuarios.tipo_rol,reportes.codigo_QF,reportes.cic, reportes.tipo_falla, reportes.observaciones, reportes.fecha, reportes.imagen_r FROM reportes INNER JOIN usuarios on reportes.cod_usuario=usuarios.cod_usuario INNER JOIN skills on usuarios.idskills=skills.idskills;");
                $consulta->execute();
                return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e)
        {
            die($e->getMessage());
        }
     }



     public function Listar_reporte_Fecha($fecha_inicial, $fecha_final)
     {
         try
        {
            $consulta=$this->pdo->prepare("SELECT  usuarios.cod_usuario, usuarios.nickname, skills.nombre_skill, usuarios.tipo_rol,reportes.codigo_QF,reportes.cic, reportes.tipo_falla, reportes.observaciones, reportes.fecha, reportes.imagen_r FROM reportes INNER JOIN usuarios on reportes.cod_usuario=usuarios.cod_usuario INNER  JOIN skills on usuarios.idskills=skills.idskills WHERE (reportes.fecha BETWEEN ? and ?) ORDER BY reportes.fecha DESC");
            $consulta->execute(array($fecha_inicial, $fecha_final));
            return $consulta->fetchAll(PDO::FETCH_OBJ);

        }catch(Exception $e)
        {
            die($e->getMessage());
        }
     }
}

?>