<?php

session_start();
include_once('conexion.php');
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

    <div class="container d-flex justify-content-center ">
        <form action="" method="POST">

            <?php
                    if(!empty($_POST['user_correo']) and !empty($_POST['con'])){
                        $correo=($_POST['user_correo']);
                        $con=($_POST['con']);

                        $consulta=$conexion->query("SELECT * FROM username where correo='$correo' and con='$con'");
                        if($row=$consulta->fetch_array()){
                            $_SESSION['user_correo']=$correo;
                            $_SESSION['tipo_user']=$row['tipo'];
                            $_SESSION['nombre_user']=$row['nombre'];
                            if($row['estado']=='activo'){
                               
                                if($row['tipo'] == 'admi' or $row['tipo'] == 'usu'){
                                    echo '<div class="card text-center mt-4 container">
                                                <div class="card-body">
                                                    <h5 class="card-title">Bienvenido</h5>
                                                    <p class="card-text">'. $row['nombre'].'</p>
                                                </div>
                                            </div>';
                                    echo '<meta http-equiv="refresh" content="2;url=consultar_producto.php">';
                                    
                                }
                            }else{
                                
                                echo ('usted no se encuentra Activo en la base de datos<br>Consulte con su administrador');
                            }

                        }else{
                            echo 'Usuario y contraseña incorrecto<br>';
                            echo '<center><a href="login.php" class="btn btn-danger"><strong>Intentar de nuevo</strong></a></center>';
                        }  
                    
                    }else{
                        echo '<div class="container border border-black rounded-4  mt-4">
                        <div class="container text-center ">
                           <h2 class="mx-auto">Ingresa tus datos para iniciar sesión</h2>
                        </div>
                        
            <div>
                <input type="text" name="user_correo" class="form-control mt-4" placeholder="Correo">
                <input type="text" name="con" class="form-control mt-4" placeholder="Contraseña">
                <div class="container d-flex justify-content-end pt-4">
                
            </div>
            <input type="submit" class="btn btn-primary rounded-4 mt-5 mb-2 d-block mx-auto btn-lg" value="Iniciar Sesión">';
                    }
                    ?>



        </form>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>