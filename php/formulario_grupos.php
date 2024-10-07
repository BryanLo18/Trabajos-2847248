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
    <form action="ingresar_grupos.php" method="POST">
        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre">
        <label for="exampleFormControlInput1" class="form-label">Grado</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="grado">
        <label for="exampleFormControlInput1" class="form-label">Jefe de grupo</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="jefe">

        <input type="submit" class="btn btn-primary mt-3" value="Ingresar">
    </form>
    </div>
    

    <div class="container">
    <div class="row">
        <div class="col justify-content-start mt-3">
       
        <a class="btn btn-primary" href="index.php" role="button">Volver</a>
        </div>
    </div>
</div>