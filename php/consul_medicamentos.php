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
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Laboratorio</th>
                    <th scope="col">L</th>
                    <th scope="col">a</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once('base_d_datos_far.php');
                if(isset($_POST['buscar'])){
                    $buscar=($_POST['buscar']);
                    $consulta=$conexion->query("SELECT * FROM medicamento WHERE  nombre LIKE '%$buscar%' ORDER BY nombre ASC");
                }else{
                    $consulta=$conexion->query("SELECT * FROM medicamento");  
                }
                while($row=$consulta->fetch_array()){
            ?>
                <tr>
                    <td><?php echo $row['nombre'];?></td>
                    <td><?php echo $row['tipo'];?></td>
                    <td><?php echo $row['precio'];?></td>
                    <td><?php echo $row['laboratorio'];?></td>
                    <td>
                       
                        <a class="btn btn-success" href="modificar.php?
                                documento=<?php echo $row['nombre'] ?> &
                                nombre=<?php echo $row['tipo'] ?> &
                                precio=<?php echo $row['precio'] ?>
                                laboratorio=<?php echo $row['laboratorio']?>" title="Editar">
                                <i class="btn btn-success">Editar</i>
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