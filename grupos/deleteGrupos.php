<?php
include("connection.php");
$con = connection();

$grupo_id = $_GET["id"]; // Cambiar el nombre de la variable a algo más genérico

$sql = "DELETE FROM grupos WHERE grupo_id='$grupo_id'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarGrupos.php"); // Cambiar el nombre del archivo a donde redirige
    exit(); // Añadido para evitar que el script continúe después de la redirección
} else {
    echo "Error al eliminar el grupo: " . mysqli_error($con);
}
?>
