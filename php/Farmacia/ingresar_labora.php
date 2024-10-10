<?php

include_once('base_d_datos_far.php');

$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];

$conexion->query("INSERT INTO laboratorio(nombre,telefono,correo,direccion) value('$nombre','$telefono','$correo','$direccion')");
echo "Laboratorio ingresado con exito";

?>

<a href="index.php" role="button">Volver</a>