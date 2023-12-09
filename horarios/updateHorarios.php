<?php
include("connection.php");
$con = connection();

$horario_id = $_GET['id'];

$sql = "SELECT * FROM horarios WHERE horario_id='$horario_id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Horario</title>
    <!-- Agrega enlaces a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .horario-form {
            max-width: 400px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .horario-form input {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="horario-form">
            <h2 class="mb-4">Editar Horario</h2>
            <form action="editarHorarios.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['horario_id'] ?>">
                <div class="form-group">
                    <label for="dia_semana">Día de la Semana</label>
                    <input type="text" class="form-control" name="dia_semana" placeholder="Día de la Semana" value="<?= $row['dia_semana'] ?>">
                </div>
                <div class="form-group">
                    <label for="hora_inicio">Hora de Inicio</label>
                    <input type="time" class="form-control" name="hora_inicio" value="<?= $row['hora_inicio'] ?>">
                </div>
                <div class="form-group">
                    <label for="hora_fin">Hora de Fin</label>
                    <input type="time" class="form-control" name="hora_fin" value="<?= $row['hora_fin'] ?>">
                </div>
                <!-- Puedes agregar más campos según la estructura de tu tabla 'horarios' -->
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
