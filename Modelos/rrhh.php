<?php

class Estados{

    private $idestados;
    private $nombre;
    private $comentario;

    public function __construct()
    {
        $this->pdo=BasedeDatos::conectar();
    }
    //propiedades
    /**
     * Get the value of idestados
     */ 
    public function getIdestados()
    {
        return $this->idestados;
    }

    /**
     * Set the value of idestados
     *
     * @return  self
     */ 
    public function setIdestados($idestados)
    {
        $this->idestados = $idestados;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of comentario
     */ 
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set the value of comentario
     *
     * @return  self
     */ 
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }
    //En listar los estados
    public function Listar_Estados(){
        try{
            $consulta=$this->pdo->prepare("SELECT * FROM estados ORDER BY nombre ASC;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
          }catch(Exception $e){
                die($e->getMessage());
        }
    }

    //Ingresar Estados
    public function Insertar_Estados(estados $status){
        try {
            $consulta="INSERT INTO estados(nombre,comentario) VALUE(?,?)";
            $this->pdo->prepare($consulta)->execute(array($status->getNombre(),$status->getComentario()));
        } catch (Exception $th) {
            die($th->getMessage());
        }
    }

    //Actualizar Estados
    public function Actualizar_Estados(estados $estados){
        try {
            $consulta="UPDATE estados SET nombre=?,comentario=? WHERE idestados=?;";
            $this->pdo->prepare($consulta)->execute(array($estados->getNombre(),$estados->getComentario(),$estados->getIdestados()));
            
        } catch (Exception $th) {
            die($th->getMessage());
        }
    }

    //Eliminar Estados
    public function Eliminar_Estados($idestados){
        try {
            $consulta="DELETE FROM estados WHERE idestados=?;";
            $this->pdo->prepare($consulta)->execute(array($idestados));
            
        } catch (Exception $th) {
            die($th->getMessage());
        }
    }
}

class Skills{
    private $idskills;
    private $nombre;

    /**
     * Get the value of idskills
     */ 
    public function getIdskills()
    {
        return $this->idskills;
    }

    /**
     * Set the value of idskills
     *
     * @return  self
     */ 
    public function setIdskills($idskills)
    {
        $this->idskills = $idskills;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function __construct()
    {
        $this->pdo=BasedeDatos::conectar();
    }
    //funcion enlistar
    public function List_Skills(){
        try{
            $consulta=$this->pdo->prepare("SELECT * FROM skills ORDER BY nombre_skill ASC;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
          }catch(Exception $e){
                die($e->getMessage());
        }
    }
    
    public function Insert_Skills(skills $skill){
        try {
            $consulta="INSERT INTO skills(nombre_skill) VALUE(?);";
            $this->pdo->prepare($consulta)->execute(array($skill->getNombre()));
        } catch (Exception $th) {
            die($th->getMessage());
        }
    }
    public function Update_Skills(skills $skill){
        try {
            $consulta="UPDATE skills SET nombre_skill=? WHERE idskills=?;";
            $this->pdo->prepare($consulta)->execute(array($skill->getNombre(),$skill->getIdskills()));
        } catch (Exception $th) {
            die($th->getMessage());
        }
    }
    public function Delete_Skills($idskills){
        try {
            $consulta="DELETE FROM skills WHERE idskills=?;";
            $this->pdo->prepare($consulta)->execute(array($idskills));
            
        } catch (Exception $th) {
            die($th->getMessage());
        }
    }
}

class Categoria_Staff{
    private $idcategoria_staff;
    private $nombre;

    public function getIdcategoria_staff()
    {
        return $this->idcategoria_staff;
    }

    /**
     * Set the value of idcategoria_staff
     *
     * @return  self
     */ 
    public function setIdcategoria_staff($idcategoria_staff)
    {
        $this->idcategoria_staff = $idcategoria_staff;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }  

    public function __construct()
    {
        $this->pdo=BasedeDatos::conectar();
    }
    //funcion enlistar
    public function List_Category(){
        try{
            $consulta=$this->pdo->prepare("SELECT * FROM categoria_staff ORDER BY categoria ASC;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
          }catch(Exception $e){
                die($e->getMessage());
        }
    }
    
    public function Insert_Category(categoria_staff $Categoria_Staff){
        try {
            $consulta="INSERT INTO categoria_staff(categoria) VALUE(?);";
            $this->pdo->prepare($consulta)->execute(array($Categoria_Staff->getNombre()));
        } catch (Exception $th) {
            die($th->getMessage());
        }
    }
    public function Update_Category(categoria_staff $Categoria_Staff){
        try {
            $consulta="UPDATE categoria_staff SET categoria=? WHERE idcategoria_staff=?;";
            $this->pdo->prepare($consulta)->execute(array($Categoria_Staff->getNombre(),$Categoria_Staff->getIdcategoria_staff()));
        } catch (Exception $th) {
            die($th->getMessage());
        }
    }
    public function Delete_Category($idCategoria_Staff){
        try {
            $consulta="DELETE FROM categoria_staff WHERE idCategoria_Staff=?;";
            $this->pdo->prepare($consulta)->execute(array($idCategoria_Staff));
            
        } catch (Exception $th) {
            die($th->getMessage());
        }
    }

    
}
?>