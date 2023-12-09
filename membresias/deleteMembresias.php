<?php
include("connection.php");
$con = connection();

$membresiaID = $_GET["id"]; // Cambiar el nombre de la variable a algo más genérico

$sql = "DELETE FROM membresias WHERE membresia_id='$membresiaID'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarMembresias.php"); // Cambiar el nombre del archivo a donde redirige
} else {
    echo "Error al eliminar la membresía: " . mysqli_error($con);
}
?>
