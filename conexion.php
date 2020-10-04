<?php

include('datosConexion.php');

class Conexion {
    function Conectar(){
        try{
            //$conexion = new PDO("mysql:host=".SERVER.";dbname=".DBNAME, USER, PASS);
            $conexion = new PDO("sqlsrv:Server=".SERVER.";Database=".DBNAME, USER, PASS);
            //$conexion = new PDO("pgsql:host=".SERVER.";port=5432;dbname=".DBNAME, USER, PASS);
            return $conexion;     
        }catch (Exception $error){
            die("El error de conexion es: ".$error->getMessage());
        }
        
    }
}