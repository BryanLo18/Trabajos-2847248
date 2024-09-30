<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="agregar_productos.php" method="POST">
        <label for="">Nombre</label>
        <input type="text" name="nombre">
        <label for="">Documento</label>
        <input type="number" name="documento">
        <label for="">Email</label>
        <input type="email" name="email">
        <label for="">Productos</label>
        <select name="producto" id="">
            <option value="carne">Carne</option>
            <option value="huevos">Huevos</option>
            <option value="zanahoria">Zanahoria</option>
            <option value="leche">Leche</option>
        </select>
        <label for="">Cantidad</label>
        <input type="number" name="cantidad">
        <input type="submit" value="Enviar" h>
    </form>    


</body>
</html>