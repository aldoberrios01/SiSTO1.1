<?php
require_once "Modelos/rrhh.php";
class Usuario
{
     private $pdo;
     private $cod_usuario;
     private $idskills;
     private $idcategoria_staff;
     private $nombre;
     private $apellido;
     private $nickname;
     private $password;
     private $tipo_usuario;
     private $skill;
     private $tipo_rol;

     public function __CONSTRUCT()
     {
        $this->pdo=BasedeDatos::Conectar();
     }

     //propiedades

     public function get_IdSkills() : ?int
     {
        return $this->idskills;
     }

     public function set_IdSkills(int $idskills)
     {
        $this->idskills=$idskills;
     }

     public function get_IdCategoria_Staff() : ?int
     {
        return $this->idcategoria_staff;
     }

     public function Set_Idcategoria_Staff($idcategoria_staff) 
     {
        $this->idcategoria_staff=$idcategoria_staff;
     }
     public function get_Cod_usuario() : ?string
     {
         return $this->cod_usuario;
     }

     public function set_Cod_user(string $cod_usuario )
     {
         $this->cod_usuario=$cod_usuario;
     }


     public function get_Nombre() : ?string
     {
         return $this->nombre;
     }

     public function set_Nombre(string $nombre )
     {
         $this->nombre=$nombre;
     }

     public function get_Apellido() : ?string
     {
         return $this->apellido;
     }

     public function set_Apellido(string $apellido )
     {
         $this->apellido=$apellido;
     }

     public function get_Nickname() : ?string
     {
         return $this->nickname;
     }

     public function set_Nickname(string $nickname )
     {
         $this->nickname=$nickname;
     }

     public function get_Password() : ?string
     {
         return $this->password;
     }

     public function set_Password(string $password )
     {
         $this->password=$password;
     }

     public function get_Tipo_Usuario() : ?string
     {
         return $this->tipo_usuario;
     }

     public function set_Tipo_Usuario(string $tipo_usuario )
     {
         $this->tipo_usuario=$tipo_usuario;
     }

     public function get_Skill(): ?string
     {
        return $this->skill;
     }

     public function set_Skill(string $skill)
     {
        $this->skill=$skill;
     }

     public function get_Tipo_Rol()
     {
        return $this->tipo_rol;
     }

     public function set_Tipo_Rol(string $tipo_rol)
     {
        $this->tipo_rol=$tipo_rol;
     }



     //Metodos 

