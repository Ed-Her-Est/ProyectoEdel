<?php
include("connection.php");
$con = connection();

$citaID = $_GET['id'];

$sql = "SELECT * FROM citas WHERE cita_id='$citaID'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Cita</title>
    <!-- Agrega enlaces a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .cita-form {
            max-width: 400px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .cita-form input {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="cita-form">
            <h2 class="mb-4">Editar Cita</h2>
            <form action="editarCitas.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['cita_id'] ?>">
                <div class="form-group">
                    <label for="cliente_id">ID del Cliente</label>
                    <input type="text" class="form-control" name="cliente_id" placeholder="ID del Cliente" value="<?= $row['cliente_id'] ?>">
                </div>
                <div class="form-group">
                    <label for="grupo_id">ID del Grupo</label>
                    <input type="text" class="form-control" name="grupo_id" placeholder="ID del Grupo" value="<?= $row['grupo_id'] ?>">
                </div>
                <div class="form-group">
                    <label for="instructor_id">ID del Instructor</label>
                    <input type="text" class="form-control" name="instructor_id" placeholder="ID del Instructor" value="<?= $row['instructor_id'] ?>">
                </div>
                <div class="form-group">
                    <label for="fecha_cita">Fecha de Cita</label>
                    <input type="date" class="form-control" name="fecha_cita" value="<?= $row['fecha_cita'] ?>">
                </div>
                <div class="form-group">
                    <label for="hora_cita">Hora de Cita</label>
                    <input type="time" class="form-control" name="hora_cita" value="<?= $row['hora_cita'] ?>">
                </div>
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
