<?php
include('connection.php');
$con = connection();

$grupo_id = $_POST["id"];
$nombre_grupo = $_POST['nombre_grupo'];
$horario_id = $_POST['horario_id'];

$sql = "UPDATE grupos SET nombre_grupo='$nombre_grupo', horario_id='$horario_id' WHERE grupo_id='$grupo_id'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarGrupos.php");
    exit(); // Añadido para evitar que el script continúe después de la redirección
} else {
    echo "Error en la actualización: " . mysqli_error($con);
}
?>
