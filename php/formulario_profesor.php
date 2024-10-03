<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ingresar_profesor.php" method="POST">
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


        <input type="submit" value="Ingresar">
    </form>

    <div class="container">
    <div class="row">
        <div class="col justify-content-start">
       
        <a class="btn btn-primary" href="index.php" role="button">Volver</a>
        </div>
    </div>
</div>
</body>
</html>