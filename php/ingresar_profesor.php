<?php

    include_once('conexion_bd_estudiante.php');

    $documento=$_POST['documento'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $edad=$_POST['edad'];
    

    
    $conexion->query("INSERT INTO profesores(documento,nombre,apellido,email,edad) value ($documento,'$nombre','$apellido','$email',$edad)");

    echo "El profesor ha sido ingresado con exito";
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="container">
    <div class="row">
        <div class="col justify-content-start">
       
        <a class="btn btn-primary" href="index.php" role="button">Volver</a>
        </div>
    </div>
</div>