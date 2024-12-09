<?php
 include_once('base_d_datos_far.php');

 $nombre=$_POST['nombre'];
 $tipo=$_POST['tipo'];
 $precio=$_POST['precio'];
 $codigo=$_POST['codigo'];

 $conexion->query("UPDATE medicamento set nombre='$nombre', tipo='$tipo', precio='$precio' where  codigo='$codigo'");
