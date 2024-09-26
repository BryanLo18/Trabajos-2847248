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
        if(empty($_REQUEST)){
    
    ?>
    <form action="" method="POST">
        <input type="text" name="num" id="">
        <input type="submit" value="Enviar">
    </form>
    <?php
    }elseif(isset($_REQUEST['num'])){
    ?>
    <form action="" method="POST">
        <?php
            $numero=$_REQUEST['num'];
            for($i=0;$i<$numero;$i++){
                ?>
            Ingrese las horas totales<?php echo $i;?>:
            <input type="number" name="horas[]" value="">
            <select name="ocupacion" id="">
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
}else{
    $sueldo_inge=3000000;
    $sueldo_tec=2000000;
    $ocupacion=$_REQUEST['ocupacion'];
    $horas=$_REQUEST['horas'];
    $total_horas=$_REQUEST['horas'];
    foreach($total_horas as $horas){
        if($ocupacion == "ing"){
            $valor_hora=(($sueldo_inge/30)/8);
            echo "Valor hora: ",$valor_hora;

        }
        if($ocupacion== "tec"){
            $valor_hora=(($sueldo_tec/30)/8);
            echo "Valor hora: ",$valor_hora;
        }
        
        if($total_horas>160){
            $horas_extras=$horas-160;
            
        }else{
            
        }

        
    }

}
?>

</body>
</html>