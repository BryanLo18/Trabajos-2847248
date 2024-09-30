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
                Ingrese las horas totales<?php echo $i; ?>:
                <input type="number" name="horas[]" value="">
                <select name="ocupacion[]" id="">
                    <option value="Ingeniero">Ingeniero</option>
                    <option value="Tecnologo">Tecnologo</option>
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
        foreach ($ocupaciones as $ocupacion) {
            
            if ($ocupacion === "Ingeniero") {
                $impuesto=$sueldo_inge-($sueldo_inge*0.10);
                $valor_hora = (($sueldo_inge - ($sueldo_inge * 0.10)) / 160);
            } else {
                $impuesto=$sueldo_tec-($sueldo_tec*0.05);
                $valor_hora = (($sueldo_tec - ($sueldo_tec * 0.05)) / 160);
            }
    
            if ($total_horas >= 160) {
                $horas_extras = $total_horas - 160;
                $extras=$horas_extras*($valor_hora*1.5);
                $total_sueldo=$impuesto+$extras;
            } else {
                $horas_extras=0;
                $extras=0;
                $total_sueldo=$impuesto;
            }
           
            echo "<p>Empleado $ocupacion</p>";
            echo "<p>Total de horas: $total_horas</p>";
            echo "<p>Horas extras: $horas_extras</p>";
            echo "<p>Pago horas extras: $extras</p>";
            echo "<p>Valor por hora: $valor_hora<p>";
            echo "<p>Total salario: $total_sueldo</p>";
        }
    }
    ?>

</body>

</html>