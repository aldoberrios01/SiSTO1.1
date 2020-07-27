<?php
class Servicio
{
     private $pdo;
     private $cod_servicio;
     private $tipo_servicio;

     public function __CONSTRUCT()
     {
        $this->pdo=BasedeDatos::Conectar();
     }

     //propiedades
     public function get_Cod_Servicio() : ?string
     {
         return $this->cod_servicio;
     }

     public function set_Cod_Servicio(string $cod_servicio )
     {
         $this->cod_servicio=$cod_servicio;
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


     public function Listar_Servicio()
     {
        try
        {
            $consulta=$this->pdo->prepare("SELECT * from Servicios;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);

        }catch(Exception $e)
        {
            die($e->getMessage());
        }
     }

}