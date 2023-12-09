<?php
include("connection.php");
$con = connection();

$grupoID = $_GET['id'];

$sql = "SELECT * FROM grupos WHERE grupo_id='$grupoID'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Grupo</title>
    <!-- Agrega enlaces a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .grupo-form {
            max-width: 400px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .grupo-form input {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="grupo-form">
            <h2 class="mb-4">Editar Grupo</h2>
            <form action="editarGrupos.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['grupo_id'] ?>">
                <div class="form-group">
                    <label for="nombre_grupo">Nombre del Grupo</label>
                    <input type="text" class="form-control" name="nombre_grupo" placeholder="Nombre del Grupo" value="<?= $row['nombre_grupo'] ?>">
                </div>
                <div class="form-group">
                    <label for="horario_id">ID del Horario</label>
                    <input type="number" class="form-control" name="horario_id" placeholder="ID del Horario" value="<?= $row['horario_id'] ?>">
                </div>
                <!-- Puedes agregar más campos según la estructura de tu tabla 'grupos' -->
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
