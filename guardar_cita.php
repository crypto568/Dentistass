<?php

include("conexion.php");

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$consulta = $_POST['consulta'];

$sql = "INSERT INTO citas (nombre,telefono,fecha,hora,consulta)
VALUES ('$nombre','$telefono','$fecha','$hora','$consulta')";

if($conexion->query($sql) === TRUE){

echo "Cita registrada correctamente";

}else{

echo "Error al registrar cita";

}

$conexion->close();

?>