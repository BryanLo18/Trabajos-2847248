<?php
    include_once('conexion_bd.php');

    $nombre=$_POST['nombre'];
    $documento=$_POST['documento'];
    $email=$_POST['email'];
    $producto=$_POST['producto'];
    $cantidad=$_POST['cantidad'];
    
    $precio_car=10000;
    $precio_hue=15000;
    $precio_zana=8000;
    $precio_le=12000;

    if($producto=='carne'){
        $sub=$precio_car*$cantidad;
        $sub_total=$sub*0.19;
    }

?>