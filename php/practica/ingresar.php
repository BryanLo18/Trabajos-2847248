<?php

include_once("conexion_bd.php");

$nombre=$_POST["nombre"];
$documento=$_POST["documento"];
$telefono=$_POST["telefono"];
$correo=$_POST["correo"];
$nivel_estudio=$_POST['nivel'];

$conexion->query("INSERT INTO personas(nombre,cedula,telefono,correo,estudio) value('$nombre',$documento,'$telefono','$correo','$nivel_estudio')");

echo "Los datos fueron ingresados con exito";
?>
<a href="index.php">Volver</a>