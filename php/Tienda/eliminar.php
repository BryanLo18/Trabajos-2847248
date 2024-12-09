<?php
include_once('conexion.php');

$id=$_GET['id'];

$conexion->query("DELETE FROM productos where id='$id'");
header("Location: consultar_productos.php");

?>