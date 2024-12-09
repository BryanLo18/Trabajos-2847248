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
    <link rel="stylesheet" href="css/mi_estilos.css">
    <title>Document</title>
</head>

<body>

    <div class="container d-flex justify-content-center rounded-3 ">
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
                                    echo "Bienvenido<br>".$row['nombre'];
                                    echo '<meta http-equiv="refresh" content="2;url=consultar_productos.php">';
                                    
                                }
                            }else{
                                
                                echo ('usted no se encuentra Activo en la base de datos<br>Consulte con su administrador');
                            }

                        }else{
                            echo 'Usuario y contraseña incorrecto<br>';
                            echo '<center><a href="login.php" class="btn btn-danger"><strong>Intentar de nuevo</strong></a></center>';
                        }  
                    
                    }else{
                        echo '<div class="container border border-black rounded-3 mt-4">
                        <h1 class="modal-title fs-5 pt-3" id="exampleModalLabel">!Bienvenido otra vez¡</h1>
                        <div class="container">
                            <p>Ingresa tus datos para iniciar sesión en Tiendas D1</p>
                        </div>
                        
            <div>
                <input type="text" name="user_correo" class="form-control mt-4" placeholder="Correo">
                <input type="text" name="con" class="form-control mt-4" placeholder="Contraseña">
                <div class="container d-flex justify-content-end pt-4">
                <a href="recuperar.php" >¿Olvidates tu
                    contraseña?</a>
            </div>
            <input type="submit" class="btn btn-danger rounded-4 mt-5 d-block mx-auto btn-lg" value="Iniciar Sesión">
        </div>
        <div class="text-center mt-5">
                <p>O iniciar sesión con Google </p>
                <button class="btn boton-color rounded-4 btn-lg border border-dark-subtle" type="button"><i
                        class="bi bi-google pe-1"></i>Google</button>
                <hr>
                <button type="button" class="btn btn-danger  rounded-4 btn-lg mb-1 ">Crear cuenta</button>
            </div>
        </div>';
                    }
                    ?>



        </form>
    </div>

    
</body>

</html>