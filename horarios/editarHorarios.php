<?php
include('connection.php');
$con = connection();

$horario_id = $_POST["id"];  // Cambiar el nombre de la variable a algo más genérico
$dia_semana = $_POST['dia_semana'];
$hora_inicio = $_POST['hora_inicio'];
$hora_fin = $_POST['hora_fin'];

$sql = "UPDATE horarios SET dia_semana='$dia_semana', hora_inicio='$hora_inicio', hora_fin='$hora_fin' WHERE horario_id='$horario_id'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarHorarios.php");
    exit(); // Añadido para evitar que el script continúe después de la redirección
} else {
    echo "Error en la actualización: " . mysqli_error($con);
}
?>
