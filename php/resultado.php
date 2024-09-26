<?php

$documento=$_REQUEST['documento'];
$nombre=$_REQUEST['nombre'];
$apellido=$_REQUEST['apellido'];
$email=$_REQUEST['email'];
$telefono=$_REQUEST['telefono'];
$direccion=$_REQUEST['direccion'];
$fecha=$_REQUEST['fecha'];
$genero=$_REQUEST['genero'];
$estado=$_REQUEST['estado'];
$ocupacion=$_REQUEST['ocupacion'];
$aux=$_REQUEST['aux'];
$ciudad=$_REQUEST['ciudad'];

$SueldoIng= 3000000;
$SueldoTec= 2000000;

echo "Documento: ", $documento. '<br>';
echo "Nombre: ", $nombre. '<br>';
echo "Apellido: ", $apellido. '<br>';
echo "Email: ", $email. '<br>';
echo "Telefono: ", $telefono. '<br>';
echo "Direccion", $direccion. '<br>';
echo "Fecha de nacimiento: ", $fecha. '<br>';
echo "Genero: ", $genero. '<br>';
echo "Estado civil: ", $estado. '<br>';
echo "Ocupacion: ", $ocupacion. '<br>';
echo "Auxilio de transporte: ", $aux. '<br>';
echo "Ciudad:  ", $ciudad. '<br>';

if($ocupacion == 'Ingeniero'){
    echo "El sueldo es: ",($SueldoIng*0.90)+$aux;
}else{
    echo "El sueldo es: ",($SueldoTec*0.95)+$aux;
}


if(($ciudad == 'Bogota') && ($ocupacion == 'Ing')){
    
} 

?>