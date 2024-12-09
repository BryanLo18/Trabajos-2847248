
    <?php
    $nombre=($_GET['nombre']);
    $tipo=($_GET['tipo']);
    $precio=($_GET['precio']);
    $codigo=($_GET['codigo']);
    ?>
    <form action="editar.php" method="POST">
        <tr>
            <td><input type="text" name="nombre" value="<?php echo $nombre;?>"></td>
            <td><input type="text" name="tipo" value="<?php echo $tipo;?>"></td>
            <td><input type="text" name="nombre" value="<?php echo $precio;?>"></td>
            <td><input type="text" name="codigo" value="<?php echo $codigo;?>"></td>
        </tr>
    </form>