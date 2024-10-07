<?php
include_once('conexion_bd_estudiantes.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="consultar_estudiante.php">
        <label for="">Numero de documento</label>
        <input type="number" name="documento">
        <input type="submit" name="consultar" value="">
    </form>
</body>
</html>