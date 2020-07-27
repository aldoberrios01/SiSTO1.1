<?php

class BasedeDatos
{
    const servidor="localhost";
    const usuario="root";
    const pass="";
    const bd="base_datos";


    public static function conectar()
    {
        try{
            $conexion= new PDO("mysql:host=".self::servidor.";dbname=".self::bd.";charset=utf8",self::usuario, self::pass);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        }catch(PDOException $e){
            return "Fallo".$e->getMessage();
        }
    }
}
?>