<?php

require_once "basededatos.php";

/* Otra forma de recibir el $_GET['term']
if(isset($_GET['term'])){
    $busqueda = filter_input(INPUT_GET, 'term', FILTER_SANITIZE_STRING);
    */
    //validacion del ajax atravez del jquerytypeahead
    if(empty($_GET['q'])){
    }
    else{
    $busqueda=(!empty($_GET['q'])) ? strtolower($_GET['q']) : null;
    $status=true;
    $conexion=new BasedeDatos();
    $consulta = $conexion->conectar()->prepare(
                "SELECT * FROM usuarios WHERE nickname
                LIKE '%".$busqueda."%' ORDER BY nickname ASC");
    $consulta->execute();
    $resultado_busqueda=[];
    $resultado_query=$consulta->fetchAll(PDO::FETCH_ASSOC);
    forEach($resultado_query as $key=>$value){
        $resultado_busqueda[]=array("cod_usuario"=>$value["cod_usuario"],
                                    "nickname"=>$value["nickname"]);
    }
    /* while($registros = $consulta->fetch(PDO::FETCH_ASSOC)){
        $resultado_busqueda[] = array("cod_usuario"=>$registros['cod_usuario'],
                        "nickname"=>$registros['nickname']) ;
        } */
    if(empty($resultado_busqueda)) //si no hay se encuentra es falso
        $status=false;
   /* Una forma de hacer busqueda entre cadenas
     foreach($resultado_busqueda as $key=>$value){
        if(strpos(strtolower($value["cod_usuario"]),$query)){
            $resultado_busqueda[]=$value;
        }
    } */
    //header('Content-Type: application/json');
    echo json_encode(array(
        "status"=>$status,
        "error"=>null,
        "data"=>array("users"=>$resultado_busqueda)
    ));
    }
    class Briefing
{
    private $idbriefing;
    private $cod_usuario;
    private $idestados;
    private $fecha;
   
    /**
     * Get the value of idbriefing
     */
    public function getIdbriefing()
    {
        return $this->idbriefing;
    }

    /**
     * Set the value of idbriefing
     *
     * @return  self
     */
    public function setIdbriefing($idbriefing)
    {
        $this->idbriefing = $idbriefing;

        return $this;
    }

    /**
     * Get the value of cod_usuario
     */
    public function getCod_usuario()
    {
        return $this->cod_usuario;
    }

    /**
     * Set the value of cod_usuario
     *
     * @return  self
     */
    public function setCod_usuario($cod_usuario)
    {
        $this->cod_usuario = $cod_usuario;

        return $this;
    }

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
     * Get the value of fecha
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     *
     * @return  self
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function __construct()
    {
        $this->pdo = BasedeDatos::conectar();
    }
    public function Listar_Estados()
    {
        try {
            $consulta = $this->pdo->prepare("SELECT * FROM estados ORDER BY nombre ASC;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Listar_Skills(){
        try{
            $consulta=$this->pdo->prepare("SELECT * FROM skills ORDER BY nombre ASC;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
          }catch(Exception $e){
                die($e->getMessage());
        }
    }
    public function Listar_Usuarios($busqueda){
        try {
            $consulta = $this->pdo->prepare(
                "SELECT * FROM usuarios WHERE nickname
            LIKE '%".$busqueda."%' ORDER BY nickname ");
            $consulta->execute();
            while($registros = $consulta->fetch(PDO::FETCH_ASSOC)){
            $data[] = $registros['nickname'];
            }
            echo $data;
        } catch (Exception $th) {
            die($th->getMessage());
        }
    }
    //Enlistar los Briefing existentes
    public function Listar_Briefing()
    {
        try {
            $consulta = $this->pdo->prepare(
                "SELECT briefing.idbriefing, 
                            usuarios.cod_usuario, 
                            usuarios.nickname, 
                            skills.nombre, 
                            estados.nombre as estado, 
                            briefing.fecha
                    FROM briefing
                    INNER JOIN usuarios ON usuarios.cod_usuario=briefing.cod_usuario
                    JOIN estados on estados.idestados=briefing.idestados
                    JOIN skills on skills.idskills=usuarios.idskills;"
            );
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            die($th->getMessage());
        }
    }

    //Insertar Briefing
    public function Insertar_Briefing(briefing $brief)
    {
        try {
            $consulta = "INSERT INTO briefing(cod_usuario,idestados,fecha) VALUE (?,?,?)";
            $this->pdo->prepare($consulta)->execute(array($brief->getCod_usuario(), $brief->getIdestados(), $brief->getFecha()));
            
        } catch (Exception $th) {
            die($th->getMessage());
        }
    }
    //Actualizar Briefing
    public function Actualizar_Briefing(briefing $brief)
    {
        try {
            $consulta = "UPDATE briefing SET cod_usuario=?,idestados=?,fecha=? WHERE idbriefing=?;";
            $this->pdo->prepare($consulta)->execute(array($brief->getCod_usuario(), $brief->getIdestados(), $brief->getFecha(), $brief->getIdbriefing()));
        } catch (Exception $th) {
            die($th->getMessage());
        }
    }

    //Eliminar Briefing
    public function Eliminar_Briefing($idbriefing)
    {
        try {
            $consulta = "DELETE FROM briefing WHERE idbriefing=?;";
            $this->pdo->prepare($consulta)->execute(array($idbriefing));
        } catch (Exception $th) {
            die($th->getMessage());
        }
    }
}