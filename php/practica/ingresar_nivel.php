<?php

include_once("conexion_bd.php");

$nivel=$_POST['nivel'];

$conexion->query("INSERT INTO nivel(estudio) value('$nivel')");

echo "Ingresado con exito";
?>