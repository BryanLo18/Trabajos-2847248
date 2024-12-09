<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ingresar.php" method="POST">
        <label for="">Nombre</label>
        <input type="text" name="nombre">
        <label for="">Documento</label>
        <input type="text" name="documento">
        <label for="">telefono</label>
        <input type="text" name="telefono">
        <label>correo</label>
        <input type="text" name="correo">

        <select name="nivel">
            <?php
            include_once("conexion_bd.php");
             $consulta=$conexion->query("SELECT * FROM nivel");
            while($row=$consulta->fetch_array()){
                echo '<option value="'.$row['estudio'].'">'.$row['estudio'].'</option>';
            }
            ?>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>