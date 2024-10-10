<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php

include_once('base_d_datos_far.php');

$nombre=$_GET['nombre'];

$consulta=$conexion->query("SELECT * FROM laboratorio where nombre='$nombre'");

?>

<div class="container">
<table class="table border mt-3">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>
            <th scope="col">Direccion</th>
        </tr>
    </thead>
    <tbody>
        <?php
    while($row=$consulta->fetch_array()){
    ?>
        <tr>
            <td><?php echo $row['nombre'];?></td>
            <td><?php echo $row['telefono'];?></td>
            <td><?php echo $row['correo'];?></td>
            <td><?php echo $row['direccion'];?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
</div>
<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-center aling-items-center">

            <a class="btn btn-primary" href="index.php" role="button">Volver</a>
        </div>
    </div>
</div>