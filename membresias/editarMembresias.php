<?php
include('connection.php');
$con = connection();

$membresia_id = $_POST["id"];  // Cambiado el nombre de la variable
$nombre_membresia = $_POST['nombre_membresia'];
$duracion_semanas = $_POST['duracion_semanas'];
$costo = $_POST['costo'];

$sql = "UPDATE membresias SET nombre_membresia='$nombre_membresia', duracion_semanas='$duracion_semanas', costo='$costo' WHERE membresia_id='$membresia_id'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarMembresias.php");
    exit(); // Añadido para evitar que el script continúe después de la redirección
} else {
    echo "Error en la actualización: " . mysqli_error($con);
}
?>
