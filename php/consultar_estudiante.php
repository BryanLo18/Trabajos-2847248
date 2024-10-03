
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php
include_once('conexion_bd_estudiante.php');

$consulta=$conexion->query("SELECT * from estudiante");

while($row=$consulta->fetch_array()){
    ?>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Documento</th>
      <th scope="col">Email</th>
      <th scope="col">Edad</th>
      <th scope="col">Promedio</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>
        <?php
        echo $row['nombre'];
        ?>
      </td>
      <td>
        <?php
            echo $row['apellido'];
            ?>
      </td>
      <td>
        <?php
            echo $row['documento'];
        ?>
      </td>
      <td>
        <?php
            echo $row['email'];
        ?>
      </td>
      <td>
        <?php
            echo $row['edad'];
        ?>
      </td>
      <td>
        <?php
        echo $row['promedio'];
        ?>
      </td>
      <td>
        <?php
        if($row['promedio']>=3){
            echo 'Aprobado';
        }else{
            echo 'Reprobado';
        }
        ?>
      </td>
    </tr>
  </tbody>
</table>
<?php    
   
}

?>


<div class="container">
    <div class="row">
        <div class="col justify-content-start">
       
        <a class="btn btn-primary" href="index.php" role="button">Volver</a>
        </div>
    </div>
</div>