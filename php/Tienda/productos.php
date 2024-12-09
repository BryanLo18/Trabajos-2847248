<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
include_once("conexion.php");
include_once("nav.php");




?>
<div class="container mt-4">
    <div class="row">
        <?php
            if(isset($_POST['buscar'])){
                $buscar=($_POST['buscar']);
                $consulta=$conexion->query("SELECT * FROM productos WHERE  nombre LIKE '%$buscar%' ORDER BY nombre ASC");
            }else{
                $consulta = $conexion->query("SELECT * FROM productos");
            }
            while ($row = $consulta->fetch_array()) {
                $nombre = $row['nombre'];
                $descripcion = $row['descripcion'];
                $precio = $row['precio'];
            ?>
        <div class="col-lg-4 col-md-3  mb-4">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $precio; ?></h5>
                    <h6 class="card-title"><?php echo $nombre; ?></h6>
                    <p class="card-text"><?php echo $descripcion; ?></p>
                </div>
                <button class="btn btn-danger">Agregar</button>
            </div>
        </div>
        <?php
            }
            ?>
    </div>
</div>