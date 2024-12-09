<?php
 include_once('base_d_datos_far.php');

 $nombre=$_POST['nombre'];
 $tipo=$_POST['tipo'];
 $codigo=$_POST['codigo'];
 $precio=$_POST['precio'];
 $laboratorio=$_POST['laboratorio'];
 

 $conexion->query("UPDATE medicamento set nombre='$nombre', tipo='$tipo',codigo='$codigo', precio='$precio', laboratorio='$laboratorio' where  codigo='$codigo'");

 echo "Modificacion exitosa";

?>

<a href="index.php">Volver</a>