<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ingrese cantidad de empleados</h1>
<?php
if (empty($_REQUEST)) {
?>
    <form action="" method="POST">
        <input type="text" name="num" id="">
        <input type="submit" value="Enviar">
    </form>
<?php
} elseif (isset($_REQUEST['num'])) {
?>
    <form action="" method="POST">
        <?php
        $numero = $_REQUEST['num'];
        for ($i = 0; $i < $numero; $i++) {
        ?>
            Ingrese las horas totales <?php echo $i; ?>:
            <input type="number" name="horas[]" value="">
            <select name="ocupacion[]" id="">
                <option value="ing">Ingeniero</option>
                <option value="tec">Tecnologo</option>
            </select>
            <br>
        <?php
        }
        ?>
        <input type="submit" value="Enviar">
    </form>
<?php
} else {
    $sueldo_inge = 3000000;
    $sueldo_tec = 2000000;
    $ocupaciones = $_REQUEST['ocupacion'];
    $total_horas = $_REQUEST['horas'];

    // Recorremos las horas totales y ocupaciones
    foreach ($total_horas as $key => $hora) {
        // Verificar ocupación de cada empleado
        if ($ocupaciones[$key] == "ing") {
            // Si es ingeniero
            $valor_hora = (($sueldo_inge - ($sueldo_inge * 0.10)) / 160);
        } else {
            // Si es tecnólogo
            $valor_hora = (($sueldo_tec - ($sueldo_tec * 0.05)) / 160);
        }

        // Cálculo de horas extras
        if ($hora >= 160) {
            $horas_extras = $hora - 160;
        } else {
            $horas_extras = 0;
        }

        // Mostrar el resultado para cada empleado
        echo "<p>Empleado " . ($key + 1) . " (Ocupación: " . $ocupaciones[$key] . ")</p>";
        echo "<p>Horas extras: $horas_extras</p>";
        echo "Valor por hora: $valor_hora<br><br>";
    }
}
?>

</body>
</html>