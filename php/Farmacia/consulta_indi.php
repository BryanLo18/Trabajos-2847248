<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php

include_once('base_d_datos_far.php');

$codigo=$_GET['codigo'];

$consulta=$conexion->query("SELECT * FROM  medicamento where codigo='$codigo'");



?>
<div class="container">
<table class="table border mt-3">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Tipo</th>
            <th scope="col">Precio</th>
            <th scope="col">Laboratorio</th>
        </tr>
    </thead>
    <tbody>
        <?php
    while($row=$consulta->fetch_array()){
    ?>
        <tr>
            <td><?php echo $row['nombre'];?></td>
            <td><?php echo $row['tipo'];?></td>
            <td><?php echo $row['precio'];?></td>
            <td><?php echo $row['laboratorio'];?></td>
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