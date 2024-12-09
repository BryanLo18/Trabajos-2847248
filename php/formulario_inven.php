<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
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