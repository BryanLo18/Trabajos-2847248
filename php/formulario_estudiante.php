<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <form action="ingresar_estudiante.php" method="POST">
            <div class="row">
                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label">Documento</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" name="documento">
                </div>
                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre">
                </div>
                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="apellido">
                </div>
                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email">
                </div>
                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label">Edad</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" name="edad">
                </div>
                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label">Nota1</label>
                    <input type="float" class="form-control" id="exampleFormControlInput1" name="nota1">
                </div>
                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label">Nota2</label>
                    <input type="float" class="form-control" id="exampleFormControlInput1" name="nota2">
                </div>
                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label">Nota3</label>
                    <input type="float" class="form-control" id="exampleFormControlInput1" name="nota3">
                </div>
            </div>

            
            <label for="">Grupos</label>
            <select name="grupo" class="mt-2" id="">
                <?php
                include_once('conexion_bd_estudiante.php');
        $consulta=$conexion->query("SELECT * FROM grupos");
         while($row=$consulta->fetch_array()){
            echo '<option value="'.$row['nombre'].'" <selected>'.$row['nombre'].'</option>';
         }
         ?>
            </select>
            <label for="">Grupos</label>
            <select name="profesor" class="mt-2" id="">
                <?php
                include_once('conexion_bd_estudiante.php');
        $consulta=$conexion->query("SELECT * FROM profesores");
         while($row=$consulta->fetch_array()){
            echo '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
         }
         ?>
            </select>
            <div class="col">
            <input type="submit" class="btn btn-primary mt-3" value="Ingresar">
            </div>
        </form>
    </div>

    <div class="container">
        <div class="row">
            <div class="col justify-content-start mt-3">

                <a class="btn btn-primary mt-3" href="index.php" role="button">Volver</a>
            </div>
        </div>
    </div>


</body>

</html>