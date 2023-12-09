<?php
include('connection.php');
$con = connection();

$instructor_id = $_POST["id"];  
$nombre_instructor = $_POST['nombre_instructor'];
$especialidad = $_POST['especialidad'];
$correo_electronico = $_POST['correo_electronico'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];

$sql = "UPDATE instructores SET nombre_instructor='$nombre_instructor', especialidad='$especialidad', correo_electronico='$correo_electronico', telefono='$telefono', direccion='$direccion' WHERE instructor_id='$instructor_id'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarInstructores.php");
    exit(); // Añadido para evitar que el script continúe después de la redirección
} else {
    echo "Error en la actualización: " . mysqli_error($con);
}
?>
