<?php
include('connection.php');
$con = connection();

$ejercicio_id = null;
$nombre_ejercicio = $_POST['nombre_ejercicio'];
$descripcion = $_POST['descripcion'];
$grupo_muscular = $_POST['grupo_muscular'];

$sql = "INSERT INTO Ejercicios (nombre_ejercicio, descripcion, grupo_muscular) 
        VALUES ('$nombre_ejercicio', '$descripcion', '$grupo_muscular')";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarEjercicios.php");
    exit(); // Detener la ejecución después de la redirección
} else {
    echo "Error al insertar ejercicio: " . mysqli_error($con);
}
?>
