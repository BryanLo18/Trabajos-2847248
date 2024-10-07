<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


<?php
include_once('conexion_bd_estudiante.php');

$consulta=$conexion->query("SELECT * from grupos");

?>
<table class="table justify-content-center aling-items-center">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Grado</th>
            <th scope="col">Jefe de grupo</th>
        </tr>
    </thead>
    <tbody>
        <?php
    while($row=$consulta->fetch_array()){
    ?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['nombre'];?></td>
            <td><?php echo $row['grado'];?></td>
            <td><?php echo $row['jefe'];?></td>
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