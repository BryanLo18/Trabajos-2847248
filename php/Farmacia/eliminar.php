<?php
include_once('base_d_datos_far.php');

$codigo=$_GET['codigo'];
$conexion->query("DELETE FROM medicamento where codigo='$codigo'");
header("Location: consul_medicamentos.php");
?>