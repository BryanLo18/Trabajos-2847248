<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


<?php
include_once('conexion_bd_estudiante.php');

$consulta=$conexion->query("SELECT * from profesores");

?>
<table class="table text-center">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Documento</th>
            <th scope="col">Email</th>
            <th scope="col">Edad</th>
        </tr>
    </thead>
    <tbody>
        <?php
    while($row=$consulta->fetch_array()){
    ?>
        <tr>
            <td><?php echo $row['ID'];?></td>
            <td><?php echo $row['nombre'];?></td>
            <td><?php echo $row['apellido'];?></td>
            <td><?php echo $row['documento'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['edad'];?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>

<div class="container">
    <div class="row">
        <div class="col  d-flex justify-content-center aling-items-center">
       
        <a class="btn btn-primary" href="index.php" role="button">Volver</a>
        </div>
    </div>
</div>