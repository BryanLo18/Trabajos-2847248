<?php

include_once('base_d_datos_far.php');

$nombre=$_POST['nombre'];
$tipo=$_POST['tipo'];
$codigo=$_POST['codigo'];
$precio=$_POST['precio'];
$labora=$_POST['laboratorio'];
$fecha=date('Y-m-d');


$conexion->query("INSERT INTO medicamento(nombre,tipo,codigo,precio,laboratorio,fecha) value('$nombre','$tipo',$codigo,$precio,'$labora','$fecha')");

 echo "Medicamento ingresado con exito";
?>

<a href="index.php" role="button">Volver</a>