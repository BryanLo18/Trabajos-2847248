<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   <div class="container">
   <form action="ingresar_medicamento.php" method="POST" class="mt-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre">
        <label for="" class="form-label">Tipo</label>
        <input type="text" class="form-control" name="tipo">
        <label for="" class="form-label">Codigo</label>
        <input type="number" class="form-control" name="codigo">
        <label for="" class="form-label">Precio</label>
        <input type="number" class="form-control" name="precio">

        <label for="" class="form-label">Laboratorio</label>
        <select name="laboratorio" id="" class="form-select">
            <?php

            include_once('base_d_datos_far.php');
            $consulta=$conexion->query("SELECT * FROM laboratorio");
            while($row=$consulta->fetch_array()){
                echo '<option value="'.$row['nombre'].'">'.$row['nombre'].'</option>';
            }
            ?>
        </select>

        <input type="submit" class="btn btn-primary mt-2" value="Enviar">
    </form>

    <a class="btn btn-primary mt-3" href="index.php" role="button">Volver</a>
   </div>
</body>
</html>