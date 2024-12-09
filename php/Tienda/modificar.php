<?php
    include_once('nav.php');
    $id=($_GET['id']);
    $nombre=($_GET['nombre']);
    $descripcion=($_GET['descripcion']);
    $precio=($_GET['precio']);
    $cantidad=($_GET['cantidad']);
?>

<link rel="stylesheet" href="css/bootstrap.min.css">
<div class="container">
    <div class="row align-items-stretch">
        <div class="col-12">
            <div class="card mt-3">
                <div class="card-body bg-light">
                    <form action="editar.php" method="POST">
                        <div class="mb-2">
                            <label for="" class="form-label">Id</label>
                            <input type="text" class="form-control" name="id" readonly value="<?php echo $id; ?>">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" value="<?php echo $nombre; ?>">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Descripcion</label>
                            <input type="text" class="form-control" name="descripcion"
                                value="<?php echo $descripcion; ?>">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Precio</label>
                            <input type="text" class="form-control" name="precio" value="<?php echo $precio; ?>">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Cantidad</label>
                            <input type="number" class="form-control" name="cantidad" value="<?php echo $cantidad; ?>">
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-danger" value="Guardar">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>