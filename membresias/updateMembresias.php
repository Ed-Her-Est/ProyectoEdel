<?php
include("connection.php");
$con = connection();

$clienteID = $_GET['id'];

$sql = "SELECT * FROM membresias WHERE membresia_id='$clienteID'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Membresia</title>
    <!-- Agrega enlaces a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .membresia-form {
            max-width: 400px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .membresia-form input {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="membresia-form">
            <h2 class="mb-4">Editar Membresia</h2>
            <form action="editarMembresias.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['membresia_id'] ?>">
                <div class="form-group">
                    <label for="nombre_membresia">Nombre</label>
                    <input type="text" class="form-control" name="nombre_membresia" placeholder="Nombre Membresia" value="<?= $row['nombre_membresia'] ?>">
                </div>
                <div class="form-group">
                    <label for="duracion_semanas">Duración en Semanas</label>
                    <input type="number" class="form-control" name="duracion_semanas" placeholder="Duración en Semanas" value="<?= $row['duracion_semanas'] ?>">
                </div>
                <div class="form-group">
                    <label for="costo">Costo</label>
                    <input type="text" class="form-control" name="costo" placeholder="Costo" value="<?= $row['costo'] ?>">
                </div>
                <!-- Puedes agregar más campos según la estructura de tu tabla 'membresias' -->
                <div class="form-group text-center">
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                </div>
            </form>
        </div>
    </div>

    <!-- Agrega scripts de Bootstrap y otros que puedas necesitar -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
