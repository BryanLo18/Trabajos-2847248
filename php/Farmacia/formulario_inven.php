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
        <form action="ingresar_inven.php" method="POST" class="mt-3">
            <label for="" class="form-label">Ingresar cantidad</label>
            <input type="number" class="form-control" name="cantidad">
            <label for="" class="form-label">Medicamento</label>
            <select name="medicamento" id="" class="form-select">
                <?php
            include_once('base_d_datos_far.php');
            $consulta=$conexion->query("SELECT * FROM medicamento");
            while($row=$consulta->fetch_array()){
                echo '<option value="'.$row['nombre'].'">'.$row['nombre'].'</option>';
            }
            ?>
            </select>
            <input type="submit" value="Enviar" class="btn btn-primary mt-2">
        </form>
        <a class="btn btn-primary mt-3" href="index.php" role="button">Volver</a>
    </div>
    
</body>

</html>