<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/stylo.css">
<?php
include_once("conexion.php");
include_once("nav.php");



?>
<div class="container mt-4 mx-auto">
    <div class="row product-row justify-content-center">
        <?php
            if (isset($_POST['buscar'])) {
                $buscar = ($_POST['buscar']);
                $consulta = $conexion->query("SELECT * FROM productos WHERE nombre LIKE '%$buscar%' ORDER BY nombre ASC");
            } else {
                $consulta = $conexion->query("SELECT * FROM productos");
            }
            while ($row = $consulta->fetch_array()) {
                $nombre = $row['nombre'];
                $descripcion = $row['descripcion'];
                $precio = $row['precio'];
        ?>
        <div class="col-lg-3 col-md-4 col-sm-12 border border-black rounded-3 mt-3">
            <h3 class="mt-2 text-center"><?php echo $precio; ?></h3>
            <h6 class="text-center"><?php echo $nombre; ?></h6>
            <p class="text-center"><?php echo $descripcion; ?></p>
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary mb-2">Agregar</button>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
</div>