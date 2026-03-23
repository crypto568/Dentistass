<?php

include("conexion.php");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$password = $_POST['password'];
$telefono = $_POST['telefono'];



$sql = "INSERT INTO tbl_ope_usuarios (usu_nombre, usu_correo, usu_contra, usu_telefono, usu_tipo)
VALUES ('$nombre','$correo','$password', '$telefono', 3)";

if($conexion->query($sql) === TRUE){
    echo "Usuario registrado correctamente <br>";
    echo "<a href='login.html'>Ir a login</a>";
}else{
    echo "Error al registrar usuario";
}

$conexion->close();

?>