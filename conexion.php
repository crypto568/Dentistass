<?php

$conexion = new mysqli("localhost","root","admin","clinica_dental");

if($conexion->connect_error){
die("Error de conexión: " . $conexion->connect_error);
}

?>