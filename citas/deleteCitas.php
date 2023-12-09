<?php
include("connection.php");
$con = connection();

$citaID = $_GET["id"]; // Cambiar el nombre de la variable a algo más genérico

$sql = "DELETE FROM citas WHERE cita_id='$citaID'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarCitas.php"); // Cambiar el nombre del archivo a donde redirige
} else {
    echo "Error al eliminar la cita: " . mysqli_error($con);
}
?>
