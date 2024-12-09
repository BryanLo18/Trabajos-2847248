<?php
include_once("base_d_datos_far.php");

if(isset($_POST['ini']) and isset($_POST['fin'])){
    $inicio=($_POST['ini']);
    $final=($_POST['fin']);

}else{
    $inicio=date('Y-m-d');
    $final=date('Y-m-d');
}
?>





<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container d-flex justify-content-center aling-items-center">
        <h1>Medicamentos</h1>
    </div>
    <div class="container d-flex justify-content-center aling-items-center">
        <form action="" method="POST">
            <input type="text" name="buscar" class="form-control mt-3" placeholder="Buscar">
            <input type="submit" class="btn btn-success mt-1" value="buscar">

        </form>
    </div>
    <div class="container">
        <table class="table border mt-3">
            <form action="" method="POST">
                <div class="row-fluid">
                    <div class="span4">
                        <strong>Fecha Incio</strong><br>
                        <input type="date" name="ini" value="<?php echo $inicio; ?>" required>
                    </div>
                    <div class="span4">
                        <strong>Fecha Fin</strong><br>
                        <input type="date" name="fin" value="<?php echo $final; ?>" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-1"><i class="icon-search"></i>Buscar</button>
            </form>
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Codigo</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Laboratorio</th>
                    <th scope="col">Fecha</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once('base_d_datos_far.php');
                if(isset($_POST['buscar'])){
                    $buscar=($_POST['buscar']);
                    $consulta=$conexion->query("SELECT * FROM medicamento WHERE  nombre LIKE '%$buscar%' ORDER BY nombre ASC");
                }elseif(!empty($_POST['ini']) and !empty($_POST['fin'])){
                    $ini=($_POST['ini']);
                    $fin=($_POST['fin']);
                    $consulta=$conexion->query("SELECT * FROM medicamento WHERE  fecha BETWEEN '$ini' and '$fin' ORDER BY nombre ASC");
                }else{
                    $consulta=$conexion->query("SELECT * FROM medicamento");  
                }
                while($row=$consulta->fetch_array()){
                    $id=$row['id'];
                    $nombre=$row['nombre'];
                    $tipo=$row['tipo'];
                    $codigo=$row['codigo'];
                    $precio=$row['precio'];
                    $laboratorio=$row['laboratorio'];
                    $fecha=$row['fecha'];
            ?>
                <tr>
                    <td><?php echo $id;?></td>   
                    <td><?php echo $nombre;?></td>
                    <td><?php echo $tipo;?></td>
                    <td><?php echo $codigo;?></td>
                    <td><?php echo $precio;?></td>
                    <td><?php echo $laboratorio;?></td>
                    <td><?php echo $fecha;?></td>
                    <td>
                       
                        <a class="btn btn-success" href="modificar.php?
                                nombre=<?php echo $nombre?> &
                                tipo=<?php echo $tipo ?> &
                                codigo=<?php echo $codigo?>&
                                precio=<?php echo $precio ?> &
                                laboratorio=<?php echo $row['laboratorio']?>" title="Editar">
                                <i class="btn btn-success">Editar</i>
                        </a>

                    </td>
                    <td>
                        <a href="eliminar.php
                        ?codigo=<?php echo $codigo;?>" title="Eliminar">
                            <i class="btn btn-success">Eliminar</i>
                        </a>
                    </td>
                </tr>
                <?php
    }
    ?>
            </tbody>
        </table>
    </div>
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center aling-items-center">

                <a class="btn btn-success" href="index.php" role="button">Volver</a>
            </div>
        </div>
</body>

</html>


</div>