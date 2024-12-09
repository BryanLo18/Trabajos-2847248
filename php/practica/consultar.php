<?php

include_once("conexion_bd.php");

$consulta=$conexion->query("SELECT * FROM personas");

while($row=$consulta->fetch_array()){
    $nombre=$row['nombre'];
    $documento=$row['cedula'];
    $telefono=$row['telefono'];
    $correo=$row['correo'];

    echo "Nombre: ".$nombre. "<br>";
    echo "Documento: ".$documento. "<br>";
    echo "Telefono: ".$telefono. "<br>";
    echo "Correo: ".$correo. "<br>";
    echo "<br>";
    ?>
    <a href="modificar.php?
    nombre=<?php echo $nombre;?> &
    documento=<?php echo $documento;?> &
    telefono=<?php echo $telefono;?>" title="Editar">editar</a>

    <a href="eliminar.php?
    documento=<?php echo $documento;?>" title="eliminar">eliminar</a>
    <?php
}


?>

<a href="index.php">Volver</a>