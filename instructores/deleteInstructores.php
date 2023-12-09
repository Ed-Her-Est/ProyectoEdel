<?php
include("connection.php");
$con = connection();

$instructorID = $_GET["id"]; // Cambiar el nombre de la variable a algo más genérico

$sql = "DELETE FROM instructores WHERE instructor_id='$instructorID'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarInstructores.php"); // Cambiar el nombre del archivo a donde redirige
} else {
    echo "Error al eliminar el instructor: " . mysqli_error($con);
}
?>
