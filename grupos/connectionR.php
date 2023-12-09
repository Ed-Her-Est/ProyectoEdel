<?php
// Definir las credenciales de la base de datos
$host = "localhost";
$usuario = "root";
$contrasenia = "";
$base_datos = "starfit";

// Crear la conexión
$con = mysqli_connect($host, $usuario, $contrasenia, $base_datos);

// Verificar la conexión
if (!$con) {
    die("La conexión a la base de datos ha fallado: " . mysqli_connect_error());
}
?>
