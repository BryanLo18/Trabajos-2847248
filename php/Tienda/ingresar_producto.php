<?php
 include_once('conexion.php');

 $nombre=$_POST['nombre'];
 $descripcion=$_POST['descripcion'];
 $precio=$_POST['precio'];
 $costo=$_POST['costo'];
 $cantidad=$_POST['cantidad'];
 $fecha=date('Y-m-d');

 $conexion->query("INSERT INTO productos(nombre,descripcion,precio,costo,cantidad,fecha) value('$nombre','$descripcion',$precio,$costo,$cantidad,'$fecha')");



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once("nav.php");
    ?>

    <div class="card text-center mt-4 container">
        <div class="card-body">
            <h5 class="card-title"><?php echo $nombre ?></h5>
            <p class="card-text">Fue guardado con exito</p>
            <a href="index.php" class="btn btn-danger">Volver</a>
        </div>
    </div>

</body>

</html>