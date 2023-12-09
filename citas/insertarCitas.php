<?php
include('connection.php');
$con = connection();

$cliente_id = $_POST['cliente_id'];
$grupo_id = $_POST['grupo_id'];
$instructor_id = $_POST['instructor_id'];
$fecha_cita = $_POST['fecha_cita'];
$hora_cita = $_POST['hora_cita'];
$created_at = date('Y-m-d H:i:s');

$sql = "INSERT INTO citas (cliente_id, grupo_id, instructor_id, fecha_cita, hora_cita, created_at) 
        VALUES ('$cliente_id', '$grupo_id', '$instructor_id', '$fecha_cita', '$hora_cita', '$created_at')";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarCitas.php");
    exit(); // Detener la ejecución después de la redirección
} else {
    echo "Error al insertar cita: " . mysqli_error($con);
}
?>
