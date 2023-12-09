<?php
include('connection.php');
$con = connection();

$cliente_id = $_POST["id"];  
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$correo_electronico = $_POST['correo_electronico'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$fecha_registro = $_POST['fecha_registro'];

$sql = "UPDATE clientes SET nombre='$nombre', apellidos='$apellidos', fecha_nacimiento='$fecha_nacimiento', correo_electronico='$correo_electronico', telefono='$telefono', direccion='$direccion', fecha_registro='$fecha_registro' WHERE cliente_id='$cliente_id'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarClientes.php");
    exit(); // Añadido para evitar que el script continúe después de la redirección
} else {
    echo "Error en la actualización: " . mysqli_error($con);
}
?>
