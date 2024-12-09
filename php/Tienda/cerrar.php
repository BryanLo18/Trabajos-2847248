<?php
    session_start();
    session_destroy();
    $_SESSION['user_correo']=NULL;
    $_SESSION['tipo_user']=NULL;
    $_SESSION['nombre_user']=NULL;
    header("Location: login.php");
?>