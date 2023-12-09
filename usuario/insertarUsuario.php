<?php
include('connection.php');
$con = connection();

$usuarioID = null;
$nombre = $_POST['nombre'];
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];
$usuario = $_POST['usuario'];
$contrasenia = $_POST['contrasenia'];
$email = $_POST['email'];

$sql = "INSERT INTO Usuario (nombre, apellidoPaterno, apellidoMaterno, usuario, contrasenia, email) 
        VALUES ('$nombre', '$apellidoPaterno', '$apellidoMaterno', '$usuario', '$contrasenia', '$email')";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarUsuario.php");
    exit(); // Detener la ejecución después de la redirección
} else {
    echo "Error al insertar usuario: " . mysqli_error($con);
}
?>
