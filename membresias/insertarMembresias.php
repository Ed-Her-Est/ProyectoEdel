<?php
include('connection.php');
$con = connection();

$membresia_id = null;
$nombre_membresia = $_POST['nombre_membresia'];
$duracion_semanas = $_POST['duracion_semanas'];
$costo = $_POST['costo'];

$sql = "INSERT INTO membresias (nombre_membresia, duracion_semanas, costo) 
        VALUES ('$nombre_membresia', $duracion_semanas, $costo)";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarMembresias.php");
    exit(); // Detener la ejecución después de la redirección
} else {
    echo "Error al insertar membresía: " . mysqli_error($con);
}
?>
