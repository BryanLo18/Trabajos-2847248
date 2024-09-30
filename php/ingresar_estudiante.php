<?php

    $conexion= new mysqli('localhost','root','','colegio');

    $documento=$_POST['documento'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $edad=$_POST['edad'];
    $nota1=$_POST['nota1'];
    $nota2=$_POST['nota2'];
    $nota3=$_POST['nota3'];



    $promedio=($nota1+$nota2+$nota3)/3;

    if($promedio>=3){
        $estado="Aprobado";
    }else{
        $estado="No aprobado";
    }


    $conexion->query("INSERT INTO estudiante(documento,nombre,apellido,email,edad,promedio,estado) value ($documento,'$nombre','$apellido','$email',$edad,$promedio,'$estado')");

    echo "El estudiante ha sido ingresado con exito";




?>