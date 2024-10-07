<?php

    include_once('conexion_bd_estudiante.php');

    $documento=$_POST['documento'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $edad=$_POST['edad'];
    $nota1=$_POST['nota1'];
    $nota2=$_POST['nota2'];
    $nota3=$_POST['nota3'];
    $grupo=$_POST['grupo'];
    $profesor=$_POST['profesor'];



    $promedio=($nota1+$nota2+$nota3)/3;
    
    


    $conexion->query("INSERT INTO estudiante(documento,nombre,apellido,email,edad,promedio,grupo,profesor) value ($documento,'$nombre','$apellido','$email',$edad,$promedio,'$grupo','$profesor')");

    echo "El estudiante ha sido ingresado con exito";
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="container">
    <div class="row">
        <div class="col justify-content-start">
       
        <a class="btn btn-primary" href="index.php" role="button">Volver</a>
        </div>
    </div>
</div>