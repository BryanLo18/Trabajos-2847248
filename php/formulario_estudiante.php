<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="ingresar_estudiante.php" method="POST">
        <label for="">Documento</label>
        <input type="number" name="documento">
        <label for="">Nombre</label>
        <input type="text" name="nombre">
        <label for="">Apellido</label>
        <input type="text" name="apellido">
        <label for="">Email</label>
        <input type="email" name="email">
        <label for="">Edad</label>
        <input type="number" name="edad">
        <label for="">Nota1</label>
        <input type="float" name="nota1" >
        <label for="">Nota2</label>
        <input type="float" name="nota2" >
        <label for="">Nota3</label>
        <input type="float" name="nota3" >


        <input type="submit" value="Ingresar">
    </form>
    
</body>
</html>