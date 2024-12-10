<?php

$host = "localhost"; 
$usuario = "root";  
$contrasena = "";    
$baseDatos = "productos_db"; 


$conn = new mysqli($host, $usuario, $contrasena, $baseDatos);


if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
