<?php

include_once('conexion.php');

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];

$conexion->query("UPDATE productos set  nombre='$nombre', descripcion='$descripcion', precio='$precio', cantidad='$cantidad' where id='$id'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<?php
    include_once("nav.php");
    ?>

    <div class="card text-center mt-4 container">
        <div class="card-body">
            <h5 class="card-title"><?php echo $nombre ?></h5>
            <p class="card-text">Fue guardado modificado con exito</p>
            <a href="consultar_productos.php" class="btn btn-danger">Volver</a>
        </div>
    </div>
</body>
</html>
