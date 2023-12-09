<?php
include('connection.php');
$con = connection();

$grupo_id = null;
$nombre_grupo = $_POST['nombre_grupo'];
$horario_id = $_POST['horario_id']; // Asegúrate de tener un formulario que envíe este valor

$sql = "INSERT INTO grupos (nombre_grupo, horario_id) 
        VALUES ('$nombre_grupo', '$horario_id')";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarGrupos.php");
    exit(); // Detener la ejecución después de la redirección
} else {
    echo "Error al insertar grupo: " . mysqli_error($con);
}
?>
