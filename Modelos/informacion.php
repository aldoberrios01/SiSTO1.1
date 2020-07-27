<?php
class Informacion 
{
    private $pdo;
    private $codigo;
    private $cod_servicio;
    private $cod_usuario;
    private $descripcion;
    private $fecha;
    private $imagen;
    private $titulo;
    private $tipo_servicio;

    public function __CONSTRUCT()
     {
        $this->pdo=BasedeDatos::Conectar();
        
     }

     //propiedades
     public function get_Codigo() : ?int
     {
         return $this->codigo;
     }

     public function set_Codigo(int $codigo )
     {
         $this->codigo=$codigo;
     }

     public function get_Cod_usuario() : ?string
     {
         return $this->cod_usuario;
     }

     public function set_Cod_user(string $cod_usuario )
     {
         $this->cod_usuario=$cod_usuario;
     }

     public function get_Cod_Servicio() : ?string
     {
         return $this->cod_servicio;
     }

     public function set_Cod_Servicio(string $cod_servicio )
     {
         $this->cod_servicio=$cod_servicio;
     }

     public function get_Descripcion() : ?string
     {
         return $this->descripcion;
     }

     public function set_Descripcion(string $descripcion )
     {
         $this->descripcion=$descripcion;
     }

     public function get_Fecha() : ?string
     {
         return $this->fecha;
     }

     public function set_Fecha(string $fecha )
     {
         $this->fecha=$fecha;
     }

     public function get_Imagen() : ?string
     {
         return $this->imagen;
     }

     public function set_Imagen(string $imagen )
     {
         $this->imagen=$imagen;
     }

     public function get_Titulo() : ?string
     {
         return $this->titulo;
     }

     public function set_Titulo(string $titulo )
     {
         $this->titulo=$titulo;
     }

     public function get_Tipo_Servicio() : ?string
     {
        return $this->tipo_servicio;
     }

     public function set_Tipo_Servicio(string $tipo_servicio )
     {
         $this->tipo_servicio=$tipo_servicio;
     }


     //Metodos
     
     public function Listar_Informacion()
     {
        try
        {
            $consulta=$this->pdo->prepare("SELECT * from informacion;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);

        }catch(Exception $e)
        {
            die($e->getMessage());
        }
     }


    

     public function Listar_Tipo($tipo_servicio)
     {
        try
        {
            $consulta=$this->pdo->prepare("SELECT * FROM servicios, informacion WHERE servicios.tipo_servico=?  AND servicios.cod_servicio=informacion.cod_servicio  ORDER BY informacion.fecha DESC;");
            $consulta->execute(array($tipo_servicio));
            return $consulta->fetchAll(PDO::FETCH_OBJ);

        }catch(Exception $e)
        {
            die($e->getMessage());
        }
     }


     public function Obtener_informacion($codigo)
     {
        try 
        {
            $consulta=$this->pdo->prepare("SELECT *FROM  informacion where Codigo=?; ");
            $consulta->execute(array($codigo));
            return $consulta->fetchAll(PDO::FETCH_OBJ);
            
        } catch (Exception $e) 
        {
             die($e->getMessage());
        }

     }

     public function Insertar_Informacion(informacion $p)
     {
         try
         {
             $consulta="INSERT INTO informacion(cod_servicio,cod_usuario ,descripcion ,fecha,Imangen,titulo) values (?,?,?,?,?,?);";
             $this->pdo->prepare($consulta)->execute(array($p->get_Cod_Servicio(), $p->get_Cod_usuario(), $p->get_Descripcion(), $p->get_Fecha(), $p->get_Imagen(), $p->get_Titulo()));   
         }catch(Exception $e)
         {
             die($e->getMessage());
         }
     }

     public function Actualizar_Informacion(informacion $p)
     {
         try
         {
             $consulta="UPDATE informacion SET titulo=?, fecha=?,descripcion=?,Imangen=? WHERE Codigo=?;";
             $this->pdo->prepare($consulta)->execute(array($p->get_Titulo(), $p->get_Fecha(), $p->get_Descripcion(), $p->get_Imagen(),$p->get_Codigo()));

         }catch(Exception $e)
         {
             die($e->getMessage());
         }
     }

     public function Listar_Servicio()
     {
        try
        {
            $consulta=$this->pdo->prepare("SELECT * from servicios;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);

        }catch(Exception $e)
        {
            die($e->getMessage());
        }
     }

     public function Obtener_codigo($nickname)
      {
          try
          {
              $consulta=$this->pdo->prepare("SELECT * FROM usuarios WHERE nickname=?; ");
              $consulta->execute(array($nickname));
              $r=$consulta->fetch(PDO::FETCH_OBJ);
              $this->set_Cod_user ($r->cod_usuario);
              $codigo=$this->get_Cod_usuario();

              return $codigo;
              
              
              //return $p;
          }catch(Exception $e)
          {
              die($e->getMessage());
          }
      }

      public function Obtener_cod_servicio($servicio)
      {
          try
          {
              $consulta=$this->pdo->prepare("SELECT * FROM servicios WHERE tipo_servico=?; ");
              $consulta->execute(array($servicio));
              $r=$consulta->fetch(PDO::FETCH_OBJ);
              $this->set_Cod_Servicio ($r->cod_servicio);
              $codigo=$this->get_Cod_Servicio();

              return $codigo;
              
              
              //return $p;
          }catch(Exception $e)
          {
              die($e->getMessage());
          }
      }


     public function Eliminar_Informacion($codigo)
     {
        try
        {
            $consulta= "DELETE from informacion WHERE Codigo=?;";
            $this->pdo->prepare($consulta)->execute(array($codigo));

        } catch(Exception $e)
        {
            die($e->getMessage());
        }
     }

   
       
     








}