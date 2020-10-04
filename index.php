<?php
include('conexion.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT City FROM person.address";
$resultado = $conexion->prepare($consulta);

$resultado->execute();
$datos = $resultado->fetchAll();

var_dump($datos);