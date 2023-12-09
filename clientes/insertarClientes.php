<?php
include('connection.php');
$con = connection();

$cliente_id = null;
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$correo_electronico = $_POST['correo_electronico'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$fecha_registro = date('Y-m-d H:i:s');

$sql = "INSERT INTO clientes (nombre, apellidos, fecha_nacimiento, correo_electronico, telefono, direccion, fecha_registro) 
        VALUES ('$nombre', '$apellidos', '$fecha_nacimiento', '$correo_electronico', '$telefono', '$direccion', '$fecha_registro')";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarClientes.php");
    exit(); // Detener la ejecución después de la redirección
} else {
    echo "Error al insertar cliente: " . mysqli_error($con);
}
?>
