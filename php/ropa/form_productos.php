<?php
include_once('nav.php');
?>

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
        <div class="row align-items-stretch">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-body bg-light">
                        <form action="ingresar_producto.php" method="POST">
                            <div class="mb-2">
                                <label for="" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre">
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Descripcion</label>
                                <input type="text" class="form-control" name="descripcion">
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Precio</label>
                                <input type="number" class="form-control" name="precio">
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-primary" value="Guardar">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>