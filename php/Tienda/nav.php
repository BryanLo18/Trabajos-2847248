<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar con Categorías, Búsqueda y Carrito</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-icons-1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/mi_estilos.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-expand-md bg-danger">
        <div class="container-fluid">

            <div class="dropdown me-4 d-lg-none d-md-none flecha ">
                <button class="btn btn-danger bg-opacity-10 dropdown-toggle d-flex align-items-center py-2  "
                    type="button" id="menuCategorias" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-ui-checks-grid pe-1"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="menuCategorias">
                    <li><a class="dropdown-item" href="productos.php">Productos</a></li>
                    <li><a class="dropdown-item" href="form_producto.php">Ingresar productos</a></li>
                    <li><a class="dropdown-item" href="consultar_productos.php">Consultar productos</a></li>
                </ul>
            </div>

            <a class="navbar-brand " href="index.php">
                <img src="img/Logo-redondeado.png" alt="Logo" style="width: 90px; height: auto;">
            </a>

            <a href="" class="d-lg-none d-md-none text-black border border-black rounded-circle fs-3"
                data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                <i class="bi bi-person"></i>
            </a>

            <div class="offcanvas offcanvas-bottom d-lg-none d-md-none" tabindex="-1" id="offcanvasMenu"
                aria-labelledby="offcanvasMenuLabel">
                <div class="offcanvas-header">
                    <h5 id="offcanvasMenuLabel">Mi cuenta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="#" class="d-flex align-items-center">
                                <i class="bi bi-house-door pe-2"></i> Inicio
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="d-flex align-items-center">
                                <i class="bi bi-question-circle pe-2"></i> Ayuda
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="" class="d-flex align-items-center" id="#modal1">
                                <i class="bi bi-box-arrow-in-right pe-2"></i> Inicio Sesión
                            </a>
                        </li>
                    </ul>
                </div>
            </div>





            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="d-flex w-100 align-items-center">

                    <div class="dropdown me-4">
                        <button
                            class="btn btn-danger bg-opacity-10 dropdown-toggle d-flex align-items-center py-2 border border-light-subtle rounded-pill"
                            type="button" id="menuCategorias" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-ui-checks-grid pe-1"></i> Categorías
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="menuCategorias">
                            <li><a class="dropdown-item" href="productos.php">Productos</a></li>
                            <li><a class="dropdown-item" href="form_producto.php">Ingresar productos</a></li>
                            <li><a class="dropdown-item" href="consultar_productos.php">Consultar productos</a></li>
                        </ul>
                    </div>

                    <div class="mx-auto w-50">
                        <form action="productos.php" class="d-flex" method="POST">
                            <input type="search" class="form-control me-2 rounded-pill"
                                placeholder="Buscar en Tienda Domicilios" aria-label="Buscar" name="buscar">
                            <button class="btn btn-light rounded-circle" type="submit"><i
                                    class="bi bi-search"></i></button>
                        </form>
                    </div>
                </div>


                <ul class="navbar-nav ms-auto d-flex align-items-center">

                    <li class="nav-item dropdown me-3">

                        <a href="" class="d-lg-none  text-black border border-black rounded-circle fs-3"
                            data-bs-toggle="dropdown" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                            <i class="bi bi-person"></i>
                        </a>
                        <a class="nav-link dropdown-toggle border border-black rounded-4 py-1 px-3 d-md-none d-none d-lg-block "
                            href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle">¡Hola! Inicia sesión</i><br>
                            Mi cuenta
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="index.php"><i class="bi bi-house-door pe-2"></i>
                                    Inicio</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-question-circle pe-2"></i> Ayuda</a>
                            </li>
                            <li><a class="dropdown-item"
                                    href="login.php"><i class="bi bi-box-arrow-in-right pe-2"></i> Iniciar
                                    sesión</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <button class="btn btn-danger rounded-circle">
                                <i class="bi bi-cart"></i>
                            </button>
                            <span class="ms-1 text-white">Carrito</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>