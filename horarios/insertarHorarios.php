<?php
include('connection.php');
$con = connection();

$horario_id = null;
$dia_semana = $_POST['dia_semana'];
$hora_inicio = $_POST['hora_inicio'];
$hora_fin = $_POST['hora_fin'];

$sql = "INSERT INTO horarios (dia_semana, hora_inicio, hora_fin) 
        VALUES ('$dia_semana', '$hora_inicio', '$hora_fin')";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarHorarios.php");
    exit(); // Detener la ejecución después de la redirección
} else {
    echo "Error al insertar horario: " . mysqli_error($con);
}
?>
