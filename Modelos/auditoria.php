<?php  



/**
 * 
 */
class Auditoria
{

	private $pdo;
	private $cod_usuario;
	private $qf;
	private $tema;
	private $numero_t;
	private $observacion;
	private $fecha;
	
	
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


     public function get_Qf(): ?int
     {
     	return $this->qf;
     }

     public function set_Qf(int $qf)
     {
     	$this->qf=$qf;
     }


     public function get_Tema():?string 
     {
     	return $this->tema;
     }

     public function set_Tema(string $tema)
     {
     	$this->tema=$tema;
     }

     public function get_Numero_t(): ?int
     {
     	return $this->numero_t;
     }

     public function set_Numero_t(int $numero_t)
     {
     	$this->numero_t=$numero_t;
     }

     public function get_Observacion(): ?string
     {
     	return $this->observacion;
     }

     public function set_Observacion(string $observacion)
     {
     	$this->observacion=$observacion;
     }

     public function get_Fecha() : ?string
     {
         return $this->fecha;
     }

     public function set_Fecha(string $fecha )
     {
         $this->fecha=$fecha;
     }


     //Metodos

     public function Inserta_auditoria(Auditoria $p)
     {
     	try
         {
             $consulta="INSERT INTO auditorias (cod_usuario	,qf, tema,numero_t ,observacion ,fecha) values (?,?,?,?,?, ?);";
             $this->pdo->prepare($consulta)->execute(array($p->get_Cod_usuario(), $p->get_Qf(),  $p->get_Tema(),$p->get_Numero_t(), $p->get_Observacion(), $p->get_Fecha(),));   
         }catch(Exception $e)
         {
             die($e->getMessage());
         }
     }


     public function Listar_usuario()
     {
        try
        {
            $consulta=$this->pdo->prepare("SELECT * from usuarios ORDER BY nickname ASC;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);

        }catch(Exception $e)
        {
            die($e->getMessage());
        }
       
     }


     public function Listar_reporte_Usuario($usuario)
     {
        try
        {
            $consulta=$this->pdo->prepare("SELECT usuarios.cod_usuario, usuarios.nickname, auditorias.qf, auditorias.numero_t, auditorias.tema, auditorias.observacion, auditorias.fecha FROM usuarios, auditorias WHERE usuarios.nickname='juan.berrios' AND usuarios.cod_usuario=auditorias.cod_usuario ORDER BY auditorias.fecha DESC");
            $consulta->execute(array($usuario));
            return $consulta->fetchAll(PDO::FETCH_OBJ);

        }catch(Exception $e)
        {
            die($e->getMessage());
        }


     }


     public function Listar_auditria()
     {
        try {


            $consulta=$this->pdo->prepare("SELECT usuarios.cod_usuario, usuarios.nickname, auditorias.qf, auditorias.numero_t, auditorias.tema, auditorias.observacion, auditorias.fecha FROM usuarios, auditorias WHERE usuarios.cod_usuario=auditorias.cod_usuario ORDER BY auditorias.fecha DESC");
                 $consulta->execute(array());
                return $consulta->fetchAll(PDO::FETCH_OBJ);
            
        } catch (Exception $e) {
            
            die($e->getMessage());
        }

     }


}
?>