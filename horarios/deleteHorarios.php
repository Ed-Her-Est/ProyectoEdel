<?php
include("connection.php");
$con = connection();

$horario_id = $_GET["id"]; // Cambiar el nombre de la variable a algo más genérico

$sql = "DELETE FROM horarios WHERE horario_id='$horario_id'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarHorarios.php"); // Cambiar el nombre del archivo a donde redirige
    exit(); // Añadido para evitar que el script continúe después de la redirección
} else {
    echo "Error al eliminar el horario: " . mysqli_error($con);
}
?>
