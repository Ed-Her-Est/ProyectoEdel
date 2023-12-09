<?php
include('connection.php');
$con = connection();

$ejercicio_id = $_POST["id"];
$nombre_ejercicio = $_POST['nombre_ejercicio'];
$descripcion = $_POST['descripcion'];
$grupo_muscular = $_POST['grupo_muscular'];

$sql = "UPDATE ejercicios SET nombre_ejercicio='$nombre_ejercicio', descripcion='$descripcion', grupo_muscular='$grupo_muscular' WHERE ejercicio_id='$ejercicio_id'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarEjercicios.php");
    exit(); // Añadido para evitar que el script continúe después de la redirección
} else {
    echo "Error en la actualización: " . mysqli_error($con);
}
?>
