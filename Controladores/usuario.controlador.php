<?php
session_start();
require_once "Modelos/usuarios.php";

class UsuarioControlador
{
    private $modelo;
    
    public function __CONSTRUCT()
    {
        $this->modelo=new Usuario;

    }

    public function IniciarSecion()
    {
        //$s= new usuario();  
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $nombreusuario = $_POST['usuario'];
            $password = $_POST['password'];
            
            
            $s=$this->modelo->IniciarSecion($nombreusuario,$password);
           

            if($s>0)
            {
                $_SESSION["usuario"] = $_POST["usuario"]; 
                 
                 foreach($this->modelo->Tipo_user($_SESSION["usuario"]) as $r)
                 {
                    $_SESSION["tipo_usuario"]=$r->tipo_usuario;
                     $_SESSION["cod_usuario"]=$r->cod_usuario;
                    
                 }
               //$this->Panel();
               header("location:?c=usuario&a=Panel"); 
            }
            else{
                $message = '<label><h3>Datos incorrectos</h3></label>';
            }
        
        }
        require_once "Vistas/Usuario/login.php";
    }


    public function Cerrar_Seccion()
    {
       // session_start(); 
        session_destroy();  
        header("location:index.php");
    }

    public function Panel()
    {
        
        require_once "Vistas/Inicio/encabezado.php";
        require_once "Vistas/Inicio/principal.php";
        require_once "Vistas/Inicio/pie.php"; 
        require_once "Vistas/Reportes/modal_reporte.php"; 
        //require_once "Vistas/Inicio/prueba.php";
    }

    public function Inicio()
    {
        require_once "Vistas/Inicio/encabezado.php";
        require_once "Vistas/Usuario/registrar_usuario.php";
        require_once "Vistas/Inicio/pie.php";
        require_once "Vistas/Modales/modal_usuario.php";
    }

   



    public function FormCrear()
    {
        $titulo="Registrar";
        $p=new usuario();
        if(isset($_GET['cod_usuario']))
        {
            $p=$this->modelo->Obtener($_GET['cod_usuario']);
            $titulo="Actualizar";
        }

        require_once "Vistas/Inicio/encabezado.php";
        require_once "Vistas/Usuario/registrar_usuario.php";
        require_once "Vistas/Inicio/pie.php";
        require_once "Vistas/Inicio/modal.php";
        
    }

    public function Guardar()
    {
        $p=new Usuario();

        $p->set_Cod_user($_POST["cod_usuario"]);
        $p->set_IdSkills($_POST["idskill"]);
        $p->Set_Idcategoria_Staff($_POST["cod_categoria"]);
        $p->set_Nombre($_POST["nombre"]);
        $p->set_Apellido($_POST["apellido"]);
        $p->set_Nickname($_POST["nickname"]);
        $p->set_Password($_POST["password"]);
        $p->set_Tipo_Usuario($_POST["categoria"]);
        //$p->set_Skill($_POST["skill"]);
        $p->set_Tipo_Rol($_POST["rol"]);
        
        //guardamos  datos

    
       // $p->get_Cod_usuario()> 0 ?
        
            $this->modelo->Insertar($p);
        
       
        header("location:?c=usuario");
    }

    public  function Actualizar ()
    {
        $p=new Usuario();
        $p->set_Cod_user($_POST["cod_usuario"]);
         $p->set_IdSkills($_POST["idskill"]);
        $p->Set_Idcategoria_Staff($_POST["cod_categoria"]);
        $p->set_Nickname($_POST["nickname"]);
        $p->set_Password($_POST["password"]);
        $p->set_Tipo_Usuario($_POST["tipo_usuario"]);
        //$p->set_Skill($_POST["skill"]);
        $p->set_Tipo_Rol($_POST["rol"]);
        $this->modelo->Actualizar($p); 
        header("location:?c=usuario");






    }

    public function Eliminar()
    {
        $codigo_user=$_POST["cod_usuario"];
        $this->modelo->Eliminar($codigo_user);
          header("location:?c=usuario");
    }







   }