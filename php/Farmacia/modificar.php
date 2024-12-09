<?php
    
    $nombre=($_GET['nombre']);
    $tipo=($_GET['tipo']);
    $codigo=($_GET['codigo']);
    $precio=($_GET['precio']);
    $laboratorio=($_GET['laboratorio']);

    
    
?>

<form action="editar.php" method="POST">
    <tr>
        <input type="text" name="nombre" value="<?php echo $nombre;?>">
        <input type="text" name="tipo" value="<?php echo $tipo;?>">
        <input type="number" name="codigo" value="<?php echo $codigo;?>">
        <input type="text" name="precio" value="<?php echo $precio;?>">
        <input type="text" name="laboratorio" value="<?php echo $laboratorio;?>">


        <input type="submit" value="Editar">
    </tr>
</form>