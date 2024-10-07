<?php

    include_once('conexion_bd_estudiante.php');

    $nombre=$_POST['nombre'];
    $grado=$_POST['grado'];
    $jefe=$_POST['jefe'];
  



    $conexion->query("INSERT INTO grupos(nombre,grado,jefe) value ('$nombre','$grado','$jefe')");

    echo "El grupo ha sido ingresado con exito";
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="container">
    <div class="row">
        <div class="col justify-content-start">
       
        <a class="btn btn-primary" href="index.php" role="button">Volver</a>
        </div>
    </div>
</div>