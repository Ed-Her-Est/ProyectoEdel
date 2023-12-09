<?php
include("connection.php");
$con = connection();

$usuarioID = $_GET["id"]; // Cambiar el nombre de la variable a algo más genérico

$sql = "DELETE FROM Usuario WHERE ID_Usuario='$usuarioID'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarUsuario.php"); // Cambiar el nombre del archivo a donde redirige
} else {
    echo "Error al eliminar el usuario: " . mysqli_error($con);
}
?>
