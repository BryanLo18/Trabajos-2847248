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
        <form action="ingresar_labora.php" method="POST" class="mt-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre">
            <label for="" class="form-label">Telefono</label>
            <input type="number" class="form-control" name="telefono">
            <label for="" class="form-label">Correo</label>
            <input type="text" class="form-control" name="correo">
            <label for="" class="form-label">Direccion</label>
            <input type="text" class="form-control" name="direccion">
            <input type="submit" class="btn btn-primary mt-2" value="Enviar">
        </form>
        <a class="btn btn-primary mt-3" href="index.php" role="button">Volver</a>
    </div>

</body>

</html>