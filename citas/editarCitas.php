<?php
include('connection.php');
$con = connection();

$cita_id = $_POST["id"];  
$cliente_id = $_POST['cliente_id'];
$grupo_id = $_POST['grupo_id'];
$instructor_id = $_POST['instructor_id'];
$fecha_cita = $_POST['fecha_cita'];
$hora_cita = $_POST['hora_cita'];

$sql = "UPDATE citas SET cliente_id='$cliente_id', grupo_id='$grupo_id', instructor_id='$instructor_id', fecha_cita='$fecha_cita', hora_cita='$hora_cita' WHERE cita_id='$cita_id'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarCitas.php");
    exit(); // Añadido para evitar que el script continúe después de la redirección
} else {
    echo "Error en la actualización: " . mysqli_error($con);
}
?>
