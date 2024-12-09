<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-icons-1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="img/nike.png" alt="Bootstrap" width="30" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ">
                    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                    <a class="nav-link active" aria-current="page" href="form_productos.php">Ingresar productos</a>
                    <a class="nav-link active" aria-current="page" href="consultar_producto.php">Consultar productos</a>
                    <a class="nav-link active" aria-current="page" href="login.php">Iniciar sesion</a>
                </div>
                <div class="mx-auto w-30">
                    <form action="productos.php" class="d-flex" method="POST">
                        <input type="search" class="form-control me-2 rounded-pill"
                            placeholder="Buscar" aria-label="Buscar" name="buscar">
                        <button class="btn btn-light rounded-circle" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>