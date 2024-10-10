<?php

include_once('base_d_datos_far.php');

$nombre=$_POST['nombre'];
$tipo=$_POST['tipo'];
$codigo=$_POST['codigo'];
$precio=$_POST['precio'];
$labora=$_POST['laboratorio'];

$conexion->query("INSERT INTO medicamento(nombre,tipo,codigo,precio,laboratorio) value('$nombre','$tipo',$codigo,$precio,'$labora')");

 echo "Medicamento ingresado con exito";
?>

<a href="index.php" role="button">Volver</a>