<?php
include("connection.php");
$con = connection();

$ejercicioID = $_GET["id"]; // Cambiar el nombre de la variable a algo más genérico

$sql = "DELETE FROM ejercicios WHERE ejercicio_id='$ejercicioID'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarEjercicios.php"); // Cambiar el nombre del archivo a donde redirige
} else {
    echo "Error al eliminar el ejercicio: " . mysqli_error($con);
}
?>
