<?php
include('connection.php');
$con = connection();

$usuarioID = $_POST["id"]; // Cambiar el nombre de la variable a algo más genérico
$nombre = $_POST['nombre'];
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];
$usuario = $_POST['usuario'];
$contrasenia = $_POST['contrasenia'];
$email = $_POST['email'];

$sql = "UPDATE Usuario SET nombre='$nombre', apellidoPaterno='$apellidoPaterno', apellidoMaterno='$apellidoMaterno', usuario='$usuario', contrasenia='$contrasenia', email='$email' WHERE ID_Usuario='$usuarioID'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarUsuario.php");
    exit(); // Añadido para evitar que el script continúe después de la redirección
} else {
    echo "Error en la actualización: " . mysqli_error($con);
}
?>
