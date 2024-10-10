<?php
include_once('base_d_datos_far.php');

$cantidad=$_POST['cantidad'];
$medicamento=$_POST['medicamento'];

$conexion->query("INSERT INTO inventario(nombre,cantidad) value('$medicamento',$cantidad)");

echo "El ingreso fue exitoso";

?>


<a href="index.php" role="button">Volver</a>
