<?php
include('connectionR.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nombre del archivo CSV
    $csvFileName = 'backup_clientes_' . date('Y-m-d_H-i-s') . '.csv';

    // Encabezados del archivo CSV
    $csvData = "cliente_id,nombre,apellidos,fecha_nacimiento,correo_electronico,telefono,direccion,fecha_registro,created_at,updated_at,deleted_at\n";

    // Consulta para obtener todos los registros de la tabla clientes
    $sql = "SELECT * FROM clientes";
    $result = mysqli_query($con, $sql);

    // Recorre los resultados y agrega cada fila al archivo CSV
    while ($row = mysqli_fetch_assoc($result)) {
        $csvData .= "{$row['cliente_id']},{$row['nombre']},{$row['apellidos']},{$row['fecha_nacimiento']},{$row['correo_electronico']},{$row['telefono']},{$row['direccion']},{$row['fecha_registro']},{$row['created_at']},{$row['updated_at']},{$row['deleted_at']}\n";
    }

    // Configuración de las cabeceras para descargar el archivo CSV
    header('Content-Type: application/csv');
    header('Content-Disposition: attachment; filename="' . $csvFileName . '"');

    // Salida del contenido del archivo CSV
    echo $csvData;
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descarga de Base de Datos</title>
    <!-- Enlaces a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Descarga de Base de Datos - Clientes</h1>
        <form action="" method="post">
            <button type="submit" class="btn btn-primary">Descargar Respaldo CSV</button>
        </form>
        <div class="container mt-5">
            <a class="btn btn-success" href="mostrarClientes.php">Regresar</a>
        </div>
    </div>
    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
