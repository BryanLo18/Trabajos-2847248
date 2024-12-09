<?php
session_start();
include_once("conexion.php");



if(empty($_SESSION['user_correo'])){
    header("Location: login.php");
    exit();
}

$user_name=$_SESSION['nombre_user'];

$tipo_use=$_SESSION['tipo_user'];
if($tipo_use=="admi"){
    $nombre_use="Adminitrador";
}elseif($tipo_use=="usu"){
    $nombre_use="Usuario";
}


if(isset($_POST['ini']) and isset($_POST['fin'])){
    $inicio=($_POST['ini']);
    $final=($_POST['fin']);

}else{
    $inicio=date('Y-m-d');
    $final=date('Y-m-d');
}

include_once("nav.php");
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
    <div class="container">
        <?php
    echo $user_name.'<br>';
    echo $nombre_use.'<br>';
    ?>
        <a href="cerrar_login.php" class="btn btn-primary">Salir</a>
    </div>

    <div class="container d-flex justify-content-center aling-items-center mb-3">
        <form action="" method="POST">
            <input type="text" name="buscar" class="form-control mt-3" placeholder="Buscar">
            <input type="submit" class="btn btn-primary mt-1" value="buscar">

        </form>
    </div>
    <div class="container">
        <table class="table border mt-3">


            <div class="container d-flex justify-content-center">
                <form action="" method="POST">
                    <div class="row-fluid">
                        <div class="span4">
                            <strong>Fecha Incio</strong><br>
                            <input type="date" name="ini" value="<?php echo $inicio; ?>">
                        </div>
                        <div class="span4">
                            <strong>Fecha Fin</strong><br>
                            <input type="date" name="fin" value="<?php echo $final; ?>"><br>
                            <button type="submit" class="btn btn-primary mt-1"><i
                                    class="icon-search"></i>Buscar</button>
                        </div>
                    </div>

                </form>
            </div>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Fecha</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(isset($_POST['buscar'])){
                    $buscar=($_POST['buscar']);
                    $consulta=$conexion->query("SELECT * FROM productos WHERE  nombre LIKE '%$buscar%' ORDER BY nombre ASC");
                }elseif(!empty($_POST['ini']) and !empty($_POST['fin'])){
                    $ini=($_POST['ini']);
                    $fin=($_POST['fin']);
                    $consulta=$conexion->query("SELECT * FROM productos WHERE  fecha BETWEEN '$ini' and '$fin' ORDER BY nombre ASC");
                }else{
                    $consulta=$conexion->query("SELECT * FROM productos");  
                }
                while($row=$consulta->fetch_array()){
                    $id=$row['id'];
                    $nombre=$row['nombre'];
                    $descripcion=$row['descripcion'];
                    $precio=$row['precio'];
                    $fecha=$row['fecha'];
            ?>
                <tr>
                    <td><?php echo $id;?></td>
                    <td><?php echo $nombre;?></td>
                    <td><?php echo $descripcion;?></td>
                    <td><?php echo $precio;?></td>
                    <td><?php echo $fecha;?></td>
                    <td>

                        <a href="modificar.php?
                                id=<?php echo $id; ?> &
                                nombre=<?php echo $nombre?> &
                                descripcion=<?php echo $descripcion ?> &
                                precio=<?php echo $precio ?>" title="Editar">
                            <i class="btn btn-primary">Editar</i>
                        </a>

                    </td>
                    <td>
                        <a href="eliminar.php
                        ?id=<?php echo $id;?>" title="Eliminar">
                            <i class="btn btn-danger">Eliminar</i>
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

                <a class="btn btn-primary" href="index.php" role="button">Volver</a>
            </div>
        </div>
</body>

</html>