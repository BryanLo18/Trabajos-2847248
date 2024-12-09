<link rel="stylesheet" href="css/bootstrap.min.css">
<?php

include_once('base_d_datos_far.php');

$consulta=$conexion->query("SELECT * FROM  inventario");

?>

<div class="container">
    <table class="table border mt-3">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Cantidad</th>
            </tr>
        </thead>
        <tbody>
            <?php
    while($row=$consulta->fetch_array()){
    ?>
            <tr>
                <td><?php echo $row['Nombre'];?></td>
                <td><?php echo $row['cantidad'];?></td>
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