     public function Cantidad_User()
     {
         try
         {
            $consulta=$this->pdo->prepare("SELECT count(*) as total from usuarios;");
            //$consulta=$this->pdo->prepare("SELECT nombre from usuarios;");
             $consulta->execute();
             return $consulta->fetch(PDO::FETCH_OBJ);

         }catch(Exception $e)
         {
             
             die($e->getMessage());
         }
     }
     public function Buscar_Usuario($busqueda){
        try
        {
            $consulta = $this->pdo->prepare(
                "SELECT * FROM usuarios WHERE nickname
                LIKE '%".$busqueda."%' ORDER BY nickname ASC");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_ASSOC);

        }catch(Exception $e)
        {
            die($e->getMessage());
        }
     }
     public function Listar()
     {
        try
        {
            $consulta=$this->pdo->prepare("SELECT * FROM usuarios INNER JOIN skills on usuarios.idskills=skills.idskills INNER JOIN categoria_staff on usuarios.idcategoria_staff=categoria_staff.idcategoria_staff ORDER by nombre_skill, nickname  ASC;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);

        }catch(Exception $e)
        {
            die($e->getMessage());
        }
     }
     public function Tipo_user($us)
     {
        try
        {
            $consulta=$this->pdo->prepare("SELECT * FROM usuarios WHERE nickname=? ");
            $consulta->execute(array($us));
            return $consulta->fetchAll(PDO::FETCH_OBJ);

        }catch(Exception $e)
        {
            die($e->getMessage());
        }
     }

      public function Obtener($cod_user)
      {
          try
          {
              $consulta=$this->pdo->prepare("SELECT * FROM usuarios WHERE cod_usuario=?; ");
              $consulta->execute(array($cod_user));
              $r=$consulta->fetch(PDO::FETCH_OBJ);
              $p=new Usuario();
              $p->set_Cod_user($r->cod_usuario );
              $p->set_Nombre($r->nombre);
              $p->set_Apellido($r->apellido);
              $p->set_Nickname($r->nickname);
              $p->set_Password($r->password);
              $p->set_Tipo_Usuario($r->tipo_usuario);
             // $p->set_Skill($r->skill);
              $p->set_Tipo_Rol($r->tipo_rol);
              
              return $p;
          }catch(Exception $e)
          {
              die($e->getMessage());
          }
      }

     public function Insertar(usuario $p)
     {
         try
         {
         $consulta="INSERT INTO usuarios (idskills, idcategoria_staff, cod_usuario, nombre, apellido, nickname, password, tipo_usuario, tipo_rol) values (?,?,?,?,?,?,?,?,?)";
             $this->pdo->prepare($consulta)->execute(array($p->get_IdSkills(),$p->get_IdCategoria_Staff(),$p->get_Cod_usuario(), $p->get_Nombre(), $p->get_Apellido(), $p->get_Nickname(), $p->get_Password(), $p->get_Tipo_Usuario(), $p->get_Tipo_Rol()));   
         }catch(Exception $e)
         {
             die($e->getMessage());
         }
     }

     public function Actualizar(usuario $p)
     {
         try
         {
             $consulta="UPDATE usuarios SET  nickname=?, password=?, tipo_usuario=?,idskills=?,idcategoria_staff=?,tipo_rol=?  where cod_usuario=? ";
             $this->pdo->prepare($consulta)->execute(array($p->get_Nickname(), $p->get_Password(), $p->get_Tipo_Usuario(),$p->get_IdSkills(),$p->get_IdCategoria_Staff(),$p->get_Tipo_Rol(), $p->get_Cod_usuario() ));

         }catch(Exception $e)
         {
             die($e->getMessage());
         }
     }



     public function Eliminar($cod_usuario)
     {
        try
        {
            $consulta= "DELETE from usuarios WHERE cod_usuario=?";
            $this->pdo->prepare($consulta)->execute(array($cod_usuario));

        } catch(Exception $e)
        {
            die($e->getMessage());
        }
     }



     public function IniciarSecion($user,$pass)
     {
        try
        {
            $consulta=$this->pdo->prepare("SELECT * from usuarios where nickname=?  and password=?;");
            $consulta->execute(array($user, $pass));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $resultado =$consulta->rowCount();  
            return $resultado; 
            


        }catch(Exception $e)
        {
            die($e->getMessage());
        }
     }

      public function Cantidad_por_Tipo($servicio)
      {
         try
         {
            $consulta=$this->pdo->prepare("SELECT count(*) as total from servicios, informacion WHERE servicios.tipo_servico=?  AND servicios.cod_servicio=informacion.cod_servicio;");
            //$consulta=$this->pdo->prepare("SELECT nombre from usuarios;");
            $consulta->execute(array($servicio));;
             return $consulta->fetch(PDO::FETCH_OBJ);

         }
         catch(Exception $e)
         {
             
             die($e->getMessage());
         }
      }

      public function Listar_Skill()
      {
         try
         {
            $consulta=$this->pdo->prepare("SELECT * FROM skills ORDER BY nombre_skill ASC;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
         }
         catch(Exception $e)
         {
                die($e->getMessage());
         } 
      }

      public function List_Category(){
        try{
            $consulta=$this->pdo->prepare("SELECT * FROM categoria_staff ORDER BY categoria ASC;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
          }catch(Exception $e){
                die($e->getMessage());
        }
    }
}