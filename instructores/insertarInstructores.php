<?php
include('connection.php');
$con = connection();

$instructor_id = null;
$nombre_instructor = $_POST['nombre_instructor'];
$especialidad = $_POST['especialidad'];
$correo_electronico = $_POST['correo_electronico'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];

$sql = "INSERT INTO instructores (nombre_instructor, especialidad, correo_electronico, telefono, direccion) 
        VALUES ('$nombre_instructor', '$especialidad', '$correo_electronico', '$telefono', '$direccion')";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarInstructores.php");
    exit(); // Detener la ejecución después de la redirección
} else {
    echo "Error al insertar instructor: " . mysqli_error($con);
}
?>
